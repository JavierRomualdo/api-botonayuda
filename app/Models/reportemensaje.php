<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class reportehistorial extends Model
{
    //
    protected $table = 'reportemensaje';
    protected $primarykey = 'id';
    public $timestamps = true;
    protected $dates = ['deleted_at'];

    protected $fillable = [
        'id', 'usuarioentidad_id','enlacemapa','fechareporte'
    ];
}
