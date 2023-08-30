<?php

namespace App\Http\Controllers;

use App\Models\Subcategoria;
use App\Models\Eje;
use App\Http\Requests\StoreSubcategoriaRequest;
use App\Http\Requests\UpdateSubcategoriaRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class SubcategoriaController extends Controller
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
       

        $subcategorias= DB::table('subcategorias')->join('ejes' ,'subcategorias.id_eje', 'ejes.id')->select('subcategorias.*', 'ejes.nombre as ejeNombre')->get();

      //  dd($subcategorias);

        return view("subcategorias.lista")->with([
            'subcategorias'=>$subcategorias,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("subcategorias.create")->with([
           'ejes'=>Eje::all(),
        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreSubcategoriaRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarSubcategoria(Request $request)
    {
        
        $rules=[
        'nombre'=>['required','max:100'], 
        'id_eje'=>['required'],     
        
        ];
        request()->validate($rules);


        $Subcategoria=Subcategoria::create(request()->all());

        session()->flash('success', 'El Subcategoria fue creado con éxito');
        return redirect()->route("subcategorias");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Subcategoria  $Subcategoria
     * @return \Illuminate\Http\Response
     */
    public function show($subcategoria)
    {

        return view('subcategorias.edit')->with([
        'subcategoria'=>Subcategoria::findOrFail($subcategoria),
        'ejes'=>Eje::all(),


       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Subcategoria  $Subcategoria
     * @return \Illuminate\Http\Response
     */
    public function edit($subcategoria)
    {
        $rules=[
        'nombre'=>['required','max:100'],
        'id_eje'=>['required'],       
        
        ];
        request()->validate($rules);

        $subcategoria=Subcategoria::findOrFail($subcategoria);
        $subcategoria->update(request()->all());

        return redirect()->route("subcategorias");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateSubcategoriaRequest  $request
     * @param  \App\Models\Subcategoria  $Subcategoria
     * @return \Illuminate\Http\Response
     */
    public function borrar($subcategoria)
    {
        return view('subcategorias.borrar')->with([
        'subcategoria'=>Subcategoria::findOrFail($subcategoria),      

       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Subcategoria  $Subcategoria
     * @return \Illuminate\Http\Response
     */
    public function destroy($subcategoria)
    {
        $subcategoria=Subcategoria::findOrFail($subcategoria);
        $subcategoria->delete();

        return redirect()->route("subcategorias");
    }
}
