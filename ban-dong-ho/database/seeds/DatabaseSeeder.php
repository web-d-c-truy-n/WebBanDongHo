<?php

use Illuminate\Database\Seeder;
use App\User;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
use App\Model\HinhAnh;
use Illuminate\Support\Facades\Crypt;

class DatabaseSeeder extends Seeder
{
    /**
     * Seed the application's database.
     *
     * @return void
     */
    public function run()
    {   try{
            DB::unprepared(file_get_contents(storage_path("\\don_vi_hanh_chinh.sql")));
        }catch(Exception $e){
            print_r($e);
        }
        
    }
}
