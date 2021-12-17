<?php

namespace App\Console\Commands;

use Illuminate\Console\Command;
use Illuminate\Support\Facades\Schema;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Config;
use Illuminate\Support\Facades\DB;

class RestoreCommand extends Command
{
    /**
     * The name and signature of the console command.
     *
     * @var string
     */
    protected $signature = 'restore';

    /**
     * The console command description.
     *
     * @var string
     */
    protected $description = 'restore data';

    /**
     * Create a new command instance.
     *
     * @return void
     */
    public function __construct()
    {
        parent::__construct();
    }

    /**
     * Execute the console command.
     *
     * @return int
     */
    public function handle()
    {
        Schema::table('san_phams', function (Blueprint $table) {
            $table->dropForeign(['NGUOIDANG']);
            $table->dropForeign(['HINHDAIDIEN']);
            $table->dropForeign(['MATHUONGHIEU']);
        });
        Schema::table('hanh_dong_nguoi_dungs', function (Blueprint $table) {
            //
            $table->dropForeign(["MASANPHAM"]);
            $table->dropForeign(["MANGUOIDUNG"]);
            $table->dropForeign(["PHANHOI"]);
        });
        Schema::table('don_hangs', function (Blueprint $table) {
            //
            $table->dropForeign(["MANGUOIDUNG"]);
        });
        Schema::table('ct_don_hangs', function (Blueprint $table) {
            //
            $table->dropForeign(["SODONHANG"]);
            $table->dropForeign(["MASANPHAM"]);
        });
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropForeign(["MATINH"]);
            $table->dropForeign(["MAQUAN_HUYEN"]);
            $table->dropForeign(["MAPHUONG_XA"]);
        });
        Schema::table('anh_san_phams', function (Blueprint $table) {
            //
            $table->dropForeign(["MAANH"]);
            $table->dropForeign(["MASANPHAM"]);
        });
        Schema::table('bai_viets', function (Blueprint $table) {
            //
            $table->dropForeign(["HINHDAIDIEN"]);
        });

        $databaseName = Config::get('database.connections.'.Config::get('database.default'));
        $database = $databaseName["database"];
        $tableName = DB::select("SELECT table_name FROM information_schema.tables WHERE table_schema = '$database';");
        foreach($tableName as $table){
            if($table->table_name != "migrations" && $table->table_name !="tinhthanhpho" && $table->table_name != "quanhuyen" && $table->table_name !="xaphuongthitran")
                DB::unprepared("DELETE FROM `$table->table_name`");
        }
        DB::unprepared(file_get_contents(storage_path("\\backup\\bakdata.sql")));
        Schema::table('san_phams', function (Blueprint $table) {
            //khóa ngoại của sản phẩm
            $table->foreign("NGUOIDANG")->references("id")->on("users");
            $table->foreign("HINHDAIDIEN")->references("id")->on("hinh_anhs");
            $table->foreign("MATHUONGHIEU")->references("id")->on("thuong_hieus");
        });
        Schema::table('hanh_dong_nguoi_dungs', function (Blueprint $table) {
            //khóa ngoại hành động người dùng
            $table->foreign("MASANPHAM")->references("id")->on("san_phams")->onDelete("SET NULL");
            $table->foreign("MANGUOIDUNG")->references("id")->on("users")->onDelete("SET NULL");
            $table->foreign("PHANHOI")->references("id")->on("hanh_dong_nguoi_dungs")->onDelete("SET NULL");
        });
        Schema::table('don_hangs', function (Blueprint $table) {
            //khóa ngoại của đơn hàng
            $table->foreign("MANGUOIDUNG")->references("id")->on("users");
        });
        Schema::table('ct_don_hangs', function (Blueprint $table) {
            //Khóa ngoại của chi tiết đơn hàng
            $table->foreign("SODONHANG")->references("id")->on("don_hangs");
            $table->foreign("MASANPHAM")->references("id")->on("san_phams");
        });
        Schema::table('users', function (Blueprint $table) {
            //
            $table->foreign("MATINH")->references("id")->on("tinhthanhpho");
            $table->foreign("MAQUAN_HUYEN")->references("id")->on("quanhuyen");
            $table->foreign("MAPHUONG_XA")->references("id")->on("xaphuongthitran");
        });
        Schema::table('anh_san_phams', function (Blueprint $table) {
            //Khóa ngoại ảnh sản phẩm
            $table->foreign("MAANH")->references("id")->on("hinh_anhs");
            $table->foreign("MASANPHAM")->references("id")->on("san_phams");
        });
        Schema::table('bai_viets', function (Blueprint $table) {
            //Khóa ngoại bài viết
            $table->foreign("HINHDAIDIEN")->references("id")->on("hinh_anhs");
        });
        return 0;
    }
}
