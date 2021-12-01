<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableForeignSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('san_phams', function (Blueprint $table) {
            //khóa ngoại của sản phẩm
            $table->foreign("NGUOIDANG")->references("id")->on("users");
            $table->foreign("HINHDAIDIEN")->references("id")->on("hinh_anhs");
            $table->foreign("MATHUONGHIEU")->references("id")->on("thuong_hieus");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('san_phams', function (Blueprint $table) {
            $table->dropForeign(['NGUOIDANG']);
            $table->dropForeign(['HINHDAIDIEN']);
            $table->dropForeign(['MATHUONGHIEU']);
        });
    }
}
