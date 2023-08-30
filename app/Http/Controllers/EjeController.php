<?php

namespace App\Http\Controllers;

use App\Models\Eje;
use App\Http\Requests\StoreEjeRequest;
use App\Http\Requests\UpdateEjeRequest;
use Illuminate\Http\Request;

class EjeController extends Controller
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
        return view("ejes.lista")->with([
            'ejes'=>Eje::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("ejes.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreEjeRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarEje(Request $request)
    {
        
        $rules=[
        'nombre'=>['required','max:100'],      
        
        ];
        request()->validate($rules);


        $eje=Eje::create(request()->all());

        session()->flash('success', 'El eje fue creado con éxito');
        return redirect()->route("ejes");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function show($eje)
    {

        return view('ejes.edit')->with([
        'eje'=>Eje::findOrFail($eje),      

       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function edit($eje)
    {
        $rules=[
        'nombre'=>['required','max:100'],      
        
        ];
        request()->validate($rules);

        $eje=Eje::findOrFail($eje);
        $eje->update(request()->all());

        return redirect()->route("ejes");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateEjeRequest  $request
     * @param  \App\Models\Eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function borrar($eje)
    {
        return view('ejes.borrar')->with([
        'eje'=>Eje::findOrFail($eje),      

       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Eje  $eje
     * @return \Illuminate\Http\Response
     */
    public function destroy($eje)
    {
        $eje=Eje::findOrFail($eje);
        $eje->delete();

        return redirect()->route("ejes");
    }
}
