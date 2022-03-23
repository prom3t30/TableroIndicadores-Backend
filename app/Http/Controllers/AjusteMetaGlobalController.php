<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\AjusteMetaGlobal;
use App\Indicadores;
use App\IndicadorMetaAno;
use App\Http\Resources\AjusteMetaGlobal as AjusteMetaGlobalResource;
use App\Http\Resources\AjusteMetaGlobalCollection;

class AjusteMetaGlobalController extends Controller
{
    public function create(Request $request)
    {
        $request->validate([
            'indicador_id' => 'required',
            'metaOriginal' => 'required',
            'metaAjustado' => 'required',
            'aprobacion' => 'required',
            'year'=>'required'
        ]);
        $AjusteMetaGlobal = AjusteMetaGlobal::create($request->all());
        $indicadores = IndicadorMetaAno::where([['indicador_id', '=',  $request->indicador_id],['year','=',$request->year]])->first();
        $indicadores->metaGlobal = $request->metaAjustado;
        $indicadores->save();
        return (new AjusteMetaGlobalResource($AjusteMetaGlobal))
                ->response()
                ->setStatusCode(201);
    }
}
