<?php

namespace App\Http\Controllers\Admin;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use App\Model\SanPham;
use Facade\FlareClient\Http\Response;
use Illuminate\Database\Eloquent\ModelNotFoundException;
use App\Model\HinhAnh;

class SanPhamController extends Controller
{
    //
    public function dsSanPham(){
        $sanPham = SanPham::paginate(10);
        return view('',["sanPham"=>$sanPham]);
    }
    public function trangThemSP(){
        return view();
    }
    public function themSanPham(Request $request){
        $sp = $request->all();
        $kq = SanPham::create($sp);
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
        $url = asset("storages/$request->name");
        $luuAnh = new HinhAnh();
        $luuAnh->URL = $url;
        $luuAnh->THUMUC = "storages";
        return response()->json(["url"=>$url]);
    }
}
