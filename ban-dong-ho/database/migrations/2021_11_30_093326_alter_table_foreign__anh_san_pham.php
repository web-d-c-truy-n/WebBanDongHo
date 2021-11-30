<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableForeignAnhSanPham extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('anh_san_phams', function (Blueprint $table) {
            //Khóa ngoại ảnh sản phẩm
            $table->foreign("MAANH")->references("id")->on("hinh_anhs");
            $table->foreign("MASANPHAM")->references("id")->on("san_phams");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('anh_san_phams', function (Blueprint $table) {
            //
            $table->dropForeign(["MAANH"]);
            $table->dropForeign(["MASANPHAM"]);
        });
    }
}
