@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Contenidos</h1>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-12">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Portada</th>
                                  <th scope="col">Nombre del Contenido</th>   
                                  <th scope="col">Tipo de contenido</th>
                                  <th scope="col">Subcategoría</th>
                                  <th scope="col"></th>
                                  <th scope="col"><a title="Agregar Contenidos" href="/agregarContenido"><i class="fas  fa-plus fa-lg"></i></a></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($contenidos as $contenido)
                                <tr>  
                                 <td><img width="80" src="/img/portada/{{ $contenido->portada }}" /></td>                               
                                  <td>{{ $contenido->titulo }}</td>
                                  <td>{{ $contenido->formatoNombre }}</td>
                                  <td>{{ $contenido->subcategoriaNombre }}</td>
                                  <td><a title="Editar Contenido" href="/showContenido/{{ $contenido->id }}"><i class="far fa-edit fa-lg"></i></a></td>
                                  <td><a title="Eliminar Contenido" href="/borrarContenido/{{ $contenido->id }}"><i class="fas fa-trash-alt fa-lg"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>

                        </div>

                    </div>

@endsection
