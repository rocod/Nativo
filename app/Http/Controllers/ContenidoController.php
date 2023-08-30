<?php

namespace App\Http\Controllers;

use App\Models\Contenido;
use App\Http\Requests\StoreContenidoRequest;
use App\Http\Requests\UpdateContenidoRequest;
use App\Models\Subcategoria;
use App\Models\Nivel;
use App\Models\Eje;
use App\Models\Formato;
use App\Models\Etiqueta;
use App\Models\Autorx;
use App\Models\Contribuyente;
use App\Models\Licencia;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\DB;
use Intervention\Image\Facades\Image;
use Illuminate\Support\Facades\Storage;

class ContenidoController extends Controller
{

    public function __construct()
    {
        $this->middleware('auth')->except(['ver_contenidos', 'buscarSubcategoria', 'detalleContenido']);
    }


    public function ver_contenidos(Request $request, $id_eje=0, $id_subcategoria=0, $id_nivel=0, $id_formato=0, $id_etiqueta=0, $id_autor=0, $id_contribuyente=0, $id_licencia=0)
    {

       $id_eje=(int)$request->id_eje;       

       $id_subcategoria=(int)$request->id_subcategoria;


        $contenidos= DB::table('contenidos')
        ->LeftJoin('subcategorias' ,'contenidos.id_subcategoria', 'subcategorias.id')
        ->LeftJoin('nivels' ,'contenidos.id_nivel', 'nivels.id')
        ->LeftJoin('formatos' ,'contenidos.id_formato', 'formatos.id')
       
        ->LeftJoin('autorxes' ,'contenidos.id_autor', 'autorxes.id')
        ->LeftJoin('licencias' ,'contenidos.id_licencia', 'licencias.id')
        ->LeftJoin('contribuyentes' ,'contenidos.id_contribuyente', 'contribuyentes.id')
       /* ->when($id_eje, function($query, $id_eje){
                    return $query->whereIn('contenidos.id_subcategoria', ( DB::table('subcategorias')->where('subcategorias.id_eje', $id_eje)->select('subcategorias.id_eje')->get() ));
                })*/
        ->when($id_subcategoria, function($query, $id_subcategoria){
                    return $query->where('contenidos.id_subcategoria','=', $id_subcategoria);
                })
        ->when($id_nivel, function($query, $id_nivel){
                    return $query->where('contenidos.id_nivel','=', $id_nivel);
                })
        ->when($id_formato, function($query, $id_formato){
                    return $query->where('contenidos.id_formato','=', $id_formato);
                })
        ->when($id_etiqueta, function($query, $id_etiqueta){
                    return $query->where('contenidos.id_etiqueta','=', $id_etiqueta);
                })
        ->when($id_autor, function($query, $id_autor){
                    return $query->where('contenidos.id_autor','=', $id_autor);
                })
        ->when($id_contribuyente, function($query, $id_contribuyente){
                    return $query->where('contenidos.id_contribuyente','=', $id_contribuyente);
                })
        ->when($id_licencia, function($query, $id_licencia){
                    return $query->where('contenidos.id_licencia','=', $id_licencia);
                })

        ->select('contenidos.*',
            'subcategorias.nombre as subcategoriaNombre',
            'nivels.nombre as nivelNombre',
            'formatos.nombre as formatoNombre',
           
            'autorxes.nombre as autorxNombre',
            'licencias.nombre as licenciaNombre',
            'contribuyentes.nombre as contribuyenteNombre')
        ->paginate(7);

        

        return view("contenidos")->with([
            'contenidos'=>$contenidos,
            'ejes'=>Eje::all(),
            'subcategorias'=>Subcategoria::all(),
            'niveles'=>Nivel::all(),
            'formatos'=>Formato::all(),
            'etiquetas'=>Etiqueta::all(),
            'autorxs'=>Autorx::all(),
            'contribuyentxs'=>Contribuyente::all(),
            'licencias'=>Licencia::all(),

        ]);
         


    }

