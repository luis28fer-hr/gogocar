<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ControladorVistas extends Controller
{
    public function viajes(){

        return view('viajes.viajes');
    }

    public function solicitudes(){

        return view('solicitudes.solicitudes');
    }

    public function historial(){

        return view('historial.historial');
    }


}
