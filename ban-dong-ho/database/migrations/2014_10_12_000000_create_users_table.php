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
            $table->integer('MATINH')->nullable();
            $table->integer('MAQUAN_HUYEN')->nullable();
            $table->integer('MAPHUONG_XA')->nullable();
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