    public function detalleContenido($id_contenido){

        $contenido= DB::table('contenidos')
        ->LeftJoin('subcategorias' ,'contenidos.id_subcategoria', 'subcategorias.id')
        ->LeftJoin('nivels' ,'contenidos.id_nivel', 'nivels.id')
        ->LeftJoin('formatos' ,'contenidos.id_formato', 'formatos.id')
       
        ->LeftJoin('autorxes' ,'contenidos.id_autor', 'autorxes.id')
        ->LeftJoin('licencias' ,'contenidos.id_licencia', 'licencias.id')
        ->LeftJoin('contribuyentes' ,'contenidos.id_contribuyente', 'contribuyentes.id')
        ->where('contenidos.id', $id_contenido)
        ->select('contenidos.*',
            'subcategorias.nombre as subcategoriaNombre',
            'nivels.nombre as nivelNombre',
            'formatos.nombre as formatoNombre',
           
            'autorxes.nombre as autorxNombre',
            'licencias.nombre as licenciaNombre',
            'contribuyentes.nombre as contribuyenteNombre')
        ->first();

        $etiquetas_cont=DB::table('contenido_etiqueta')->where('id_contenido', $contenido->id)->get();


        return view('detalle_contenido')->with([
        'contenido'=>$contenido,       
        'etiquetas_cont'=>$etiquetas_cont,


       ]);

    }

    public function buscarSubcategoria(Request $request){      
       

        $subcategorias=DB::table('subcategorias')            
            ->where('id_eje', $request->id_eje)->get();
           


        if($request->ajax())
        {          
            
            $output="";
           // $id_serv=$request->id_servicioPenitenciario;
            
                
                    
            $output.='<option value="">+</option>';

            foreach($subcategorias as $subcat){
                $output.='<option value="'.$subcat->id.'">'.$subcat->nombre.'</option>';

            }

            
            return Response($output);
        }

    }




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
       
        ->LeftJoin('autorxes' ,'contenidos.id_autor', 'autorxes.id')
        ->LeftJoin('licencias' ,'contenidos.id_licencia', 'licencias.id')
        ->LeftJoin('contribuyentes' ,'contenidos.id_contribuyente', 'contribuyentes.id')

        ->select('contenidos.*',
            'subcategorias.nombre as subcategoriaNombre',
            'nivels.nombre as nivelNombre',
            'formatos.nombre as formatoNombre',
           
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
        'titulo'=>['required','max:300'], 
        'id_subcategoria'=>['required'],  
        'id_formato'=>['required'],     
        'portada'=>['required'],  
        'id_nivel'=>['required'],  
        'id_autor'=>['required'],  
         'archivo'=>['mimes:pdf', 'nullable']
        
        ];
        request()->validate($rules);

        //dd($request->etiquetas);

        $contenido=Contenido::create(request()->all());
       // dd($contenido);

