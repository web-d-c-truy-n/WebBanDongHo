<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableForeignHanhDongNguoiDung extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('hanh_dong_nguoi_dungs', function (Blueprint $table) {
            //khóa ngoại hành động người dùng
            $table->foreign("MASANPHAM")->references("id")->on("san_phams")->onDelete("SET NULL");
            $table->foreign("MANGUOIDUNG")->references("id")->on("users")->onDelete("SET NULL");
            $table->foreign("PHANHOI")->references("id")->on("hanh_dong_nguoi_dungs")->onDelete("SET NULL");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('hanh_dong_nguoi_dungs', function (Blueprint $table) {
            //
            $table->dropForeign(["MASANPHAM"]);
            $table->dropForeign(["MANGUOIDUNG"]);
            $table->dropForeign(["PHANHOI"]);
        });
    }
}
