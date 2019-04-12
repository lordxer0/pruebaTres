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
        $link = $request->getUri();
        
        if($request->session()->has('tiposuser')){  

            if(session()->pull('tiposuser','default')==1){
                if($link=='http://localhost/ngbank/public/cuentas'){
                    if($link=='http://localhost/ngbank/public/cliente'){

                        return $next($request);
                    }
                }

            }else{
                echo'<script language="javascript" > alert("no esta autorizado a entrar ahi");</script>';
                return view('welcome');

            }

            if(session()->pull('tiposuser','default')==2){

                if($link=='http://localhost/ngbank/public/retiros'){
                    if($link=='http://localhost/ngbank/public/consignaciones'){

                        return $next($request);
                    }
                }

            }else{
                echo'<script language="javascript" > alert("no esta autorizado a entrar ahi");</script>';
                return view('welcome');

            }
        }
    }
}
