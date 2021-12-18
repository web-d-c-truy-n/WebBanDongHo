<?php

namespace App\Providers;

use Illuminate\Support\ServiceProvider;
use App\Model\ThuongHieu;

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
        $thuongHieu = ThuongHieu::all();
        return view()->share('thuongHieu',$thuongHieu);
    }
}
