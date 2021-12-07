<?php

namespace App\Http\Controllers;

use App\User;
use Facade\FlareClient\Http\Response;
use Illuminate\Support\Facades\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

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
