<?php

namespace App\Http\Controllers;

use App\Models\Autorx;
use App\Http\Requests\StoreAutorxRequest;
use App\Http\Requests\UpdateAutorxRequest;
use Illuminate\Http\Request;

class AutorxController extends Controller
{
    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
     public function index()
    {
        return view("autorxs.lista")->with([
            'autorxs'=>Autorx::all(),
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("autorxs.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreAutorxRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarAutorx(Request $request)
    {
        
        $rules=[
        'nombre'=>['required','max:100'],
        'apellido'=>['required','max:100'],      
        
        ];
        request()->validate($rules);


        $autorx=Autorx::create(request()->all());

        session()->flash('success', 'El Autorx fue creado con éxito');
        return redirect()->route("autorxs");
    }

    /**
     * Display the specified resource.
     *
     * @param  \App\Models\Autorx  $Autorx
     * @return \Illuminate\Http\Response
     */
    public function show($autorx)
    {

        return view('autorxs.edit')->with([
        'autorx'=>Autorx::findOrFail($autorx),      

       ]);
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  \App\Models\Autorx  $Autorx
     * @return \Illuminate\Http\Response
     */
    public function edit($autorx)
    {
        $rules=[
        'nombre'=>['required','max:100'],  
        'apellido'=>['required','max:100'],      
        
        ];
        request()->validate($rules);

        $autorx=Autorx::findOrFail($autorx);
        $autorx->update(request()->all());

        return redirect()->route("autorxs");
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  \App\Http\Requests\UpdateAutorxRequest  $request
     * @param  \App\Models\Autorx  $Autorx
     * @return \Illuminate\Http\Response
     */
    public function borrar($autorx)
    {
        return view('autorxs.borrar')->with([
        'autorx'=>Autorx::findOrFail($autorx),      

       ]);
    }

    /**
     * Remove the specified resource from storage.
     *
     * @param  \App\Models\Autorx  $Autorx
     * @return \Illuminate\Http\Response
     */
    public function destroy($autorx)
    {
        $autorx=Autorx::findOrFail($autorx);
        $autorx->delete();

        return redirect()->route("autorxs");
    }
}
