<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use App\Http\Requests\StoreContenidoRequest;
use App\Http\Requests\UpdateContenidoRequest;
use App\Models\Subcategoria;
use App\Models\Nivel;

use App\Models\Formato;
use App\Models\Etiqueta;
use App\Models\Autorx;
use App\Models\Contribuyente;
use App\Models\Licencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;

class ContenidoController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
       

        $contenidos= DB::table('contenidos')
        ->LeftJoin('subcategorias' ,'contenidos.id_subcategoria', 'subcategorias.id')
        ->LeftJoin('nivels' ,'contenidos.id_nivel', 'nivels.id')
        ->LeftJoin('formatos' ,'contenidos.id_formato', 'formatos.id')
        ->LeftJoin('etiquetas' ,'contenidos.id_etiqueta', 'etiquetas.id')
        ->LeftJoin('autorxes' ,'contenidos.id_autor', 'autorxes.id')
        ->LeftJoin('licencias' ,'contenidos.id_licencia', 'licencias.id')
        ->LeftJoin('contribuyentes' ,'contenidos.id_contribuyente', 'contribuyentes.id')

        ->select('contenidos.*',
            'subcategorias.nombre as subcategoriaNombre',
            'nivels.nombre as nivelNombre',
            'formatos.nombre as formatoNombre',
            'etiquetas.nombre as etiquetaNombre',
            'autorxes.nombre as autorxNombre',
            'licencias.nombre as licenciaNombre',
            'contribuyentes.nombre as contribuyenteNombre')
        ->get();

        

        return view("contenidos.lista")->with([
            'contenidos'=>$contenidos,

        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("contenidos.create")->with([
           
           'subcategorias'=>Subcategoria::all(),
           'niveles'=>Nivel::all(),
           'formatos'=>Formato::all(),
           'etiquetas'=>Etiqueta::all(),
           'autorxs'=>Autorx::all(),
           'contribuyentxs'=>Contribuyente::all(),
           'licencias'=>Licencia::all(),

        ]);
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreContenidoRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarContenido(Request $request)
    {
        
        $rules=[
        'nombre'=>['required','max:100'], 
        'id_eje'=>['required'],     
        
        ];
        request()->validate($rules);


        $contenido=Contenido::create(request()->all());

        session()->flash('success', 'El contenido fue creado con éxito');
        return redirect()->route("contenidos");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Contenido  $Contenido
     * @return \Illuminate\Http\Response
     */
    public function show($contenido)
    {

        return view('contenidos.edit')->with([
        'contenido'=>Contenido::findOrFail($contenido),
        'ejes'=>Eje::all(),


       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Contenido  $Contenido
     * @return \Illuminate\Http\Response
     */
    public function edit($contenido)
    {
        $rules=[
        'nombre'=>['required','max:100'],
        'id_eje'=>['required'],       
        
        ];
        request()->validate($rules);

        $contenido=Contenido::findOrFail($contenido);
        $contenido->update(request()->all());

        return redirect()->route("contenidos");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateContenidoRequest  $request
     * @param  \App\Models\Contenido  $Contenido
     * @return \Illuminate\Http\Response
     */
    public function borrar($contenido)
    {
        return view('contenidos.borrar')->with([
        'contenido'=>Contenido::findOrFail($contenido),      

       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Contenido  $Contenido
     * @return \Illuminate\Http\Response
     */
    public function destroy($contenido)
    {
        $contenido=Contenido::findOrFail($contenido);
        $contenido->delete();

        return redirect()->route("contenidos");
    }
}
