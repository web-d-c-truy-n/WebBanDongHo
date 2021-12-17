<?php

use Illuminate\Database\Seeder;
use App\Model\ThuongHieu;

class ThuongHieuSeeder extends Seeder
{
    /**
     * Run the database seeds.
     *
     * @return void
     */
    public function run()
    {
        //
        $cacThuongHieu = ["Casio","Seiko","SR","Daniel Wellington","Omega","Rolex","Orient","Citizen"];
        foreach($cacThuongHieu as $th){
            $thuongHieu = new ThuongHieu();
            $thuongHieu->TENTHUONGHIEU = $th;
            $thuongHieu->DUONGDAN = strtolower(str_replace(" ","-",$th));
            $thuongHieu->save();
        }
    }
}
