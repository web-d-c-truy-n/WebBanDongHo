<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableForeignBaiViet extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('bai_viets', function (Blueprint $table) {
            //Khóa ngoại bài viết
            $table->foreign("HINHDAIDIEN")->references("id")->on("hinh_anhs");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('bai_viets', function (Blueprint $table) {
            //
            $table->dropForeign(["HINHDAIDIEN"]);
        });
    }
}
