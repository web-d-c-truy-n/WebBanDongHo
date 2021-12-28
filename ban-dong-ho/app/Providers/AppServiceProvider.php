<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\ThuongHieu;
use Exception;
use Illuminate\Support\Facades\Cookie;
use Illuminate\Support\Facades\Crypt;
use Helper\Common;
class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
        try{
            $thuongHieu = ThuongHieu::all();
            $goiHang = Cookie::get("gioHang");                
            if($goiHang !== null){            
                $goiHang = explode("|",Crypt::decrypt($goiHang,false));
                $common = new Common();
                return view()->share(["thuongHieu"=>$thuongHieu,"gioHang"=>json_decode($goiHang[1]),"common"=>$common]);
            }            
            else
                return view()->share(["thuongHieu"=>$thuongHieu,"gioHang"=>null]);
        }catch(Exception $e){

        }        
    }
}
