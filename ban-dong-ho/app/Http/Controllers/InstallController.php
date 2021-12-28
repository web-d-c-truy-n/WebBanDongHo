<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Helper\Backup;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Crypt;
use Illuminate\Support\Facades\File;
use Illuminate\Support\Facades\DB;

class InstallController extends Controller
{
    //
    public function Wellcome(){
        return view('admin.wellcome');
    }

    public function dkTaiKhoanMoi(){
        return view('admin.register',["install"=>true]);
    }

    public function Install(Request $request){
        $user = $request->all();
        unset($user["_token"]);
        $user["VAITRO"] = 1;
        Backup::$user = $user;
        Artisan::call("migrate:refresh");
        Auth::loginUsingId(1);
        return redirect("/admin");
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
        Artisan::call("migrate:refresh");
        Artisan::call("restore");            
        return redirect("/");
    }
}
