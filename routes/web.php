<?php

use App\Http\Controllers\autosControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historialControlador;
use App\Http\Controllers\solicitudesControlador;
use App\Http\Controllers\viajesControlador;

Route::get('/', [viajesControlador::class, 'index'])->name('viajes');
Route::post('viajes/store', [viajesControlador::class, 'store'])->name('viajes.guardar');
Route::post('viajes/solicitar', [viajesControlador::class, 'solicitar'])->name('viajes.solicitar');


Route::get('autos/agregar', [autosControlador::class, 'create'])->name('viajes.auto.agregar');
Route::get('autos/consultar', [autosControlador::class, 'show'])->name('viajes.auto.consultar');
Route::post('autos/store', [autosControlador::class, 'store'])->name('viajes.auto.guardar');
Route::post('autos/update', [autosControlador::class, 'update'])->name('viajes.auto.actualizar');
Route::post('autos/eliminar', [autosControlador::class, 'destroy'])->name('viajes.auto.eliminar');

Route::get('solicitudes', [solicitudesControlador::class, 'index'])->name('solicitudes');
Route::post('solicitudes/cancelar', [solicitudesControlador::class, 'cancelar'])->name('solicitudes.cancelar');

Route::get('historial', [historialControlador::class, 'index'])->name('historial');
