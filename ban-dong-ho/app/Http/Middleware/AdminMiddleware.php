<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Auth;

class AdminMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        if(Auth::user() === null){
            return redirect("/admin/login");
        }
        elseif(Auth::user()->VAITRO != 1)
        {
            return abort(404);
        }
        return $next($request);
    }
}
