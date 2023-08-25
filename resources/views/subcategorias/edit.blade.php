@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Editar Subcategoría</h1>
                   

                    <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                   
                    <form method="post" action="{{ route('editSubcategoria', ['subcategoria'=>$subcategoria->id]) }}" >
                        @csrf
                        @method('PUT')
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre de la Subcategoría </label>
                        <input class="form-control" name="nombre" value="{{ $subcategoria->nombre }}">
                        
                      </div>
                      <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Subcategoría</label>
                                <select class="form-control" name="id_eje" required>
                                    <option value=" ">Seleccione</option>
                                    @foreach($ejes as $eje)
                                    <option @if($subcategoria->id_eje== $eje->id) selected @endif value="{{ $eje->id }}">{{ $eje->nombre }}</option>
                                    @endforeach
                                  
                                </select>
                                
                              </div>
                     
                      
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                   
                    

                </div>

                
            </div>

@endsection