        if(request()->file('portada')){
                
                $image=request()->file('portada');
                $nombre= time().'portada'.'.'.$image->getClientOriginalExtension();
                Image::make(request()->file('portada'))->fit(1200, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('img/portada/'.$nombre);

                
                $contenido->portada=$nombre;
                $contenido->save();
                

            }

          if(request()->file('archivo')){ 

            $fileName = $request->archivo->getClientOriginalName();
            $filePath = 'uploads/' . $fileName;
 
            $path = Storage::disk('public')->put($filePath, file_get_contents($request->archivo));
            $path = Storage::disk('public')->url($path); 

            $contenido->archivo=$fileName;
            $contenido->save();

          }

         // dd($request->etiquetas);
        if($request->etiquetas){
            foreach($request->etiquetas as $etiqueta) {
                DB::table('contenido_etiqueta')->insert([
                                    ['id_contenido'=>$contenido->id, 'id_etiqueta'=>$etiqueta]
                                     ]);

            }
        }

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

         $contenido= DB::table('contenidos')
        ->LeftJoin('subcategorias' ,'contenidos.id_subcategoria', 'subcategorias.id')
        ->LeftJoin('nivels' ,'contenidos.id_nivel', 'nivels.id')
        ->LeftJoin('formatos' ,'contenidos.id_formato', 'formatos.id')
       
        ->LeftJoin('autorxes' ,'contenidos.id_autor', 'autorxes.id')
        ->LeftJoin('licencias' ,'contenidos.id_licencia', 'licencias.id')
        ->LeftJoin('contribuyentes' ,'contenidos.id_contribuyente', 'contribuyentes.id')
        ->where('contenidos.id', $contenido)
        ->select('contenidos.*',
            'subcategorias.nombre as subcategoriaNombre',
            'nivels.nombre as nivelNombre',
            'formatos.nombre as formatoNombre',
           
            'autorxes.nombre as autorxNombre',
            'licencias.nombre as licenciaNombre',
            'contribuyentes.nombre as contribuyenteNombre')
        ->first();

        $etiquetas_cont=DB::table('contenido_etiqueta')->where('id_contenido', $contenido->id)->get();

        return view('contenidos.edit')->with([
        'contenido'=>$contenido,
        'subcategorias'=>Subcategoria::all(),
        'niveles'=>Nivel::all(),
        'formatos'=>Formato::all(),
        'etiquetas'=>Etiqueta::all(),
        'autorxs'=>Autorx::all(),
        'contribuyentxs'=>Contribuyente::all(),
        'licencias'=>Licencia::all(),
        'etiquetas_cont'=>$etiquetas_cont,


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
        'titulo'=>['required','max:300'], 
        'id_subcategoria'=>['required'],  
        'id_formato'=>['required'],     
       
        'id_nivel'=>['required'],  
        'id_autor'=>['required'],  
        
        ];
        request()->validate($rules);
        
        $contenido=Contenido::findOrFail($contenido);
        if(request()->file('portada')){
            if(file_exists('/img/portada/'.$contenido->portada)){
                unlink('/img/portada/'.$contenido->portada);
            }
            
        }
        if(request()->file('archivo')){
            if(file_exists('/storage/uploads/'.$contenido->archivo)){
                unlink('/storage/uploads/'.$contenido->archivo);
            }
            
        }

        $contenido->update(request()->all());


        if(request()->file('portada')){

            //borramos el archivo anterior


                $image=request()->file('portada');
                $nombre= time().'portada'.'.'.$image->getClientOriginalExtension();
                Image::make(request()->file('portada'))->fit(1200, 400, function ($constraint) {
                    $constraint->aspectRatio();
                })->save('img/portada/'.$nombre);

                
                $contenido->portada=$nombre;
                $contenido->save();                

        }

        if(request()->file('archivo')){ 

            $fileName = request()->archivo->getClientOriginalName();
            $filePath = '/uploads/' . $fileName;
 
            $path = Storage::disk('public')->put($filePath, file_get_contents(request()->archivo));
            $path = Storage::disk('public')->url($path); 

            $contenido->archivo=$fileName;
            $contenido->save();

          }

        DB::table('contenido_etiqueta')->where('id_contenido', $contenido->id)->delete();    

    if(request()->etiquetas){
        foreach(request()->etiquetas as $etiqueta) {
            DB::table('contenido_etiqueta')->insert([
                                ['id_contenido'=>$contenido->id, 'id_etiqueta'=>$etiqueta]
                                 ]);

        }
    }
        session()->flash('success', 'El contenido se actualizó con éxito');

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
        $contenido= DB::table('contenidos')
        ->LeftJoin('subcategorias' ,'contenidos.id_subcategoria', 'subcategorias.id')
        ->LeftJoin('nivels' ,'contenidos.id_nivel', 'nivels.id')
        ->LeftJoin('formatos' ,'contenidos.id_formato', 'formatos.id')
       
        ->LeftJoin('autorxes' ,'contenidos.id_autor', 'autorxes.id')
        ->LeftJoin('licencias' ,'contenidos.id_licencia', 'licencias.id')
        ->LeftJoin('contribuyentes' ,'contenidos.id_contribuyente', 'contribuyentes.id')
        ->where('contenidos.id', $contenido)
        ->select('contenidos.*',
            'subcategorias.nombre as subcategoriaNombre',
            'nivels.nombre as nivelNombre',
            'formatos.nombre as formatoNombre',
           
            'autorxes.nombre as autorxNombre',
            'licencias.nombre as licenciaNombre',
            'contribuyentes.nombre as contribuyenteNombre')
        ->first();

        $etiquetas_cont=DB::table('contenido_etiqueta')->where('id_contenido', $contenido->id)->get();

        return view('contenidos.borrar')->with([
        'contenido'=>$contenido,
        'subcategorias'=>Subcategoria::all(),
        'niveles'=>Nivel::all(),
        'formatos'=>Formato::all(),
        'etiquetas'=>Etiqueta::all(),
        'autorxs'=>Autorx::all(),
        'contribuyentxs'=>Contribuyente::all(),
        'licencias'=>Licencia::all(),
        'etiquetas_cont'=>$etiquetas_cont,


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

        DB::table('contenido_etiqueta')->where('id_contenido', $contenido->id)->delete();

        $contenido->delete();

        session()->flash('success', 'El contenido fue eliminado con éxito');
        return redirect()->route("contenidos");
    }
}
