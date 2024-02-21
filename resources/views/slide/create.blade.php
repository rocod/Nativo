@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Agregar imagen o video al Carrousel</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">
                           
                            <form method="post" enctype="multipart/form-data" action="{{ route('grabarSlide') }}" >
                                @csrf
                              
                             
                               <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Cargar Imagen 1920 x 700 píxeles</label>
                                <input type="file"  class="form-control" name="imagen">
                              </div>

                              <div class="mb-3" id="contTexto">
                                <label for="exampleInputEmail1" class="form-label" id="titTexto">o Cargar código embebido de Youtube</label>
                                <textarea id="comment" class="form-control" name="texto"></textarea>
                              </div>


                              <div class="mb-3" id="contTexto">
                                <label for="exampleInputEmail1" class="form-label" id="titTexto">En caso que se carguen ambos items se mostrará la imagen
                                </label>
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
