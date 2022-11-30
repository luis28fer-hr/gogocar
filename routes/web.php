<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\ControladorVistas;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

Route::get('/', [ControladorVistas::class, 'viajes'])->name('viajes');

Route::get('solicitudes', [ControladorVistas::class, 'solicitudes'])->name('solicitudes');

Route::get('historial', [ControladorVistas::class, 'historial'])->name('historial');
