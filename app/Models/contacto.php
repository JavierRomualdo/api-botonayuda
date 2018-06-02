<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contacto extends Model
{
    //
    protected $table = 'contactos';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'usuario_id', 'nombres', 'numero', 'fecha', 'mensaje',
        'ubicacion', 'estado'
    ];
}
