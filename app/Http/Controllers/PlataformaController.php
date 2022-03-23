<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use App\Plataforma;
use App\Http\Resources\Plataforma as PlataformaResource;
use App\Http\Resources\PlataformaCollection;

class PlataformaController extends Controller
{
    public function index()
    {
        return new PlataformaCollection(Plataforma::all());
    }
    public function create(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|max:255',
            'Descripcion' => 'max:500',
        ]);
        $Plataforma = Plataforma::create($request->all());
        return (new PlataformaResource($Plataforma))
                ->response()
                ->setStatusCode(201);
    }
    public function getById($id)
    {
        return new PlataformaResource(Plataforma::findOrFail($id));
    }
    public function update(Request $request)
    {
        $request->validate([
            'Nombre' => 'required|max:255',
            'Descripcion' => 'max:500',
        ]);
        $Plataforma = Plataforma::where('id', '=', $request->id)->first();
        $Plataforma->update($request->all());
        $Plataforma = Plataforma::where('id', '=', $request->id)->first();
        return (new PlataformaResource($Plataforma))
                ->response()
                ->setStatusCode(202);
    }
    public function delete($id)
    {
        $Plataforma = Plataforma::findOrFail($id);
        $Plataforma->delete();
        return response()->json("Eliminado", 204);
    }
}
