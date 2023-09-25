@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Editar Novedad</h1>

                    <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                   
                    <form method="post" enctype="multipart/form-data" action="{{ route('editNovedad', ['novedad'=>$novedad->id]) }}" >
                        @csrf
                        @method('PUT')
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Título del Novedad</label>
                        <input class="form-control" name="titulo" value="{{ $novedad->titulo }}">
                        
                      </div>
                             
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Imagen</label>
                        <img width="100" src="/img/comunidad/{{ $novedad->imagen }}" />
                        <input type="file"  class="form-control" name="imagen">
                      </div>

                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Texto</label>
                        <textarea class="form-control" name="texto">{{ $novedad->texto }}</textarea>

                      </div>
                             
                     
                      
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                   
                    

                </div>

                
            </div>

@endsection
