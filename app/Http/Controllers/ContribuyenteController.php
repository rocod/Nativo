<?php

namespace App\Http\Controllers;

use App\Models\Contribuyente;
use App\Http\Requests\StoreContribuyenteRequest;
use App\Http\Requests\UpdateContribuyenteRequest;
use Illuminate\Http\Request;

class ContribuyenteController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
      public function index()
    {
        return view("contribuyentes.lista")->with([
            'contribuyentes'=>Contribuyente::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contribuyentes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StorecontribuyenteRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarContribuyente(Request $request)
    {
        
        $rules=[
        'nombre'=>['required','max:100'],
        'apellido'=>['required','max:100'],      
        
        ];
        request()->validate($rules);


        $contribuyente=Contribuyente::create(request()->all());

        session()->flash('success', 'El contribuyente fue creado con éxito');
        return redirect()->route("contribuyentes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function show($contribuyente)
    {

        return view('contribuyentes.edit')->with([
        'contribuyente'=>Contribuyente::findOrFail($contribuyente),      

       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function edit($contribuyente)
    {
        $rules=[
        'nombre'=>['required','max:100'],  
        'apellido'=>['required','max:100'],      
        
        ];
        request()->validate($rules);

        $contribuyente=Contribuyente::findOrFail($contribuyente);
        $contribuyente->update(request()->all());

        return redirect()->route("contribuyentes");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatecontribuyenteRequest  $request
     * @param  \App\Models\contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function borrar($contribuyente)
    {
        return view('contribuyentes.borrar')->with([
        'contribuyente'=>Contribuyente::findOrFail($contribuyente),      

       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\contribuyente  $contribuyente
     * @return \Illuminate\Http\Response
     */
    public function destroy($contribuyente)
    {
        $contribuyente=Contribuyente::findOrFail($contribuyente);
        $contribuyente->delete();

        return redirect()->route("contribuyentes");
    }
}
