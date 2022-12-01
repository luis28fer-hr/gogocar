<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class autosControlador extends Controller
{
    public function index()
    {
        //
    }
    public function create()
    {
        return view('viajes.agregarAuto');
    }

    public function store(Request $request)
    {
        //
    }
    public function show()
    {
        return view('viajes.consultarAutos');
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
