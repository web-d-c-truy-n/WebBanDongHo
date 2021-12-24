<?php

namespace App\Http\Controllers;

use App\Model\BaiViet;
use App\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;
use App\Model\ThuongHieu;
use App\Model\HinhAnh;
use App\Model\SanPham;
use App\Model\DonHang;
use App\Model\CT_DonHang;
use App\Model\TinhThanh;
use App\Model\QuanHuyen;
use App\Model\PhuongXa;
use Exception;
use Helper\Common;

class AdminController extends Controller
{
    //
    public function Index(){
        return view('admin.index');
    }
    public function login(){
        return view('admin.login');
    }
    public function register(){
        return view('admin.register');
    }
    public function order(){
        $donHang = DonHang::orderBy("created_at","DESC")->paginate(5);
        return view('admin.order', ["donHang"=>$donHang]);
    }
    public function order_details($id){
        $donHang = DonHang::where("id",$id)->first();
        $ct_donHang = CT_DonHang::where("SODONHANG",$id)->get();
        return view('admin.order_details',["donHang"=>$donHang,"ct_donHang"=>$ct_donHang]);
    }
    public function add_blog(){
        $hinhAnh = HinhAnh::all();
        return view('admin.addblog',["baiViet"=>null,"hinhAnh"=>$hinhAnh]);
    }
    public function edit_blog($id){
        $baiViet = BaiViet::where("id",$id)->first();
        $hinhAnh = HinhAnh::all();
        return view('admin.addblog',["baiViet"=>$baiViet,"hinhAnh"=>$hinhAnh]);
    }
    public function blog(){
        $baiViet = BaiViet::paginate(5);
        return view('admin.blog',["baiViet"=>$baiViet]);
    }
    public function add_product(){
        $thuongHieu = ThuongHieu::all();
        $hinhAnh = HinhAnh::all();
        return view('admin.addProduct',["thuongHieu"=>$thuongHieu,"hinhAnh"=>$hinhAnh,"sanPham"=>null]);
    }
    public function edit_product($id){
        $sanPham = SanPham::where('id',$id)->first();
        $thuongHieu = ThuongHieu::all();
        $hinhAnh = HinhAnh::all();
        return view('admin.addProduct',["thuongHieu"=>$thuongHieu,"hinhAnh"=>$hinhAnh, "sanPham"=>$sanPham]);
    }
    public function product(){
        $sanPham = SanPham::paginate(5);
        return view('admin.product',["sanPham"=>$sanPham]);
    }
    public function customer(){
        $users = User::where("VAITRO",null)->paginate(5);
        return view('admin.customer',["users"=>$users]);
    }
    public function profile(){
        $user = Auth::user();
        $tinhThanh = TinhThanh::where("id",$user->MATINH)->first();
        $quanHuyen = QuanHuyen::where("id",$user->MAQUAN_HUYEN)->first();
        $phuongXa = PhuongXa::where("id",$user->MAPHUONG_XA)->first();
        $diaDiem = Common::layDiaDiemUser($tinhThanh->matp??null,$quanHuyen->maqh??null,$phuongXa->xaid??null);
        return  view('admin.profile',["user"=>$user,"diaDiem"=>$diaDiem]);
            
    }
    public function Admin_Login(Request $request){
        $username = $request -> username;
        $pass = $request -> password;
        $result = User::where('name',$username)-> where('password',md5($pass))->first();
        if ($result != null){
            Auth::login($result);
            return redirect('/admin');
        }else{
            return Redirect::back()->withErrors(['msg' => 'Sai thông tin đăng nhập']);;
        }
    }
    public function logout(){
        Auth::logout();
        return redirect('/admin/login');
    }
}
