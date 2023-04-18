<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;
use Exception;

class viajesControlador extends Controller
{
    public function index()
    {
        $autos = DB::table('autos')->where('user_id', Auth::user()->id)->get();
        $viajes = DB::select("SELECT v.*, a.foto, a.capacidad as 'capAuto' , u.name, u.apellido_p, u.apellido_m, u.telefono FROM viajes as v, autos as a, users as u WHERE v.auto_id = a.id AND a.user_id = u.id AND u.id != ?", [Auth::user()->id]);

        return view('viajes.consulta_viajes', compact('autos', 'viajes'));
    }
    public function solicitar($id)
    {
        //comprobar que el usuario no solicite dos veces el mismo viaje.
        $solicitud = DB::select("SELECT * FROM solicitudes WHERE viaje_id = ? AND user_id = ?", [$id, Auth::user()->id]);
        if ($solicitud != null) { //Ya lo solicto
            return redirect('viajes')->with('error_yaExistente', 'viaje');
        }else{
            try {

                $viaje = DB::table('viajes')->where('id', $id)->first();

                DB::table('solicitudes')->insert([
                    'estatus' => "Pendiente",
                    'viaje_id' => $viaje->id,
                    'user_id' => Auth::user()->id,
                    "created_at" => Carbon::now(),
                    "updated_at" => Carbon::now()
                ]);

            } catch (Exception $e) {

                return redirect('viajes')->with('error_nuevoViaje', 'viaje');
            }

            return redirect('solicitudes')->with('viajeSolicitado', 'mensaje');
        }

        return redirect('solicitudes')->with('viajeSolicitado', 'mensaje');
    }

    public function show($id)
    {
        //
    }
    public function edit($id)
    {
        //
    }

    public function update(Request $request, $id)
    {
        //
    }

    public function destroy($id)
    {
        //
    }
}
