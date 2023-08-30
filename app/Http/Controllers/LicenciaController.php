<?php

namespace App\Http\Controllers;

use App\Models\Licencia;
use App\Http\Requests\StoreLicenciaRequest;
use App\Http\Requests\UpdateLicenciaRequest;
use Illuminate\Http\Request;

class LicenciaController extends Controller
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
        return view("licencias.lista")->with([
            'licencias'=>Licencia::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("licencias.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreLicenciaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarLicencia(Request $request)
    {
        
        $rules=[
        'nombre'=>['required','max:100'],
        
        ];
        request()->validate($rules);


        $licencia=Licencia::create(request()->all());

        session()->flash('success', 'El Licencia fue creado con éxito');
        return redirect()->route("licencias");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Licencia  $Licencia
     * @return \Illuminate\Http\Response
     */
    public function show($licencia)
    {

        return view('licencias.edit')->with([
        'licencia'=>Licencia::findOrFail($licencia),      

       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Licencia  $Licencia
     * @return \Illuminate\Http\Response
     */
    public function edit($licencia)
    {
        $rules=[
        'nombre'=>['required','max:100'],  
            
        
        ];
        request()->validate($rules);

        $licencia=Licencia::findOrFail($licencia);
        $licencia->update(request()->all());

        return redirect()->route("licencias");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateLicenciaRequest  $request
     * @param  \App\Models\Licencia  $Licencia
     * @return \Illuminate\Http\Response
     */
    public function borrar($licencia)
    {
        return view('licencias.borrar')->with([
        'licencia'=>Licencia::findOrFail($licencia),      

       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Licencia  $Licencia
     * @return \Illuminate\Http\Response
     */
    public function destroy($licencia)
    {
        $licencia=Licencia::findOrFail($licencia);
        $licencia->delete();

        return redirect()->route("licencias");
    }
}
