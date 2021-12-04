<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index(){
        return view('pages.home');
    }
    public function cart(){
        return view('pages.cart');
    }
    public function products(){
        return view('pages.product');
    }
    public function listproducts(){
        return view('pages.brand');
    }
    public function information(){
        return view('pages.information');
    }
    public function dangnhap(){
        return view('pages.login');
    }
}
