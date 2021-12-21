<?php

namespace App\Http\Controllers;

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
        return view('admin.order');
    }
    public function add_blog(){
        return view('admin.addblog');
    }
    public function blog(){
        return view('admin.blog');
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
        return view('admin.customer');
    }
    public function profile(){
        return  view('admin.profile');
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
        return URL::to('/');
    }

}
