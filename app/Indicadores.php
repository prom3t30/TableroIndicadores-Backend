<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Indicadores extends Model
{
    use SoftDeletes;
    protected $table = 'indicador';
    protected $fillable = [
        'categoria_id',
        'clasificacion_id',
        'cliente_id',
        'periodicidad_id',
        'plataforma_id',
        'unidad_id',
        'descripcion',
        'estado',
        'usuarioCreacion',
        'usuarioModificacion',
        'created_at',
        'update_at'
    ];
    public function categoria()
    {
        return $this->belongsTo('App\Categoria');
    }
    public function clasificacion()
    {
        return $this->belongsTo('App\Clasificacion');
    }
    public function cliente()
    {
        return $this->belongsTo('App\Cliente');
    }
    public function periodicidad()
    {
        return $this->belongsTo('App\Periodicidad');
    }
    public function plataforma()
    {
        return $this->belongsTo('App\Plataforma');
    }
    public function unidad()
    {
        return $this->belongsTo('App\Unidad');
    }
}
