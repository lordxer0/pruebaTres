<?php

namespace App\Http\Middleware;

use Closure;

use Illuminate\Support\Facades\DB;

class LoginCheck
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
        $ingreso = $request;

        $request->validate([
                
            'usu_cedula'  => 'required',
            'usu_login'  => 'required',
            'usu_clave'   => 'required',

            ]);

        if ($ingreso->usu_login=='juanito') {
            
            return $next($request);
        
        }else{

            return view('/');
        }
    }
}
