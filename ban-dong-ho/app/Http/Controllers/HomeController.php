<?php

namespace App\Http\Controllers;

use App\Model\BaiViet;
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
use Helper\Common;

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
        $blog = BaiViet::paginate(20);
        return view('pages.blog',["blog"=>$blog]);
    }
    public function blog_details($id){
        $baiViet = BaiViet::where("id",$id)->first();
        return view('pages.blog_details',["baiViet"=>$baiViet]);
    }
    public function information_account(){
        $user = Auth::user();
        $tinhThanh = TinhThanh::where("id",$user->MATINH)->first();
        $quanHuyen = QuanHuyen::where("id",$user->MAQUAN_HUYEN)->first();
        $phuongXa = PhuongXa::where("id",$user->MAPHUONG_XA)->first();
        $diaDiem = Common::layDiaDiemUser($tinhThanh->matp??null,$quanHuyen->maqh??null,$phuongXa->xaid??null);
        return  view('pages.information_account',["user"=>$user,"diaDiem"=>$diaDiem]);
    }
    public function cart(){
        return view('pages.cart');
    }
    public function products(){
        $dsSanPham = SanPham::orderBy("created_at","DESC")->paginate(12);
        return view('pages.product',["dsSanPham"=>$dsSanPham]);
    }
    public function listproducts($duongDan){
        $maTH = ThuongHieu::where("DUONGDAN",$duongDan)->first();
        $dsSanPham = SanPham::where("MATHUONGHIEU",$maTH->id)->paginate(16);
        return view('pages.product',["dsSanPham"=>$dsSanPham,"th"=>$maTH]);
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
                $chiTietDH->GIABAN = SanPham::where("id",$gh->idSP)->first()->GIAMGIA;
                $chiTietDH->GIAKHUYENMAI = SanPham::where("id",$gh->idSP)->first()->GIAMGIA;
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

    public function locGia(Request $request){
        $khoanGia = $request->khoanGia;
        $thuongHieu = $request->thuongHieu;
        $sanPham = null;     
        $sanPham = SanPham::select("*")->where(function ($sanPham) use ($khoanGia){
            foreach($khoanGia as $kg){              
                $sanPham = $sanPham->orWhereBetween("GIAMGIA",[$kg["GiaDau"],$kg["GiaCuoi"]]);                 
            }
        });   
        
        
        if($thuongHieu != ""){
            $th = ThuongHieu::where("DUONGDAN",$thuongHieu)->first();
            $sanPham = $sanPham->where("MATHUONGHIEU",$th->id);
        }  
        $sanPham = $sanPham->get();
        foreach($sanPham as $sp){
            $sp->HinhAnh = $sp->HinhAnh();
        }
        return response()->json(["sanPham"=>$sanPham]);
    }
}
