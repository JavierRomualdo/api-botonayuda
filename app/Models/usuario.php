<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class usuario extends Model
{
    //
    protected $table = 'usuarios';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'dni', 'nombres', 'apellidopaterno', 'apellidomaterno', 'direccion',
        'fechanacimiento', 'sexo', 'clave'
    ];
}
