<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class retiros extends Model
{
    //
    protected $fillable = [
        'ret_codigo',
        'ret_fecha',
        'ret_descripcion',
        'ret_valor',
        'cue_numero',
        'usu_cedula',
        'created_at',
        'updated_at',
    ];
    
    protected $primaryKey = 'ret_codigo';
}
