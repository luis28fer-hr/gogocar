<?php

namespace App\Http\Controllers;

use App\Http\Requests\loginValidador;
use App\Http\Requests\registrateValidador;
use App\Http\Requests\perfilValidar;
use Exception;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Carbon;

class loginController extends Controller
{
    public function index()
    {


        return view('Login/login');
    }

    public function login(loginValidador $request)
    {
        $credentials = $request->only('email', 'password');
        if (Auth::attempt($credentials)) {

            $request->session()->regenerate();

            return redirect('viajes')->with('bienvenida', 'login');
        }

        Auth::logout();
        return redirect('/')->with('error_sesion', 'login');
    }

    public function salir()
    {

        Auth::logout();
        return redirect('/');
    }


    public function registrate()
    {

        return view('Login/register');
    }

    public function newUser(registrateValidador $request)
    {
        try {
            DB::table('users')->insert([
                "matricula" => $request->input('matricula'),
                "name" => $request->input('nombre'),
                "apellido_p" => $request->input('apellido_p'),
                "apellido_m" => $request->input('apellido_m'),
                "telefono" => $request->input('telefono'),
                "email" => $request->input('email'),
                "password" => "$2y$10$92IXUNpkjO0rOQ5byMi.Ye4oKoEa3Ro9llC/.og/at2.uheWG/igi",
                "created_at" => Carbon::now(),
                "updated_at" => Carbon::now()
            ]);
        } catch (Exception $e) {
            return redirect('registrate')->with('error', 'login');
        }



        return redirect('/')->with('newUser', 'login');
    }

    public function actualizarPerfil(perfilValidar $request)
    {
        $idActivo = Auth::user()->id;
        $matricula = $request->input('matricula');
        $correo = $request->input('correo');

        if ($matricula != Auth::user()->matricula) {

            $Matricula_Existente = DB::table('users')->where('matricula', $matricula)->first();
            if ($Matricula_Existente != null) {
                return redirect('viajes')->with('ErrorMatricula', 'Usuario');
            }
        }

        if ($correo != Auth::user()->email) {

            $Correo_Existente = DB::table('users')->where('email', $correo)->first();
            if ($Correo_Existente != null) {
                return redirect('viajes')->with('ErrorCorreo', 'Usuario');
            }
        }

        DB::table('users')->where('id', $idActivo)->update([
            "matricula" => $request->input('matricula'),
            "name" => $request->input('nombre'),
            "apellido_p" => $request->input('paterno'),
            "apellido_m" => $request->input('materno'),
            "telefono" => $request->input('telefono'),
            "email" => $request->input('correo'),
            "updated_at" => Carbon::now()
        ]);

        return redirect('viajes')->with('PerfilActualizado', 'Usuario');
    }
}
