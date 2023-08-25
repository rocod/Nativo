@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Editar Autorx</h1>
                   

                    <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                   
                    <form method="post" action="{{ route('editAutorx', ['autorx'=>$autorx->id]) }}" >
                        @csrf
                        @method('PUT')
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre del Autorx </label>
                        <input class="form-control" name="nombre" value="{{ $autorx->nombre }}">
                        
                      </div>

                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Apellido del Autorx </label>
                        <input class="form-control" name="apellido" value="{{ $autorx->apellido }}">
                        
                      </div>
                     
                      
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                   
                    

                </div>

                
            </div>

@endsection
