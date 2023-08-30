<?php

namespace App\Http\Controllers;

use App\Models\Formato;
use App\Http\Requests\StoreFormatoRequest;
use App\Http\Requests\UpdateFormatoRequest;

class FormatoController extends Controller
{
    public function __construct()
    {
        $this->middleware('auth');
    }
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
     * @param  \App\Http\Requests\StoreFormatoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function store(StoreFormatoRequest $request)
    {
        //
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function show(Formato $formato)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function edit(Formato $formato)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateFormatoRequest  $request
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function update(UpdateFormatoRequest $request, Formato $formato)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Formato  $formato
     * @return \Illuminate\Http\Response
     */
    public function destroy(Formato $formato)
    {
        //
    }
}
