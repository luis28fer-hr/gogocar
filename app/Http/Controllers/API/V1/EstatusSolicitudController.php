<?php

namespace App\Http\Controllers\API\V1;

use App\Http\Controllers\Controller;
use App\Models\EstatusSolicitud;
use App\Http\Requests\API\V1\StoreEstatusSolicitudRequest;
use App\Http\Requests\API\V1\UpdateEstatusSolicitudRequest;

class EstatusSolicitudController extends Controller
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
     * @param  \App\Http\Requests\API\V1\StoreEstatusSolicitudRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreEstatusSolicitudRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\EstatusSolicitud  $estatusSolicitud
     * @return \Illuminate\Http\Response
     */
    public function show(EstatusSolicitud $estatusSolicitud)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\EstatusSolicitud  $estatusSolicitud
     * @return \Illuminate\Http\Response
     */
    public function edit(EstatusSolicitud $estatusSolicitud)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\API\V1\UpdateEstatusSolicitudRequest  $request
     * @param  \App\Models\EstatusSolicitud  $estatusSolicitud
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateEstatusSolicitudRequest $request, EstatusSolicitud $estatusSolicitud)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\EstatusSolicitud  $estatusSolicitud
     * @return \Illuminate\Http\Response
     */
    public function destroy(EstatusSolicitud $estatusSolicitud)
    {
        //
    }
}
