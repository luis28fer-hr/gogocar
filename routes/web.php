<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\historialControlador;
use App\Http\Controllers\solicitudesControlador;
use App\Http\Controllers\viajesControlador;

/* Route::get('/', function () {
    return view('welcome');
}); */

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

Route::get('/', [viajesControlador::class, 'index'])->name('viajes')->middleware(['auth', 'verified']);
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

require __DIR__.'/auth.php';
