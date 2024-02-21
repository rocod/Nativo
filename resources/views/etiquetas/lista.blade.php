@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Etiquetas</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-7">

                            <table class="table table-striped">
                              <thead>
                                <tr>
                                 
                                  <th scope="col">Nombre del Etiqueta</th>
                                  <th scope="col"></th>
                                  <th scope="col"><a title="Agregar Etiqueta" href="/agregarEtiqueta"><i class="fas  fa-plus fa-lg"></i></a></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($etiquetas as $etiqueta)
                                <tr>                                 
                                  <td>{{ $etiqueta->nombre }}</td>
                                  <td><a title="Editar Etiqueta" href="/showEtiqueta/{{ $etiqueta->id }}"><i class="far fa-edit fa-lg"></i></a></td>
                                  <td><a title="Eliminar Etiqueta" href="/borrarEtiqueta/{{ $etiqueta->id }}"><i class="fas fa-trash-alt fa-lg"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>

                        </div>

                       
                    </div>

@endsection
