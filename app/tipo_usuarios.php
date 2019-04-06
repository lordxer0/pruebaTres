<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_usuarios extends Model
{
    //
    protected $fillable = [
        'tusu_codigo',
        'tusu_nombre',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'tusu_codigo';
}
