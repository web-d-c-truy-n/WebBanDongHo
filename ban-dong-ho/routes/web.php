<?php

use App\Http\Controllers\HomeController;
use Illuminate\Support\Facades\Route;

/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

/* Route::get('/', function () {
    return view('layoutindex');

}); */

Route::get('/','HomeController@index');
Route::get('/gio-hang','HomeController@cart');
Route::get('/san-pham','HomeController@products');
Route::get('/thong-tin-san-pham','HomeController@information');
Route::get('/danh-sach-san-pham','HomeController@listproducts');
Route::get('/dang-nhap','HomeController@dangnhap');

Route::prefix('admin')->group(function () {
    Route::get('index', function () {
        return view('admin.index');
    });
    Route::get('login',function(){
        return view('admin.login');
    });
    Route::get('register',function(){
        return view('admin.register');
    });
    Route::get('order',function(){
        return view('admin.order');
    });
});