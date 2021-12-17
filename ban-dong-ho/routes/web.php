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
    Route::get('/', 'AdminController@Index');
    Route::get('login','AdminController@login');
    Route::get('register','AdminController@register');
    Route::get('order','AdminController@order');
    Route::post('admin_login', 'AdminController@Admin_Login');
    Route::get('/them-san-pham','AdminController@add_product');
    Route::get('/tat-ca-san-pham','AdminController@product');
    Route::get('/thanh-vien','AdminController@customer');
    Route::get('/thong-tin-ca-nhan','AdminController@profile');
    Route::post("/them-anh",'Admin\SanPhamController@themAnh');
});

Route::get('test', function(){
    return view('test');
});
Route::prefix('ajax')->group(function () {
    Route::post('restore', 'BackupController@Restore');   
    Route::get('backup', 'BackupController@Backup');   
});


