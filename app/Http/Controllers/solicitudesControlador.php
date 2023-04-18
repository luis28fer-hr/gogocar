<?php

namespace App\Http\Controllers;

use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class solicitudesControlador extends Controller
{

    public function index()
    {
        $solicitudes = DB::table('solicitudes')->where('user_id', Auth::user()->id)->get();

        foreach ($solicitudes as $solicitud) {
            $solicitud->viaje = DB::table('viajes')->where('id', $solicitud->viaje_id)->first();
        }
        foreach ($solicitudes as $solicitud) {
            $solicitud->auto = DB::table('autos')->where('id', $solicitud->viaje->auto_id)->first();
        }
        foreach ($solicitudes as $solicitud) {
            $solicitud->conductor = DB::table('users')->where('id', $solicitud->auto->user_id)->first();
        }

        foreach ($solicitudes as $solicitud) {
            $solicitud->viaje->pasajeros = DB::select("SELECT COUNT(*) as 'pas' FROM solicitudes WHERE viaje_id = ? AND estatus = 'Aceptado'", [$solicitud->viaje->id]);
        }

        foreach ($solicitudes as $solicitud) {
            $solicitud->pasajeros = DB::select("SELECT u.name, u.apellido_p, u.matricula FROM users as u, solicitudes as s WHERE s.viaje_id = ? AND s.estatus = 'Aceptado' and s.user_id = u.id", [$solicitud->viaje->id]);
        }

        return view('solicitudes.consulta_solicitudes', compact('solicitudes'));
    }

    public function cancelar($id)
    {
        #primero checa si la solicitus ya se acepto y elimina el cupo en el viaje
        $solicitud = DB::table('solicitudes')->where('id', $id)->first();
        if ($solicitud->estatus == "Aceptado") {

            $viaje = DB::table('viajes')->where('id', $solicitud->viaje_id)->first();

            if ($viaje->estatus == "Lleno") {
                DB::table('viajes')->where('id', $viaje->id)->update([
                    "estatus" => "Advertencia",
                    "updated_at" => Carbon::now()
                ]);
            }
            if ($viaje->estatus == "Advertencia") {
                DB::table('viajes')->where('id', $viaje->id)->update([
                    "estatus" => "Activo",
                    "updated_at" => Carbon::now()
                ]);
            }

            DB::table('viajes')->where('id', $viaje->id)->update([
                "capacidad" => $viaje->capacidad - 1,
                "updated_at" => Carbon::now()
            ]);
        }

        #elimina la solicitud
        DB::table('solicitudes')->where('id', $id)->delete();

        return redirect('solicitudes')->with('solicitudCancelado', 'mensaje');
    }

    public function misSolicitudes()
    {

        $Missolicitudes = DB::select('SELECT s.* FROM solicitudes as s, viajes as v, autos as a, users as u where s.estatus = ? and s.viaje_id = v.id and v.auto_id = a.id and a.user_id = u.id and u.id = ?', ['Pendiente', Auth::user()->id]);

        foreach ($Missolicitudes as $solicitud){
            $solicitud->viaje = DB::select("SELECT * FROM viajes WHERE id = ? ",  [$solicitud->viaje_id]);
        }

        foreach ($Missolicitudes as $solicitud){
            $solicitud->usuario = DB::select("SELECT * FROM users WHERE id = ? ",  [$solicitud->user_id]);
        }



        //return $Missolicitudes;
        return view('solicitudes.consulta_Missolicitudes', compact('Missolicitudes'));
    }

    public function updateAceptar($id)
    {
        $soli = DB::table('solicitudes')->where('id', $id)->first();
        $viaje = DB::table('viajes')->where('id', $soli->viaje_id)->first();
        $auto = DB::table('autos')->where('id', $viaje->auto_id)->first();


        if ($viaje->capacidad < $auto->capacidad) {
            #todavia hay cupos

            DB::table('viajes')->where('id', $viaje->id)->update([
                "capacidad" => $viaje->capacidad + 1,
                "updated_at" => Carbon::now()
            ]);


            try{
                DB::table('solicitudes')->where('id', $id)->update([
                    "estatus" => "Aceptado",
                    "updated_at" => Carbon::now()
                ]);

                $viaje = DB::table('viajes')->where('id', $soli->viaje_id)->first();

                if ($viaje->capacidad == ($auto->capacidad)-1) {
                    DB::table('viajes')->where('id', $viaje->id)->update([
                        "estatus" => "Advertencia",
                        "updated_at" => Carbon::now()
                    ]);
                }

                if ($viaje->capacidad == $auto->capacidad) {
                    DB::table('viajes')->where('id', $viaje->id)->update([
                        "estatus" => "Lleno",
                        "updated_at" => Carbon::now()
                    ]);
                }


            }catch(Exception $e){
                return redirect('solicitudes/personal')->with('error', 'solicitud');
            }

            return redirect('solicitudes/personal')->with('solicitudAceptar', 'solicitud');

        }else{ #ya no hay cupos

            return redirect('solicitudes/personal')->with('NoCupos', 'solicitud');

        }


        return redirect('solicitudes/personal')->with('solicitudAceptar', 'solicitud');
    }

    public function updateRechazar($id)
    {

        try{
            DB::table('solicitudes')->where('id', $id)->update([
                "estatus" => "Rechazado",
                "updated_at" => Carbon::now()
            ]);

        }catch(Exception $e){
            return redirect('solicitudes/personal')->with('error', 'solicitud');
        }
        return redirect('solicitudes/personal')->with('solicitudRechazar', 'solicitud');
    }


    public function destroy($id)
    {

    }
}
