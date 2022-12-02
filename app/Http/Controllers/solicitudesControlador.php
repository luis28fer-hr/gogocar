<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class solicitudesControlador extends Controller
{

    public function index()
    {
        return view('solicitudes.consulta_solicitudes');
    }

    public function cancelar()
    {
        return redirect('solicitudes')->with('solicitudCancelado', 'mensaje');
    }

    public function create()
    {
        //
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
