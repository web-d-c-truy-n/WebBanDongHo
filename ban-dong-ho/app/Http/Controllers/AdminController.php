<?php

namespace App\Http\Controllers;

use App\User;
use Illuminate\Contracts\Session\Session;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;
use Illuminate\Support\Facades\URL;

class AdminController extends Controller
{
    //
    public function Index(){
        Session::put('message',null);
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
        $result = User::where('name',$username)-> where('password',$pass)->first();
        if ($result){
            Auth::login($result);
            return URL::to('admin');
        }else{
            Session::put('message','Sai thông tin đăng nhập');
            return URL::to('login');
        }
    }
    public function logout(){
        Auth::logout();
        return URL::to('/');
    }

}
