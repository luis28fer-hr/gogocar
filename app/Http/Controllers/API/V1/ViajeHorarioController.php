<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\ViajeHorario;
use App\Http\Requests\API\V1\StoreViajeHorarioRequest;
use App\Http\Requests\API\V1\UpdateViajeHorarioRequest;

class ViajeHorarioController extends Controller
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
     * @param  \App\Http\Requests\API\V1\StoreViajeHorarioRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreViajeHorarioRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\ViajeHorario  $viajeHorario
     * @return \Illuminate\Http\Response
     */
    public function show(ViajeHorario $viajeHorario)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\ViajeHorario  $viajeHorario
     * @return \Illuminate\Http\Response
     */
    public function edit(ViajeHorario $viajeHorario)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\API\V1\UpdateViajeHorarioRequest  $request
     * @param  \App\Models\ViajeHorario  $viajeHorario
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateViajeHorarioRequest $request, ViajeHorario $viajeHorario)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\ViajeHorario  $viajeHorario
     * @return \Illuminate\Http\Response
     */
    public function destroy(ViajeHorario $viajeHorario)
    {
        //
    }
}
