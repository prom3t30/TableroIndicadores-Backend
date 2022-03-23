<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Centro extends Model
{
    use SoftDeletes;
    protected $table = 'centros';
    protected $fillable = ['Nombre', 'Descripcion', 'ResponsableCentro'];
}
