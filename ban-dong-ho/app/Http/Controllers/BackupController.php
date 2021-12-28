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
    // private function xuatSQL($table,&$sql){
    //     $insert ="";
    //     $values = "";
    //     $select = DB::select("select * from `$table`");
    //     foreach($select as $col){
    //         foreach($col as $name=>$v){
    //             $insert .= "`$name`,";
    //             $values .= $v==null?"null,":"'".str_replace("'","\\'",$v)."',";
    //         }
    //         $insert = substr($insert,0,strlen($insert)-1);
    //         $values= substr($values,0,strlen($values)-1);  
    //         $sql.="INSERT INTO `$table` ($insert) VALUES ($values);";  
    //         $insert ="";
    //         $values = "";
    //     }      
    // }
    public function Backup(){
        Artisan::call("backup");
        $backup["sql"] = file_get_contents(storage_path("\\backup\\bakdata.sql"));
        $backup["image"] = [];
        $anhs = HinhAnh::all();
        foreach($anhs as $anh){
            $fileName = $anh->URL;
            $data = file_get_contents(public_path("$anh->URL"));
            array_push($backup["image"],["fileName"=>$fileName,"data"=>base64_encode($data)]);
        }
        $json = json_encode($backup);
        $nen1 = gzcompress(base64_encode($json),9);
        $crypt = Crypt::encrypt($nen1);
        file_put_contents(storage_path("/backup/backup.bakpt"),$crypt);
        return response()->download(storage_path("/backup/backup.bakpt"));
    }

    public function Restore(Request $request){
        $file = $request->backup;
        $duoi = $file->getClientOriginalExtension();
        if($duoi !== "bakpt"){
            $request->session()->put("backup","File không hợp lệ");
            return redirect()->back();
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
            File::put(public_path("$image->fileName"),base64_decode($image->data));                
        }          
        DB::unprepared("
        set global net_buffer_length=1000000; 
        set global max_allowed_packet=1000000000;");
        file_put_contents(storage_path("\\backup\\bakdata.sql"),$data->sql);
        Artisan::call("restore");            
        $request->session()->put("backup","Phục hồi thành công");
        return redirect()->back();
    }
}
