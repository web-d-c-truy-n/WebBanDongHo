<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Model\SanPham;
use App\Model\ThuongHieu;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Crypt;
use App\Model\TinhThanh;
use Exception;
use Illuminate\Support\Facades\DB;
use App\Model\DonHang;
use App\Model\CT_DonHang;
use App\User;
use App\Model\PhuongXa;
use App\Model\QuanHuyen;
use Illuminate\Support\Facades\Auth;

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
    public function blog(){
        return view('pages.blog');
    }
    public function blog_details(){
        return view('pages.blog_details');
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
    public function ThanhToan(Request $request){
        DB::beginTransaction();
        try{
            $tinhThanh = TinhThanh::where("matp",$request->MATINH)->first();
            $quanHuyen = QuanHuyen::where("maqh",$request->MAQUAN_HUYEN)->first();
            $phuongXa = PhuongXa::where("xaid",$request->MAPHUONG_XA)->first();
            $user = null;
            if(Auth::user() === null){
                $user = new User();
                $user->HOTEN = $request->HOTEN;
                $user->GIOITINH = $request->GIOITINH;
                $user->SDT = $request->SDT;
                $user->email = $request->email;
                $user->MATINH = $tinhThanh->id;
                $user->MAQUAN_HUYEN = $quanHuyen->id;
                $user->MAPHUONG_XA = $phuongXa->id;
                $user->DIACHI = $request->DIACHI;
                $user->save();
            }else{
                $user = Auth::user();
            }
            $donHang = new DonHang();
            $donHang->MANGUOIDUNG = $user->id;
            $donHang->DIACHIGIAOHANG = "$user->DIACHI, $phuongXa->name, $quanHuyen->name, $tinhThanh->name";
            $donHang->GHICHU = $request->GHICHU;
            $donHang->TRANGTHAI = "Khởi tạo";
            $donHang->save();
            $gioHang = json_decode(Cookie::get("gioHang"));
            foreach($gioHang as $gh){
                $chiTietDH = new CT_DonHang();
                $chiTietDH->SODONHANG = $donHang->id;            
                $chiTietDH->MASANPHAM = $gh->idSP;
                $chiTietDH->SOLUONG = $gh->soLuong;
                $chiTietDH->GIABAN = SanPham::where("id",$gh->idSP)->first()->GIAMGIA * $gh->soLuong;
                $chiTietDH->GIAKHUYENMAI = SanPham::where("id",$gh->idSP)->first()->GIAMGIA * $gh->soLuong;
                $chiTietDH->save();
            }            
            DB::commit();
            $cookie = Cookie::make('gioHang', "[]", 10000000); 
            return redirect("/")->withCookie($cookie);
        }catch(Exception $e){
            DB::rollBack();
        }
    }
    public function DangKy(){
        return view('pages.register');
    }
}
