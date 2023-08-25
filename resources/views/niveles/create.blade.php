@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Crear  Nivel</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">
                           
                            <form method="post" action="{{ route('grabarNivel') }}" >
                                @csrf
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nombre del Nivel </label>
                                <input class="form-control" name="nombre">
                                
                              </div>
                             
                              
                              <button type="submit" class="btn btn-primary">Agregar</button>
                            </form>
                           
                            

                        </div>

                        
                    </div>

@endsection
