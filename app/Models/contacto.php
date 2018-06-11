<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class contacto extends Model
{
    //
    protected $table = 'contactosos';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'usuarioentidad_id', 'nombre', 'numero','mensaje','linkubicacion', 'fecha', 
         'estado'
    ];
}
