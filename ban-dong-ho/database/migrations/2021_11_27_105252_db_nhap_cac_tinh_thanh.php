<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;
use Illuminate\Support\Facades\DB;
use Helper\Backup;
use App\User;

class DbNhapCacTinhThanh extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        //
        if(Backup::$sql != null){
            DB::unprepared(file_get_contents(storage_path("\\backup.sql")));
            Backup::$sql = null;
        }            
        else{
            $user = new User();
            $user->HOTEN = "admin";
            $user->GIOITINH = 1;
            $user->NGAYSINH = "2021-12-04";
            $user->SDT = "0000";
            $user->email = "admin@gmail.com";
            $user->name = "admin";
            $user->password = md5("123456");
            $user->save();
            DB::unprepared(file_get_contents(storage_path("\\don_vi_hanh_chinh.sql")));
        }
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //
    }
}
