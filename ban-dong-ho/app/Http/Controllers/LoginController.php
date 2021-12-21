<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    //
    public function dangNhap(Request $request){
        $username = $request->email;
        $password = $request->password;
        $user = User::where("email",$username)->where("password",md5($password))->first();
        if($user){
            Auth::login($user);
            return redirect("/");
        }else{
            return redirect()->back()->withErrors(['msg' => 'Sai thông tin đăng nhập']);
        }
    }
}
