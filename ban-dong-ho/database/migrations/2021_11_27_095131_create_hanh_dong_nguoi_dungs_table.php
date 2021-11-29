<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateHanhDongNguoiDungsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('hanh_dong_nguoi_dungs', function (Blueprint $table) {
            $table->id();// id này là mã rồi
            $table->bigInteger("MASANPHAM");
            $table->bigInteger("MANGUOIDUNG");
            $table->integer("LOAIHANHDONG");
            $table->bigInteger("PHANHOI");
            $table->string("GHICHU");
            $table->timestamps();
            $table->engine = 'InnoDB';
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('hanh_dong_nguoi_dungs');
    }
}
