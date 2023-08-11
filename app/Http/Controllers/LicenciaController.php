<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use App\Http\Requests\StoreLicenciaRequest;
use App\Http\Requests\UpdateLicenciaRequest;

class LicenciaController extends Controller
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
     * @param  \App\Http\Requests\StoreLicenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreLicenciaRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function show(Licencia $licencia)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function edit(Licencia $licencia)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenciaRequest  $request
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateLicenciaRequest $request, Licencia $licencia)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licencia  $licencia
     * @return \Illuminate\Http\Response
     */
    public function destroy(Licencia $licencia)
    {
        //
    }
}
