<?php
namespace Helper;
use App\Model\SanPham;

class Common{
    public $TENSANPHAM = "abc";
    public function getSanPham($id){
        $sanPham = SanPham::where("id",$id)->first();
        return $sanPham;
    }    
}