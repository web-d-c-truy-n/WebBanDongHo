<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class CreateQuanHuyensTable extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        // Schema::create('quanhuyen', function (Blueprint $table) {
        //     $table->string("maqh",5)->primary();
        //     $table->string("name");
        //     $table->string("type");
        //     $table->string("matp",5);
        // });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        //Schema::dropIfExists('quanhuyen');
    }
}
