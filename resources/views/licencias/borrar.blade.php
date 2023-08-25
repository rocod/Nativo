@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Eliminar Licencia</h1>
                   

                    <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                   
                    <form method="post" action="{{ route('destroyLicencia', ['licencia'=>$licencia->id]) }}" >
                        @csrf
                        @method('DELETE')
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Nombre del Licencia </label>
                        <input disabled class="form-control" name="nombre" value="{{ $licencia->nombre }}">
                        
                      </div>
                     
                      
                      <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form>
                   
                    

                </div>

                
            </div>

@endsection
