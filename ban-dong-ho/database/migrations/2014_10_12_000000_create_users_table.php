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
            $table->date("NGAYSINH");
            $table->string("SDT");
            $table->string('email',100)->unique();
            $table->string('name')->nullable();
            $table->string('password')->nullable();
            $table->integer('TRANGTHAI')->nullable();
            $table->string('DIACHI')->nullable();
            $table->string('GHICHU')->nullable();
            $table->string('MATINH',5)->nullable();
            $table->string('MAQUAN_HUYEN',5)->nullable();
            $table->string('MAPHUONG_XA')->nullable();
            $table->integer('VAITRO')->nullable();
            $table->string('FACEBOOK_ID')->nullable();
            $table->rememberToken();
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
        Schema::dropIfExists('users');
    }
}
