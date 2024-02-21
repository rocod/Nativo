@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Ejes</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-7">

                            <table class="table table-striped">
                              <thead>
                                <tr>
                                 
                                  <th scope="col">Nombre del Eje</th>
                                  <th scope="col"></th>
                                  <th scope="col"><a title="Agregar Eje" href="/agregarEje"><i class="fas  fa-plus fa-lg"></i></a></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($ejes as $eje)
                                <tr>                                 
                                  <td>{{ $eje->nombre }}</td>
                                  <td><a title="Editar Eje" href="/showEje/{{ $eje->id }}"><i class="far fa-edit fa-lg"></i></a></td>
                                  <td><a title="Eliminar Eje" href="/borrarEje/{{ $eje->id }}"><i class="fas fa-trash-alt fa-lg"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>

                        </div>

                       
                    </div>

@endsection
