<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SanPham;
use App\Model\ThuongHieu;
use Illuminate\Support\Facades\Cookie;
class HomeController extends Controller
{
    public function index(){
        $sanPhamMoi = SanPham::orderBy("created_at","DESC")->paginate(4);
        return view('pages.home',["sanPhamMoi"=>$sanPhamMoi]);
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
        return response()->json(['gioHang' => Cookie::get('gioHang')])->withCookie(["gioHang"=>json_encode($gioHang)]);
    }
}
