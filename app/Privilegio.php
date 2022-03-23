<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Privilegio extends Model
{
    use SoftDeletes;
    protected $fillable = [ 'rol_id', 'pantalla_id', 'funcion_id','estado' ];
    public function rol()
    {
        return $this->belongsTo('App\Rol');
    }
    public function pantalla()
    {
        return $this->belongsTo('App\Pantalla');
    }
    public function funcion()
    {
        return $this->belongsTo('App\Funcion');
    }
}
