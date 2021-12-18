<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\QuanHuyen;
use App\Model\TinhThanh;
use App\Model\PhuongXa;

class DiaDiemController extends Controller
{
    //
    public function layCacQuanHuyen($maTinh){
        $quanHuyen = QuanHuyen::where("matp",$maTinh)->get();
        return response()->json(["quanHuyen"=>$quanHuyen]);
    }
    public function layCacPhuongXa($maQuan){
        $phuongXa = PhuongXa::where("maqh",$maQuan)->get();
        return response()->json(["phuongXa"=>$phuongXa]);
    }
}
