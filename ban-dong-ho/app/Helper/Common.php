<?php
namespace Helper;
use App\Model\SanPham;
use App\Model\TinhThanh;
use App\Model\QuanHuyen;
use App\Model\PhuongXa;

class Common{
    public function getSanPham($id){
        $sanPham = SanPham::where("id",$id)->first();
        return $sanPham;
    }    
    public static function layDiaDiemUser($maTinh, $maQuan, $maHuyen){
        $diaDiem = ["tinhThanh" => [], "quanHuyen" => [], "phuongXa"=>[]];
        $tinh = TinhThanh::all();
        foreach($tinh as $t){
            array_push($diaDiem["tinhThanh"],[
                "name" => $t->name,
                "value" => $t->matp,
                "selected" =>$t->matp == $maTinh
            ]);
        }
        $quan = QuanHuyen::where("matp",$maTinh)->get();
        foreach($quan as $q){
            array_push($diaDiem["quanHuyen"],[
                "name" => $q->name,
                "value" => $q->maqh,
                "selected" =>$q->maqh == $maQuan
            ]);
        }
        $phuong = PhuongXa::where("maqh",$maQuan)->get();
        foreach($phuong as $p){
            array_push($diaDiem["phuongXa"],[
                "name" => $p->name,
                "value" => $p->maqh,
                "selected" =>$p->xaid == $maHuyen
            ]);
        }
        return $diaDiem;
    }
}