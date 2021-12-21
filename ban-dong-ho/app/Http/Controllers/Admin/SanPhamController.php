<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SanPham;
use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\HinhAnh;
use App\Model\Anh_SanPham;
use Illuminate\Support\Facades\Auth;

class SanPhamController extends Controller
{
    //
    public function trangThemSP(){
        return view();
    }
    public function themSanPham(Request $request){
        $sp = new SanPham();
        $sp->TENSP = $request->TENSP;
        $sp->DUONGDAN = $request->DUONGDAN;
        $sp->HINHDAIDIEN = $request->HINHDAIDIEN;
        $sp->NDTOMTAT= $request->NDTOMTAT;
        $sp->NOIDUNG=$request->NOIDUNG;
        $sp->NGUOIDANG= Auth::user()->id;
        $sp->DADUYET = true;
        $sp->GIABAN = $request->GIABAN;
        $sp->GIAMGIA=$request->GIAMGIA;
        $sp->MATHUONGHIEU = $request->MATHUONGHIEU;
        $sp->DONVITINH = $request->DONVITINH;
        $kq = $sp->save();
        $album = $request->album;
        $i = 1;
        foreach($album as $al){
            $anh_SanPham = new Anh_SanPham();
            $anh_SanPham->MAANH = $al;
            $anh_SanPham->MASANPHAM = $sp->id;
            $anh_SanPham->THUTU = $i;
            $anh_SanPham->save();
            $i++;
        }        
        if($kq){
            return Response()->json(["kq"=>true]);
        }
        else{
            return Response()->json(["kq"=>false]);
        }        
    }
    public function trangSuaSP($id){
        $sanPham = SanPham::where("id",$id)->first();    
        if($sanPham)    
            return view('',["sanPham"=>$sanPham]);
        return abort(404);        
    }
    public function suaSanPham(Request $request){
        $sp = $request->all();
        $kq = SanPham::updated($sp);
        if($kq){
            return Response()->json(["kq"=>true]);
        }
        else{
            return Response()->json(["kq"=>false]);
        }  
    }
    public function duaVaoThungRac(Request $request){
        
    }
    public function themAnh(Request $request){
        file_put_contents(public_path("\\storages\\$request->name"),base64_decode($request->base64)); 
        $url = "/storages/$request->name";
        $luuAnh = new HinhAnh();
        $luuAnh->URL = $url;
        $luuAnh->THUMUC = "storages";
        $luuAnh->save();
        return response()->json(["url"=>$url,"id"=>$luuAnh->id]);
    }
}
