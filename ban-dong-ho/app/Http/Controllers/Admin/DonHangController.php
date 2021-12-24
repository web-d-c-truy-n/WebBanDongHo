<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\DonHang;
class DonHangController extends Controller
{
    //
    public function chuyenTrangThai(Request $request){
        $trangThai = $request->trangThai;
        $donHang = DonHang::where("id",$request->id)->first();
        if($trangThai == "Hoàn tất"){
            $donHang->TRANGTHAI = $trangThai;
            $donHang->NGAYGIAOHANG = date("Y-m-d h:i:s");            
        }
        else{
            $donHang->TRANGTHAI = $trangThai;
        }
        $donHang->save();
        return response()->json(["kq"=>true]);
    }
}
