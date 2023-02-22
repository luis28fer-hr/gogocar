<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viajesControlador extends Controller
{
    public function index()
    {
        return view('viajes.consulta_viajes');
    }
    public function solicitar()
    {

        return redirect('solicitudes')->with('viajeSolicitado', 'mensaje');
    }
    public function store(Request $request)
    {

        return redirect('/')->with('viajeCreado', 'mensaje');
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
