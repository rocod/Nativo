@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Editar Etiqueta</h1>
                   

                    <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                   
                    <form method="post" action="{{ route('editEtiqueta', ['etiqueta'=>$etiqueta->id]) }}" >
                        @csrf
                        @method('PUT')
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre del Etiqueta </label>
                        <input class="form-control" name="nombre" value="{{ $etiqueta->nombre }}">
                        
                      </div>
                     
                      
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                   
                    

                </div>

                
            </div>

@endsection
