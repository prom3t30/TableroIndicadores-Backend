<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Pantalla extends Model
{
    use SoftDeletes;
    protected $fillable = ['Nombre', 'Descripcion', 'aplicacion_id'];
    public function aplicacion()
    {
        return $this->belongsTo('App\Aplicacion');
    }
}
