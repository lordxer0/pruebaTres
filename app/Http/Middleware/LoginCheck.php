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
            
            $user = DB::table('usuarios')->where('usu_cedula', $ingreso->usu_cedula)->first();
            
            $request->validate([
                
            'usu_cedula'  => 'required',
            'usu_login'  => 'required',
            'usu_clave'   => 'required',
            
            ]);
            
            
            if ($ingreso->usu_cedula==$user->usu_cedula) {
                if ($ingreso->usu_login==$user->usu_login) {
                    if ($ingreso->usu_clave==$user->usu_clave) {
                        
                        session(['cedula' => $user->usu_cedula]);
                        session(['usuario' => $user->usu_login]);
                        session(['nombre' => $user->usu_nombre]);
                        session(['tiposuser' => $user->tusu_codigo]);
                        
                        return $next($request);
                        
                    }
                }
            }else{
                
                return view('/');
            }
        
    }
}
