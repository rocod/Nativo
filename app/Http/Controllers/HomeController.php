<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\Eje;
use App\Models\Novedad;
use App\Models\Contenido;
use Illuminate\Support\Facades\DB;

class HomeController extends Controller
{
    /**
     * Create a new controller instance.
     *
     * @return void
     */
    public function __construct()
    {
      //  $this->middleware('auth');
    }

    /**
     * Show the application dashboard.
     *
     * @return \Illuminate\Contracts\Support\Renderable
     */
    public function index()
    {

        $novedades=Novedad::orderBy('created_at', 'DESC')->take(4)->get();

         $slides=DB::table('slide')       
        ->take(5)->get();
       
        return view("inicio")->with([
            'ejes'=>Eje::all(),
            'novedades'=>$novedades,
            'contenido'=>Contenido::orderBy('created_at', 'desc')->first(),
            'slides'=>$slides,


        ]);
    }


    public function detalleNovedad($id_novedad){

         $novedades=Novedad::orderBy('created_at', 'DESC')->take(5)->get();

        return view("detalleNovedad")->with([
            'novedad'=>Novedad::findOrFail($id_novedad),
            'novedades'=>$novedades,

        ]);
    }


    public function comunidad(){

         $novedades=Novedad::orderBy('created_at', 'DESC')
         ->orderBy('novedads.created_at', 'DESC')
         ->paginate(9);

        return view("comunidad")->with([
      
            'novedades'=>$novedades,

        ]);
    }


 public function contacto(){

        
        return view("contacto");
    }

    public function enviarMensaje(Request $request){

         session()->flash('success', 'El mensaje fue enviado con éxito');

          return view("contacto");
    }
}
