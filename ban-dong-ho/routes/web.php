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