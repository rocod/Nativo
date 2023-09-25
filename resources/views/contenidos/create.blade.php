@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Crear nuevo contenido</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">
                           
                            <form method="post" enctype="multipart/form-data" action="{{ route('grabarContenido') }}" >
                                @csrf
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Título</label>
                                <input class="form-control" required name="titulo">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Formato</label>
                                <select class="form-control" id="id_formato" required name="id_formato" required>
                                    <option value="">Seleccione</option>
                                    @foreach($formatos as $formato)
                                      <option value="{{ $formato->id }}">{{ $formato->nombre }}</option>
                                    @endforeach
                                  
                                </select>
                                
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Eje</label>
                                <select class="form-control" id="id_eje" name="id_eje" required>
                                    <option value="">Seleccione</option>
                                    @foreach($ejes as $eje)
                                      <option value="{{ $eje->id }}">{{ $eje->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Subcategoría</label>
                                <select class="form-control" name="id_subcategoria" id="id_subcategoria" required>
                                    <option value="">Seleccione</option>
                                    @foreach($subcategorias as $subcategoria)
                                      <option value="{{ $subcategoria->id }}">{{ $subcategoria->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Resumen</label>
                                <textarea class="form-control" required name="resumen"></textarea>
                              </div>
                              
                               <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Portada (imagen)</label>
                                <input type="file" required class="form-control" name="portada">
                              </div>

                              <div class="mb-3" id="contTexto">
                                <label for="exampleInputEmail1" class="form-label" id="titTexto">Texto</label>
                                <textarea id="comment" class="form-control" name="texto"></textarea>
                              </div>
                              <div class="mb-3" id="contLink">
                                <label for="exampleInputEmail1" class="form-label">Link</label>
                                <input class="form-control" name="link">
                              </div>
                               <div class="mb-3" id="contArchivo">
                                <label for="exampleInputEmail1" class="form-label">Archivo (pdf)</label>
                                <input type="file" class="form-control" name="archivo">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nivel</label>
                                <select class="form-control" name="id_nivel" required>
                                    <option value="">Seleccione</option>
                                    @foreach($niveles as $nivel)
                                      <option value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Autorx</label>
                                <select required class="form-control" name="id_autor" required>
                                    <option value="">Seleccione</option>
                                    @foreach($autorxs as $autorx)
                                      <option value="{{ $autorx->id }}">{{ $autorx->nombre }} {{ $autorx->apellido }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Contribuyente</label>
                                <select class="form-control" name="id_contribuyente" >
                                     <option value="">Seleccione</option>
                                      @foreach($contribuyentxs as $contribuyente)
                                      <option value="{{ $contribuyente->id }}">{{ $contribuyente->nombre }} {{ $contribuyente->apellido }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Licencia</label>
                                <select class="form-control" required name="id_licencia" >
                                     <option value="">Seleccione</option>
                                      @foreach($licencias as $licencia)
                                      <option value="{{ $licencia->id }}">{{ $licencia->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Etiquetas</label>
                                    <div>
                                      @foreach($etiquetas as $etiqueta)
                                      {{ $etiqueta->nombre }} <input type="checkbox" name="etiquetas[]" value="{{ $etiqueta->id }}">  
                                    @endforeach                                  
                                </div>                        

                              </div>

                             
                              
                              <button type="submit" class="btn btn-primary">Agregar</button>
                            </form>
                           
                            

                        </div>

                        
                    </div>

@endsection

@section('script')
<script type="text/javascript">
  
  $("#contTexto").hide();
  $("#contLink").hide();
  $("#contArchivo").hide();

  $('#id_formato').on('change', function(){

  $value=$(this).val();

  

  if($value==1){//audiovisual
   


    $("#contTexto").show();
   
    $("#titTexto").html('Pegar el código para embeber HTML </>  de Youtube u otra plataforma');

     $("#contLink").hide();
     $("#contArchivo").hide();

  }

  if($value==2){//podcst
   


    $("#contTexto").show();
   
    $("#titTexto").html('Pegar el código para embeber HTML </> de Spotify u otra plataforma');

     $("#contLink").hide();
     $("#contArchivo").hide();

  }



  if($value==3){//Archivo Pdf
   


    $("#contTexto").hide();
   
    //$("#titTexto").html('Pegar el código para embeber </>  de Youtube');

     $("#contLink").hide();
     $("#contArchivo").show();

  }

if($value==4){//texto
   


    $("#contTexto").show();
   
    $("#titTexto").html('Ingresá el texto completo');

     $("#contLink").hide();
     $("#contArchivo").hide();

  }

  if($value==5){//link web
   


    $("#contTexto").hide();
   
    $("#titTexto").html('Ingresá el texto completo');

     $("#contLink").show();
     $("#contArchivo").hide();

  }




});

$('#id_eje').on('change', function(){


  $value=$(this).val();
    $.ajax({
    type : 'get',
    url : '{{URL::to('buscar_subcategoria')}}/'+$value,
    //data:{'localidad':$value},
    success:function(data){
    $('#id_subcategoria').html(data);
    }
    });

})
</script>
/*
 $("#comment").on("keypress", function(event){


    if($(this).val().length == 5){
         return false;
     }                
});*/

</script>

@endsection
