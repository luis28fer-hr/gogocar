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
        return view('autos.agregarAuto');
    }

    public function store(Request $request)
    {

        return redirect('autos/consultar')->with('autoCreado', 'mensaje');
    }
    public function show()
    {

        return view('autos.consultarAutos');
    }

    public function edit($id)
    {
        //
    }

    public function update()
    {

        return redirect('autos/consultar')->with('autoEditado', 'mensaje');
    }

    public function destroy()
    {

        return redirect('autos/consultar')->with('autoEliminado', 'mensaje');
    }
}
