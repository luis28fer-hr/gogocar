<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Barryvdh\DomPDF\Facade\Pdf;

class historialControlador extends Controller
{
    public function index()
    {
        $viajes = DB::select('SELECT v.* from viajes as v, autos as a, users as u WHERE v.auto_id = a.id and a.user_id = u.id and u.id = ?', [Auth::user()->id]);

        foreach($viajes as $viaje){
            $viaje->auto = DB::table('autos')->where('id', $viaje->auto_id)->first();
        }

        foreach($viajes as $viaje){
            $viaje->pasajeros = DB::select('SELECT u.* from solicitudes as s, users as u where s.estatus = ? and s.viaje_id = ? and s.user_id = u.id', ['Aceptado', $viaje->id]);
        }

        return view('historial.historial', compact('viajes'));
    }
    public function reporte($id)
    {
        $viaje = DB::table('viajes')->where('id', $id)->first();
        $viaje->auto = DB::table('autos')->where('id', $viaje->auto_id)->first();
        $viaje->pasajeros = DB::select('SELECT u.* from solicitudes as s, users as u where s.estatus = ? and s.viaje_id = ? and s.user_id = u.id', ['Aceptado', $id]);


        $pdf = PDF::loadView('historial/reporte', compact('viaje'));
        return $pdf->stream();
    }

}
