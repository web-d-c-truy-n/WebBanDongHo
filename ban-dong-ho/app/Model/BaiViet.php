<?php

namespace App\Model;

use Illuminate\Database\Eloquent\Model;
use App\Model\HinhAnh;
use App\User;

class BaiViet extends Model
{
    //
    protected $fillable = [
        "id","TENBAIVIET","HINHDAIDIEN","NOIDUNGTOMTAT","NOIDUNG","NGUOIDANG","DADUYET"
    ];
    public function HinhAnh(){
        $hinhAnh = HinhAnh::where("id",$this->HINHDAIDIEN)->first();
        return $hinhAnh;
    }
    public function User(){
        $user = User::where("id",$this->NGUOIDANG)->first();
        return  $user;
    }
}
