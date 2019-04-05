<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class tipo_documentos extends Model
{
    //
    protected $fillable = [
        'tdoc_codigo',
        'tdoc_nombre',
        'created_at',
        'updated_at',
    ];

    protected $primaryKey = 'tdoc_codigo';
}
