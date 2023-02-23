<?php

namespace App\Http\Controllers;

use App\Http\Requests\StoreUpdateAutoRequest;
use App\Models\Auto;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Redirect;

class AutoController extends Controller
{
    public function index()
    {
        $autos = Auto::where('usuario_id', Auth::id())->get();

        foreach($autos as $auto){
            if($auto->verificado == 1 && $auto->activo == 1){
                $auto->estatus = (object)[
                    'borde' => '__activoBorde',
                    'color' => '__activoEstatus',
                    'texto' => 'Verificado y activo'
                ];
            } elseif($auto->verificado == 1 && $auto->activo == 0){
                $auto->estatus = (object)[
                    'borde' => '__normalBorde',
                    'color' => '__normalEstatus',
                    'texto' => 'Verificado pero no activo'
                ];
            } elseif($auto->verificado == 0 && $auto->activo == 0){
                $auto->estatus = (object)[
                    'borde' => '__advertenciaBorde',
                    'color' => '__advertenciaEstatus',
                    'texto' => 'No verificado y no activo'
                ]; 
            } else {
                $auto->estatus = (object)[
                    'borde' => '__llenoBorde',
                    'color' => '__llenoEstatus',
                    'texto' => 'No verificado'
                ];
            }
        }

        return view('autos.consultarAutos', [
            'autos' => $autos
        ]);
    }

    public function create()
    {
        return view('autos.agregarAuto');
    }

    public function store(StoreUpdateAutoRequest $request)
    {
        Auto::create($request->validated());
        return Redirect::route('viajes.auto.consultar')->with('autoCreado', 'mensaje');
    }
    public function show()
    {
        
        return view('autos.consultarAutos');
    }

    public function edit($id)
    {
        //
    }

    public function update(StoreUpdateAutoRequest $request, $id)
    {
        $auto = Auto::find($id);

        $auto->fill($request -> validated());
        $auto->activo = $request->activo == 'true' ? 1 : 0;
        $auto->verificado = $request->verificado == 'true' ? 1 : 0;
        $auto->save();

        return Redirect::route('viajes.auto.consultar')->with('autoEditado', 'mensaje');
    }

    public function destroy($id)
    {
        $auto = Auto::find($id);
        $auto->delete();

        return Redirect::route('viajes.auto.consultar')->with('autoEliminado', 'mensaje');
    }
}
