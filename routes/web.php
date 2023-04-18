<?php

use App\Http\Controllers\autosControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historialControlador;
use App\Http\Controllers\loginController;
use App\Http\Controllers\misViajesController;
use App\Http\Controllers\solicitudesControlador;
use App\Http\Controllers\viajesControlador;

Route::get('/', [loginController::class, 'index'])->name('login');
Route::post('Login', [loginController::class, 'login'])->name('login.entrar');
Route::get('LogOut', [loginController::class, 'salir'])->name('salir');


Route::post('Actualizar/Miperfil', [loginController::class, 'actualizarPerfil'])->name('actualizar.perfil');


Route::get('Registrate', [loginController::class, 'registrate'])->name('registrate');
Route::post('Registrate/user', [loginController::class, 'newUser'])->name('registrate.user');

Route::get('viajes/personal', [misViajesController::class, 'index'])->name('viajes.personal')->middleware('auth');
Route::post('viajes/personal/crearViaje', [misViajesController::class, 'store'])->name('viajes.personal.crearviaje')->middleware('auth');
Route::delete('viajes/personal/eliminarViaje/{id}', [misViajesController::class, 'destroy'])->name('viajes.personal.eliminarViaje')->middleware('auth');

Route::get('viajes', [viajesControlador::class, 'index'])->name('viajes')->middleware('auth');
Route::post('viajes/solicitar/{id}', [viajesControlador::class, 'solicitar'])->name('viajes.solicitar')->middleware('auth');

Route::get('autos/consultar', [autosControlador::class, 'show'])->name('viajes.auto.consultar')->middleware('auth');
Route::post('autos/store', [autosControlador::class, 'store'])->name('viajes.auto.guardar')->middleware('auth');
Route::post('autos/update/{id}', [autosControlador::class, 'update'])->name('viajes.auto.actualizar')->middleware('auth');
Route::delete('autos/eliminar/{id}', [autosControlador::class, 'destroy'])->name('viajes.auto.eliminar')->middleware('auth');



Route::get('solicitudes', [solicitudesControlador::class, 'index'])->name('solicitudes')->middleware('auth');
Route::post('solicitudes/cancelar/{id}', [solicitudesControlador::class, 'cancelar'])->name('solicitudes.cancelar')->middleware('auth');
Route::get('solicitudes/personal', [solicitudesControlador::class, 'misSolicitudes'])->name('solicitudes.personal')->middleware('auth');
Route::get('solicitudes/personal/aceptar/{id}', [solicitudesControlador::class, 'updateAceptar'])->name('solicitudes.personal.aceptar')->middleware('auth');
Route::get('solicitudes/personal/rechazar/{id}', [solicitudesControlador::class, 'updateRechazar'])->name('solicitudes.personal.rechazar')->middleware('auth');



Route::get('historial', [historialControlador::class, 'index'])->name('historial')->middleware('auth');
Route::get('historial/reporte/{id}', [historialControlador::class, 'reporte'])->name('historial.reporte')->middleware('auth');
