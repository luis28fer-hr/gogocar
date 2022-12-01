<?php

use App\Http\Controllers\autosControlador;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historialControlador;
use App\Http\Controllers\solicitudesControlador;
use App\Http\Controllers\viajesControlador;

Route::get('/', [viajesControlador::class, 'index'])->name('viajes');
Route::get('viajes/crear', [viajesControlador::class, 'create'])->name('viajes.crear');

Route::get('autos/agregar', [autosControlador::class, 'create'])->name('viajes.auto.agregar');
Route::get('autos/consultar', [autosControlador::class, 'show'])->name('viajes.auto.consultar');

Route::get('solicitudes', [solicitudesControlador::class, 'index'])->name('solicitudes');

Route::get('historial', [historialControlador::class, 'index'])->name('historial');
