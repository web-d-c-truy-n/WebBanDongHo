<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use App\User;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use App\Model\TinhThanh;
use App\Model\QuanHuyen;
use App\Model\PhuongXa;

class UserController extends Controller
{
    //
    public function suaThongTinUser(Request $request){
        $userid = Auth::user()->id;
        $user = $request->all();
        $tinhThanh = TinhThanh::where("matp",$request->MATINH)->first();
        $quanHuyen = QuanHuyen::where("maqh",$request->MAQUAN_HUYEN)->first();
        $phuongXa = PhuongXa::where("xaid",$request->MAPHUONG_XA)->first();
        unset($user["_token"]);
        $user["MATINH"] = $tinhThanh->id;
        $user["MAQUAN_HUYEN"] = $quanHuyen->id;
        $user["MAPHUONG_XA"] = $phuongXa->id;
        User::where("id",$userid)->update($user);
        return redirect()->back();
    }
    public function xoaTK(Request $request){
        User::where("id",$request->id)->delete();
        return redirect()->back();
    }
    public function dangKy(Request $request){
        $user = $request->all();
        unset($user["_token"]);
        if(Auth::user()->VAITRO ?? 0 == 1){
            $user["VAITRO"] = 1;
        }
        $user["password"] = md5($user["password"]);
        $u = User::create($user);
        if(Auth::user()->VAITRO ?? 0 != 1){
            Auth::login($u);
            return redirect("/");
        }
        return redirect("/admin");
    }    
    public function doiMatKhau(Request $request){
        $mkCu = $request->mkCu;
        $mkMoi = $request->mkMoi;
        $AuthPass = Auth::user()->getAuthPassword();
        if(md5($mkCu) != $AuthPass){
            return response()->json(["kq"=>1]);
        }
        $user = User::where("id",Auth::user()->id)->update(["password"=>md5($mkMoi)]);
        return response()->json(["kq"=>2]);
    }
}
