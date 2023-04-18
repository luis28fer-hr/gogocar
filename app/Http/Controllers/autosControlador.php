<?php

namespace App\Http\Controllers;

use App\Http\Requests\autoEditValidar;
use App\Http\Requests\autoValidar;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Facades\Auth;

class autosControlador extends Controller
{
    public function index()
    {
        //
    }
    public function store(autoValidar $request)
    {

        try {

            $img = $request->file('foto')->store('public/img');
            $url = Storage::url($img);



            DB::table('autos')->insert([
                "placa" => $request->input('placa'),
                "version" => $request->input('version'),
                "marca" => $request->input('marca'),
                "capacidad" => $request->input('capacidad'),
                "modelo" => $request->input('modelo'),
                "foto" => $url,
                'user_id' => Auth::user()->id,

                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        } catch (Exception $e) {
            return redirect('autos/consultar')->with('error_nuevoAuto', 'autos');
        }

        return redirect('autos/consultar')->with('autoCreado', 'mensaje');
    }
    public function show()
    {

        $autos = DB::table('autos')->where('user_id', Auth::user()->id)->get();
        return view('autos.consultarAutos', compact('autos'));
    }

    public function update(autoEditValidar $request, $id)
    {
        try {

            $img = $request->file('foto')->store('public/img');
            $url = Storage::url($img);

            DB::table('autos')->where('id', $id)->update([
                "placa" => $request->input('placa'),
                "version" => $request->input('version'),
                "marca" => $request->input('marca'),
                "capacidad" => $request->input('capacidad'),
                "modelo" => $request->input('modelo'),
                "foto" => $url,
                'user_id' => Auth::user()->id,
                "updated_at" => Carbon::now()
            ]);

            return redirect('autos/consultar')->with('autoEditado', 'mensaje');
        } catch (Exception $e) {
            return redirect('autos/consultar')->with('error_editAuto', 'autos');
        }
    }

    public function destroy($id)
    {

        DB::table('autos')->where('id', $id)->delete();
        return redirect('autos/consultar')->with('autoEliminado', 'mensaje');
    }
}
