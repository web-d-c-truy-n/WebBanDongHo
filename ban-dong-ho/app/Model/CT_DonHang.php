<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\SanPham;

class CT_DonHang extends Model
{
    //
    protected $table = "ct_don_hangs";
    public function SanPham(){
        $sanPham = SanPham::where("id",$this->MASANPHAM)->first();
        return $sanPham;
    }
}
