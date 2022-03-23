<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\SoftDeletes;

class SistemaGestion extends Model
{
    use SoftDeletes;
    protected $table = 'sistemaGestion';
    protected $fillable = [
        'codigoProyecto',
        'pregunta_1',
        'pregunta_2',
        'pregunta_3',
        'pregunta_4',
        'pregunta_5',
        'pregunta_6',
        'pregunta_7',
        'pregunta_8',
        'pregunta_9',
        'pregunta_10',
        'pregunta_11',
        'pregunta_12',
        'pregunta_13',
        'pregunta_14',
        'pregunta_15',
        'pregunta_16',
        'pregunta_17',
        'pregunta_18',
        'pregunta_19',
        'pregunta_20',
        'pregunta_21',
        'pregunta_22',
        'pregunta_23',
        'pregunta_24',
        'pregunta_25',
        'pregunta_26',
        'pregunta_27',
        'pregunta_28',
        'pregunta_29',
        'pregunta_30',
        'pregunta_31',
        'pregunta_32',
        'pregunta_33',
        'pregunta_34',
        'pregunta_35',
        'pregunta_36',
        'pregunta_37',
        'pregunta_38',
        'pregunta_39',
        'pregunta_40',
        'pregunta_41',
        'pregunta_42',
        'pregunta_43',
        'pregunta_44',
        'pregunta_45',
        'pregunta_46',
        'pregunta_47',
        'pregunta_48',
        'pregunta_49',
        'pregunta_50',
        'pregunta_51',
        'pregunta_52',
        'pregunta_53',
        'pregunta_54',
        'pregunta_55',
        'pregunta_56',
        'pregunta_57',
        'pregunta_58',
        'pregunta_59',
        'pregunta_60',
        'pregunta_61',
        'pregunta_62',
        'pregunta_63',
        'pregunta_64',
        'pregunta_65',
        'categoria',
        'create_at',
        'delete_at',
        'update_at',
    ];
}
