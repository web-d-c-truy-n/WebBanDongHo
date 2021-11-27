<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateCTDonHangsTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::create('ct_don_hangs', function (Blueprint $table) {
            $table->id();
            $table->bigInteger("SODONHANG");
            $table->integer("SOLUONG");
            $table->integer("GIABAN");
            $table->integer("GIAKHUYENMAI");
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
        Schema::dropIfExists('ct_don_hangs');
    }
}
