<?php

namespace App\Http\Controllers;

use App\Models\Nivel;
use App\Http\Requests\StoreNivelRequest;
use App\Http\Requests\UpdateNivelRequest;
use Illuminate\Http\Request;

class NivelController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
   public function index()
    {
        return view("niveles.lista")->with([
            'niveles'=>Nivel::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("niveles.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNivelRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarNivel(Request $request)
    {
        
        $rules=[
        'nombre'=>['required','max:100'],      
        
        ];
        request()->validate($rules);


        $Nivel=Nivel::create(request()->all());

        session()->flash('success', 'El Nivel fue creado con éxito');
        return redirect()->route("niveles");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Nivel  $Nivel
     * @return \Illuminate\Http\Response
     */
    public function show($nivel)
    {

        return view('niveles.edit')->with([
        'nivel'=>Nivel::findOrFail($nivel),      

       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Nivel  $Nivel
     * @return \Illuminate\Http\Response
     */
    public function edit($nivel)
    {
        $rules=[
        'nombre'=>['required','max:100'],      
        
        ];
        request()->validate($rules);

        $nivel=Nivel::findOrFail($nivel);
        $nivel->update(request()->all());

        return redirect()->route("niveles");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateNivelRequest  $request
     * @param  \App\Models\Nivel  $Nivel
     * @return \Illuminate\Http\Response
     */
    public function borrar($nivel)
    {
        return view('niveles.borrar')->with([
        'nivel'=>nivel::findOrFail($nivel),      

       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Nivel  $Nivel
     * @return \Illuminate\Http\Response
     */
    public function destroy($nivel)
    {
        $nivel=Nivel::findOrFail($nivel);
        $nivel->delete();

        return redirect()->route("niveles");
    }
}
