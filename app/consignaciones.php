<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class consignaciones extends Model
{
    //
    protected $fillable = [
        'con_codigo',
        'con_fecha',
        'con_descripcion',
        'con_valor',
        'cue_numero',
        'usu_cedula',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'con_codigo';
}
