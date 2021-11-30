<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableForeignDonHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('don_hangs', function (Blueprint $table) {
            //khóa ngoại của đơn hàng
            $table->foreign("MANGUOIDUNG")->references("id")->on("users");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('don_hangs', function (Blueprint $table) {
            //
            $table->dropForeign(["MANGUOIDUNG"]);
        });
    }
}
