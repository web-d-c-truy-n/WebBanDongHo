<?php

namespace App\Http\Middleware;

use Closure;
use Exception;
use Illuminate\Support\Facades\Artisan;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Config;
class UnstallMiddleware
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
        for($i=1;$i<=3;$i++){
            try{
                $databaseName = Config::get('database.connections.'.Config::get('database.default'));
                $database = $databaseName["database"];
                $tableName = DB::select("SELECT table_name FROM information_schema.tables WHERE table_schema = '$database';");
                if(count($tableName) <=0) 
                    return redirect("/install/wellcome");
                return $next($request);
            }catch(Exception $e){
                Artisan::call("config:cache");                
            }
        }
        return abort(500);
    }
}
