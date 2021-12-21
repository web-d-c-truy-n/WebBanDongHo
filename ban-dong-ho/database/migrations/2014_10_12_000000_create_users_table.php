<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateUsersTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('users', function (Blueprint $table) {
            $table->id();
            $table->string('HOTEN');
            $table->integer("GIOITINH");
            $table->date("NGAYSINH")->nullable();
            $table->string("SDT",12);
            $table->string('email',100);
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->integer('TRANGTHAI')->nullable();
            $table->string('DIACHI')->nullable();
            $table->string('GHICHU')->nullable();
            $table->bigInteger('MATINH')->unsigned()->nullable();
            $table->bigInteger('MAQUAN_HUYEN')->unsigned()->nullable();
            $table->bigInteger('MAPHUONG_XA')->unsigned()->nullable();
            $table->integer('VAITRO')->nullable();
            $table->string('FACEBOOK_ID')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
