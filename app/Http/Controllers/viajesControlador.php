<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class viajesControlador extends Controller
{
    public function index()
    {
        return view('viajes.consulta_viajes');
    }
    public function create()
    {
        return view('viajes.crearViaje');
    }
    public function store(Request $request)
    {
        //
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
