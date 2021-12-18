<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SanPham;
use App\Model\ThuongHieu;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use App\Model\TinhThanh;
class HomeController extends Controller
{
    public function index(){
        $sanPhamMoi = SanPham::orderBy("created_at","DESC")->paginate(4);
        return view('pages.home',["sanPhamMoi"=>$sanPhamMoi]);
    }
    public function order_information(){
        $tinhThanh = TinhThanh::all();
        return view('pages.order_information',["tinhThanh"=>$tinhThanh]);
    }
    public function cart(){
        return view('pages.cart');
    }
    public function products(){
        return view('pages.product');
    }
    public function listproducts($duongDan){
        $maTH = ThuongHieu::where("DUONGDAN",$duongDan)->first();
        $dsSanPham = SanPham::where("MATHUONGHIEU",$maTH->id)->get();
        return view('pages.listproducts',["dsSanPham"=>$dsSanPham,"th"=>$maTH]);
    }
    public function information($duongDan){
        $sanPham = SanPham::where("DUONGDAN",$duongDan)->first();
        return view('pages.information', ["sanPham"=>$sanPham]);
    }
    public function dangnhap(){
        return view('pages.login');
    }
    public function themGioHang(Request $request){
        $idSP = $request->idSP;
        $soLuong = $request->soLuong;        
        $cookie = $request->cookie("gioHang");
        $gioHang = [];
        if($cookie === null){
            $gioHang = [
                [
                    "idSP"=>$idSP,"soLuong"=>$soLuong
                ],                
            ];
        }else{
            $gioHang = json_decode($cookie);
            $kq = false;
            foreach($gioHang as $gh){
                if($gh->idSP == $idSP){
                    $gh->soLuong += $soLuong;
                    $kq=true;
                    break;
                }
            }
            if(!$kq){
                array_push($gioHang,["idSP"=>$idSP,"soLuong"=>$soLuong]);
            }
        }
        $cookie = Cookie::make('gioHang', json_encode($gioHang), 10000000);  
        $response = response()->json(array('status' => 'ok',"count"=>count($gioHang)));  
        $response->headers->setCookie($cookie); 
        return $response;
    }    
    public function xoaGioHang(Request $request){
        $idSP = $request->idSP;        
        $gh = Cookie::get("gioHang");             
        $gioHang = json_decode($gh);
        $i = -1;
        foreach($gioHang as $index=>$item){
            if($item->idSP == $idSP){
                $i = $index;
            }
        }
        array_splice($gioHang,$i,1);
        $gioh = json_encode($gioHang);
        $cookie = Cookie::make('gioHang', $gioh, 10000000);  
        $response = response()->json(array('status' => 'ok',"count"=>count($gioHang)));  
        $response->headers->setCookie($cookie); 
        return $response;
    }
}
