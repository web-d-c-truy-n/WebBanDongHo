<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateSanPhamsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('san_phams', function (Blueprint $table) {
            $table->id(); // mã sản phẩm
            $table->string("TENSP");
            $table->bigInteger("HINHDAIDIEN");
            $table->string("NDTOMTAT");
            $table->text("NOIDUNG");
            $table->bigInteger("NGUOIDANG");
            $table->integer("DADUYET");
            $table->integer("GIABAN");
            $table->integer("GIAMGIA");
            $table->bigInteger("MATHUONGHIEU");
            $table->string("DONVITINH");            
            $table->timestamps();
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::dropIfExists('san_phams');
    }
}