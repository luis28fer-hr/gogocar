<?php

namespace App\Http\Controllers;

use App\Http\Requests\viajeValidar;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Carbon;

class misViajesController extends Controller
{

    public function index()
    {
        $autos = DB::table('autos')->where('user_id', Auth::user()->id)->get();

        $misviajes = DB::select("SELECT v.*, a.foto, a.capacidad as 'capAuto', u.name, u.apellido_p, u.apellido_m, u.telefono FROM viajes as v, autos as a, users as u WHERE v.auto_id = a.id AND a.user_id = u.id AND u.id = ?", [Auth::user()->id]);


        return view('viajes.consulta_MisViajes', compact('autos', 'misviajes'));
    }

    public function store(viajeValidar $request)
    {

        $lunes = null;
        $martes = null;
        $miercoles = null;
        $jueves = null;
        $viernes = null;
        $sabado = null;

        try {
            $cantidadDias = count($request->dias);

            for ($i = 0; $i < $cantidadDias; $i++) {
                if ($request->dias[$i] == "lunes") {
                    global $lunes;
                    $lunes = "activo";
                }
                if ($request->dias[$i] == "martes") {
                    global $martes;
                    $martes = "activo";
                }
                if ($request->dias[$i] == "miercoles") {
                    global $miercoles;
                    $miercoles = "activo";
                }
                if ($request->dias[$i] == "jueves") {
                    global $jueves;
                    $jueves = "activo";
                }
                if ($request->dias[$i] == "viernes") {
                    global $viernes;
                    $viernes = "activo";
                }
                if ($request->dias[$i] == "sabado") {
                    global $sabado;
                    $sabado = "activo";
                }
            }

        } catch (Exception $e) {
            return redirect('viajes/personal')->with('error_viajeDias', 'autos');
        }

        if ($request->input('ida') == null and $request->input('vuelta') == null) {
            return redirect('viajes/personal')->with('error_viajeHora', 'autos');
        }
        global $lunes, $martes, $martes, $miercoles, $jueves, $viernes, $sabado;

        DB::table('viajes')->insert([
            "estatus" => "Activo",
            "tipo" => $request->input('tipo'),
            "encuentro" => $request->input('encuentro'),

            "lunes" => $lunes,
            "Martes" => $martes,
            "Miercoles" => $miercoles,
            "Jueves" => $jueves,
            "Viernes" => $viernes,
            "sabado" => $sabado,

            "ida" => $request->input('ida'),
            "vuelta" => $request->input('vuelta'),
            "capacidad" => 0,
            'auto_id' => $request->input('vehiculo'),

            "created_at" => Carbon::now(),
            "updated_at" => Carbon::now()
        ]);

        return redirect('viajes/personal')->with('viajeCreado', 'mensaje');

        //convetir un array a string
        //$cadena_dias = implode(",", $request->dias);
    }


    public function destroy($id)
    {

        DB::table('viajes')->where('id', $id)->delete();
        return redirect('viajes/personal')->with('viajeEliminado', 'mensaje');
    }
}
