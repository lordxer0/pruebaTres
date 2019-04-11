<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Notifications\Notifiable;
use Illuminate\Foundation\Auth\User as Authenticatable;

class usuarios extends Authenticatable
{
    //
    use Notifiable;

    protected $table = 'usuarios';

    protected $fillable = [
        'usu_cedula',
        'tusu_codigo',
        'usu_nombre',
        'usu_login',
        'usu_clave',
        'created_at',
        'updated_at',
        'remember_token',
    ];

    protected $hidden = [
        'usu_clave',
        'remember_token',
    ];

    protected $primaryKey = 'usu_cedula';

    public function getAuthPassword()
    {
      return $this->passcode;
    }
}
