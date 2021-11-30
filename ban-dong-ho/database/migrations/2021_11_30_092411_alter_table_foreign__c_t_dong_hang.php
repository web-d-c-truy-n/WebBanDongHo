<?php

use Illuminate\Database\Migrations\Migration;
use Illuminate\Database\Schema\Blueprint;
use Illuminate\Support\Facades\Schema;

class AlterTableForeignCTDongHang extends Migration
{
    /**
     * Run the migrations.
     *
     * @return void
     */
    public function up()
    {
        Schema::table('ct_don_hangs', function (Blueprint $table) {
            //Khóa ngoại của chi tiết đơn hàng
            $table->foreign("SODONHANG")->references("id")->on("don_hangs");
            $table->foreign("MASANPHAM")->references("id")->on("san_phams");
        });
    }

    /**
     * Reverse the migrations.
     *
     * @return void
     */
    public function down()
    {
        Schema::table('ct_don_hangs', function (Blueprint $table) {
            //
            $table->dropForeign(["SODONHANG"]);
            $table->dropForeign(["MASANPHAM"]);
        });
    }
}
