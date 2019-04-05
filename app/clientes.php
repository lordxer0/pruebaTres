<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class clientes extends Model
{
    //
    

    protected $fillable = [
        'cli_cedula',
        'tdoc_codigo',
        'cli_nombre',
        'cli_direccion',
        'cli_telefono',
        'cli_mail',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'cli_cedula';
    
    public $incrementing = 'false';
}
