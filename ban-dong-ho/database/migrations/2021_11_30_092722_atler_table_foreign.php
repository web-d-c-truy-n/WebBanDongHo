<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AtlerTableForeign extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->foreign("MATINH")->references("id")->on("tinhthanhpho");
            $table->foreign("MAQUAN_HUYEN")->references("id")->on("quanhuyen");
            $table->foreign("MAPHUONG_XA")->references("id")->on("xaphuongthitran");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('users', function (Blueprint $table) {
            //
            $table->dropForeign(["MATINH"]);
            $table->dropForeign(["MAQUAN_HUYEN"]);
            $table->dropForeign(["MAPHUONG_XA"]);
        });
    }
}
