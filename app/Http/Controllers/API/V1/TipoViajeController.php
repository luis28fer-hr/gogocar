<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\TipoViaje;
use App\Http\Requests\API\V1\StoreTipoViajeRequest;
use App\Http\Requests\API\V1\UpdateTipoViajeRequest;

class TipoViajeController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\API\V1\StoreTipoViajeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreTipoViajeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\TipoViaje  $tipoViaje
     * @return \Illuminate\Http\Response
     */
    public function show(TipoViaje $tipoViaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\TipoViaje  $tipoViaje
     * @return \Illuminate\Http\Response
     */
    public function edit(TipoViaje $tipoViaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\API\V1\UpdateTipoViajeRequest  $request
     * @param  \App\Models\TipoViaje  $tipoViaje
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateTipoViajeRequest $request, TipoViaje $tipoViaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\TipoViaje  $tipoViaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(TipoViaje $tipoViaje)
    {
        //
    }
}
