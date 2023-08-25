<?php

namespace App\Http\Controllers;

use App\Models\Etiqueta;
use App\Http\Requests\StoreEtiquetaRequest;
use App\Http\Requests\UpdateEtiquetaRequest;
use Illuminate\Http\Request;


class EtiquetaController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        return view("etiquetas.lista")->with([
            'etiquetas'=>Etiqueta::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("etiquetas.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEtiquetaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarEtiqueta(Request $request)
    {
        
        $rules=[
        'nombre'=>['required','max:100'],      
        
        ];
        request()->validate($rules);


        $etiqueta=Etiqueta::create(request()->all());

        session()->flash('success', 'El tiqueta fue creado con éxito');
        return redirect()->route("etiquetas");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tiqueta  $tiqueta
     * @return \Illuminate\Http\Response
     */
    public function show($etiqueta)
    {

        return view('etiquetas.edit')->with([
        'etiqueta'=>Etiqueta::findOrFail($etiqueta),      

       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tiqueta  $tiqueta
     * @return \Illuminate\Http\Response
     */
    public function edit($etiqueta)
    {
        $rules=[
        'nombre'=>['required','max:100'],      
        
        ];
        request()->validate($rules);

        $etiqueta=Etiqueta::findOrFail($etiqueta);
        $etiqueta->update(request()->all());

        return redirect()->route("etiquetas");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatetiquetaRequest  $request
     * @param  \App\Models\tiqueta  $tiqueta
     * @return \Illuminate\Http\Response
     */
    public function borrar($etiqueta)
    {
        return view('etiquetas.borrar')->with([
        'etiqueta'=>Etiqueta::findOrFail($etiqueta),      

       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tiqueta  $tiqueta
     * @return \Illuminate\Http\Response
     */
    public function destroy($etiqueta)
    {
        $etiqueta=Etiqueta::findOrFail($etiqueta);
        $etiqueta->delete();

        return redirect()->route("etiquetas");
    }
}
