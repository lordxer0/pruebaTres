<?php

namespace App\Http\Controllers\Auth;

use App\User;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;
use Illuminate\Foundation\Auth\RegistersUsers;

class RegisterController extends Controller
{
    /*
    |--------------------------------------------------------------------------
    | Register Controller
    |--------------------------------------------------------------------------
    |
    | This controller handles the registration of new users as well as their
    | validation and creation. By default this controller uses a trait to
    | provide this functionality without requiring any additional code.
    |
    */

    use RegistersUsers;

    /**
     * Where to redirect users after registration.
     *
     * @var string
     */
    protected $redirectTo = 'login.index';

    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
        $this->middleware('guest');
    }

    /**
     * Get a validator for an incoming registration request.
     *
     * @param  array  $data
     * @return \Illuminate\Contracts\Validation\Validator
     */
    protected function validator(array $data)
    {
        return Validator::make($data, [
            'usu_cedula'    => ['required', 'string', 'max:255'],
            'tusu_codigo'  => ['required', 'string', 'max:255'],
            'usu_nombre'    => ['required', 'string', 'max:255'],
            'usu_login'     => ['required', 'string', 'max:255'],
            'usu_clave'    => ['required', 'string', 'min:6', 'confirmed'],
        ]);
    }

    /**
     * Create a new user instance after a valid registration.
     *
     * @param  array  $data
     * @return \App\User
     */
    protected function create(array $data)
    {
        return User::create([
            'usu_cedula'    => $data['usu_cedula'],
            'tusu_codigo'  => $data['tusu_codigo'],
            'usu_nombre'    => $data['usu_nombre'],
            'usu_login'     => $data['usu_login'],
            'usu_clave'    => Hash::make($data['password']),
        ]);
    }
}
