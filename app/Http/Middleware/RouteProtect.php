<?php

namespace App\Http\Middleware;

use Closure;

class RouteProtect
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
        if($request->session()->has('tiposuser')){

            if(session()->pull('tiposuser','default')==1){
                
                return $next($request);

            }else{
                echo'<script language="javascript" > alert("no esta autorizado a entrar ahi");</script>';
                return view('welcome');

            }

            if(session()->pull('tiposuser','default')==2){

                return $next($request);

            }else{
                echo'<script language="javascript" > alert("no esta autorizado a entrar ahi");</script>';
                return view('welcome');

            }
        }
    }
}
