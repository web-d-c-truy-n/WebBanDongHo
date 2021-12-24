<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\User;
use App\Model\CT_DonHang;

class DonHang extends Model
{
    //
    public function User(){
        return User::withTrashed()->where("id",$this->MANGUOIDUNG)->first();
    }
    public function TongCong(){
        $ct_DongHang = CT_DonHang::where("SODONHANG",$this->id)->get();
        $tongCong = 0;
        foreach($ct_DongHang as $ct){
            $tongCong += $ct->GIAKHUYENMAI;
        }
        return $tongCong;
    }
    public function CT_DonHang(){
        return CT_DonHang::where("SODONHANG",$this->id)->get();
    }
}
