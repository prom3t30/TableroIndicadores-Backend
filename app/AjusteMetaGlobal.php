<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class Ajustemetaglobal extends Model
{
    use SoftDeletes;
    protected $table = 'ajusteMetaGlobal';

    protected $fillable = [
        'indicador_id',
        'metaOriginal',
        'metaAjustado',
        'fechaCambio',
        'aprobacion',
        'usuarioCreacion',
        'usuarioModificacion',
        'estado',
        'year',
        'deleted_at',
        'update_at',
        'created_at',
    ];

    public function indicadores()
    {
        return $this->belongsTo('App\Indicadores');

    }
}

