@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Comunidad</h1>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-12">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Imagen</th>
                                  <th scope="col">Titulo</th>   
                                  
                                  <th scope="col"></th>
                                  <th scope="col"><a title="Agregar novedad" href="/agregarNovedad"><i class="fas  fa-plus fa-lg"></i></a></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($novedades as $novedad)
                                <tr>  
                                 <td><img width="80" src="/img/comunidad/{{ $novedad->imagen }}" /></td>                               
                                  <td>{{ $novedad->titulo }}</td>
                                
                                  <td><a title="Editar novedad" href="/showNovedad/{{ $novedad->id }}"><i class="far fa-edit fa-lg"></i></a></td>
                                  <td><a title="Eliminar novedad" href="/borrarNovedad/{{ $novedad->id }}"><i class="fas fa-trash-alt fa-lg"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>


                            <div class="row"> 
                              <div class="col text-center">
                                {{ $novedades->links() }}
                              </div>
                            </div>

                        </div>

                    </div>

@endsection
