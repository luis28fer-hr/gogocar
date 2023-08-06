<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\Viaje;
use App\Http\Requests\API\V1\StoreViajeRequest;
use App\Http\Requests\API\V1\UpdateViajeRequest;

class ViajeController extends Controller
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
     * @param  \App\Http\Requests\API\V1\StoreViajeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreViajeRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Viaje  $viaje
     * @return \Illuminate\Http\Response
     */
    public function show(Viaje $viaje)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Viaje  $viaje
     * @return \Illuminate\Http\Response
     */
    public function edit(Viaje $viaje)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\API\V1\UpdateViajeRequest  $request
     * @param  \App\Models\Viaje  $viaje
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateViajeRequest $request, Viaje $viaje)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Viaje  $viaje
     * @return \Illuminate\Http\Response
     */
    public function destroy(Viaje $viaje)
    {
        //
    }
}
