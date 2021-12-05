<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use App\Model\HinhAnh;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Crypt;
use PHPUnit\Util\Json;
use Illuminate\Support\Facades\File;
use Helper\Backup;
use Illuminate\Support\Facades\Artisan;

class BackupController extends Controller
{
    //
    private function xuatSQL($table,&$sql){
        $insert ="";
        $values = "";
        $select = DB::select("select * from `$table`");
        foreach($select as $col){
            foreach($col as $name=>$v){
                $insert .= "`$name`,";
                $values .= $v==null?"null,":"'".str_replace("'","\\'",$v)."',";
            }
            $insert = substr($insert,0,strlen($insert)-1);
            $values= substr($values,0,strlen($values)-1);  
            $sql.="INSERT INTO `$table` ($insert) VALUES ($values);";  
            $insert ="";
            $values = "";
        }      
    }
    public function Backup(){
        $backup = [];
        $sql = "";
        $databaseName = Config::get('database.connections.'.Config::get('database.default'));
        $database = $databaseName["database"];
        $tableName = DB::select("SELECT table_name FROM information_schema.tables WHERE table_schema = '$database';");
        foreach($tableName as $table){
            if($table->table_name != "migrations")
                $this->xuatSQL($table->table_name,$sql);
        }   
        $backup["sql"] = $sql;
        $backup["image"] = [];
        $anhs = HinhAnh::all();
        foreach($anhs as $anh){
            $fileName = $anh->URL;
            $data = file_get_contents(public_path("\\storages\\$anh->URL"));
            array_push($backup["image"],["fileName"=>$fileName,"data"=>base64_encode($data)]);
        }
        $json = json_encode($backup);
        $nen1 = gzcompress(base64_encode($json),9);
        $crypt = Crypt::encrypt($nen1);
        file_put_contents(storage_path("/backup/backup.bakdh"),$crypt);
        return response()->download(storage_path("/backup/backup.bakdh"));
    }

    public function Restore(Request $request){
        if ($request->hasFile('backup')) {
            $file = $request->backup;
            $duoi = $file->getClientOriginalExtension();
            if($duoi !== "bakdh"){
                return Response()->json(["lỗi"=>"File không hợp lệ"]);
            }
            $path = $file->getRealPath();
            $filedata = file_get_contents($path);
            $decrypt = Crypt::decrypt($filedata);
            $extract = gzuncompress($decrypt);
            $json = base64_decode($extract);
            $data = json_decode($json);
            foreach($data->image as $image){     
                $image->fileName = str_replace("\n","","$image->fileName");
                $image->fileName = str_replace("\r","","$image->fileName");
                File::put(public_path("\\storages\\$image->fileName"),base64_decode($image->data));
                
            }
            Backup::$sql = "sql";
            file_put_contents(storage_path("\\backup.sql"),$data->sql);
            Artisan::call("migrate:refresh");
            unlink(storage_path("\\backup.sql"));
            echo "Backup thành công";
        }
    }
}
