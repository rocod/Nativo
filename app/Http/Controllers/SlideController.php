<?php

namespace App\Http\Controllers;

use App\Models\Slide;
use App\Http\Requests\StoreSlideRequest;
use App\Http\Requests\UpdateSlideRequest;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class SlideController extends Controller
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

         $slides=DB::table('slide')       
        ->get();

        return view("slide.lista")->with([
            'slides'=>$slides
        ]);
    }

    /**
     * Show the form for creating a new resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function create()
    {
        return view("slide.create");
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  \App\Http\Requests\StoreNovedadRequest  $request
     * @return \Illuminate\Http\Response
     */
    public function grabarSlide(Request $request)
    {
        
        $rules=[
        
        ];
        request()->validate($rules);


        $id=DB::table('slide')->insertGetId(
                ['texto'=>$request->texto]);  
        $slide=DB::table('slide')->where('id', $id)     
        ->first();         

               // dd($slide);   
       

        if(request()->file('imagen')){
                
                $image=request()->file('imagen');
                $nombre= time().'imagen'.'.'.$image->getClientOriginalExtension();
                Image::make(request()->file('imagen'))->fit(1920, 700, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('img/comunidad/'.$nombre);

               // dd($nombre);
                DB::table('slide')->where('id', $id)     
                ->update(array(
                                 'imagen'=>$nombre,
                                 
                                 ));  
               
                

            }


        session()->flash('success', 'La imagen del carrousel fue creada con éxito');
        return redirect()->route("slider");
    }

   
    public function show($slide)
    {
        $slide=DB::table('slide')->where('id', $slide)     
        ->first();
        return view('slide.edit')->with([
        'slide'=>$slide, 
       ]);
    }


     public function borrar($slide)
    {
         $slide=DB::table('slide')->where('id', $slide)     
        ->first();

        return view('slide.borrar')->with([
        'slide'=>$slide,      

       ]);
    }

    public function destroy($slide)
    {
        $slide=DB::table('slide')->where('id', $slide)     
        ->delete();
        

        return redirect()->route("slider");
    }

   

   

}