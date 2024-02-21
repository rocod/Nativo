@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Autorxs</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-7">

                            <table class="table table-striped">
                              <thead>
                                <tr>
                                 
                                  <th scope="col">Nombre del Autorx</th>
                                  <th scope="col">Apellido del Autorx</th>
                                  <th scope="col"></th>
                                  <th scope="col"><a title="Agregar autorx" href="/agregarAutorx"><i class="fas  fa-plus fa-lg"></i></a></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($autorxs as $autorx)
                                <tr>                                 
                                  <td>{{ $autorx->nombre }}</td>
                                  <td>{{ $autorx->apellido }}</td>
                                  <td><a title="Editar autorx" href="/showAutorx/{{ $autorx->id }}"><i class="far fa-edit fa-lg"></i></a></td>
                                  <td><a title="Eliminar autorx" href="/borrarAutorx/{{ $autorx->id }}"><i class="fas fa-trash-alt fa-lg"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>

                        </div>

                      
                    </div>

@endsection
