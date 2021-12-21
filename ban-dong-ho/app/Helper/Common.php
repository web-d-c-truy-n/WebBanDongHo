<?php
namespace Helper;
use App\Model\SanPham;

class Common{
    public function getSanPham($id){
        $sanPham = SanPham::where("id",$id)->first();
        return $sanPham;
    }    
}