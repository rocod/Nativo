@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Crear novedad para Comunidad</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">
                           
                            <form method="post" enctype="multipart/form-data" action="{{ route('grabarNovedad') }}" >
                                @csrf
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Título</label>
                                <input class="form-control" required name="titulo">
                              </div>
                             
                               <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Imagen</label>
                                <input type="file" required class="form-control" name="imagen">
                              </div>

                              <div class="mb-3" id="contTexto">
                                <label for="exampleInputEmail1" class="form-label" id="titTexto">Texto</label>
                                <textarea id="comment" class="form-control" name="texto"></textarea>
                              </div>
                            
                             
                              
                              <button type="submit" class="btn btn-primary">Agregar</button>
                            </form>
                           
                            

                        </div>

                        
                    </div>

@endsection

@section('script')
<script type="text/javascript">
  
  

</script>
/*
 $("#comment").on("keypress", function(event){


    if($(this).val().length == 5){
         return false;
     }                
});*/

</script>

@endsection
