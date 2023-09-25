<?php

namespace App\Http\Controllers;

use App\Models\Novedad;
use App\Http\Requests\StoreNovedadRequest;
use App\Http\Requests\UpdateNovedadRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class NovedadController extends Controller
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
        return view("novedades.lista")->with([
            'novedades'=>Novedad::paginate()
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("novedades.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNovedadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarNovedad(Request $request)
    {
        
        $rules=[
        'titulo'=>['required','max:200'],
        'imagen'=>['required'], 
        'texto'=>['required','max:9999'],

        
        ];
        request()->validate($rules);


        $novedad=Novedad::create(request()->all());

        if(request()->file('imagen')){
                
                $image=request()->file('imagen');
                $nombre= time().'imagen'.'.'.$image->getClientOriginalExtension();
                Image::make(request()->file('imagen'))->fit(800, 650, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('img/comunidad/'.$nombre);

                
                $novedad->imagen=$nombre;
                $novedad->save();
                

            }


        session()->flash('success', 'El novedad fue creada con éxito');
        return redirect()->route("novedades");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\tiqueta  $tiqueta
     * @return \Illuminate\Http\Response
     */
    public function show($novedad)
    {

        return view('novedades.edit')->with([
        'novedad'=>Novedad::findOrFail($novedad),      

       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\tiqueta  $tiqueta
     * @return \Illuminate\Http\Response
     */
    public function edit($novedad)
    {
        $rules=[
        'titulo'=>['required','max:200'],
        'imagen'=>['required'], 
        'texto'=>['required','max:9999'],     
        
        ];
        request()->validate($rules);

        $novedad=Novedad::findOrFail($novedad);
        $novedad->update(request()->all());
            
        if(request()->file('imagen')){
            if(file_exists('/img/comunidad/'.$novedad->imagen)){
                unlink('/img/comunidad/'.$novedad->imagen);
            }
            
        }

        if(request()->file('imagen')){

           
                $image=request()->file('imagen');
                $nombre= time().'imagen'.'.'.$image->getClientOriginalExtension();
                Image::make(request()->file('imagen'))->fit(800, 650, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('img/comunidad/'.$nombre);

                
                $novedad->imagen=$nombre;
                $novedad->save();  

             //   dd($novedad);              

        }

        

        return redirect()->route("novedades");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdatNovedadRequest  $request
     * @param  \App\Models\tiqueta  $tiqueta
     * @return \Illuminate\Http\Response
     */
    public function borrar($novedad)
    {
        return view('novedades.borrar')->with([
        'novedad'=>Novedad::findOrFail($novedad),      

       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\tiqueta  $tiqueta
     * @return \Illuminate\Http\Response
     */
    public function destroy($novedad)
    {
        $novedad=Novedad::findOrFail($novedad);
        $novedad->delete();

        return redirect()->route("novedades");
    }
}
