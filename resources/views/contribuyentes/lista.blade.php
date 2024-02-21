@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Contribuyentes</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-7">

                            <table class="table table-striped">
                              <thead>
                                <tr>
                                 
                                  <th scope="col">Nombre del Contribuyente</th>
                                  <th scope="col">Apellido del Contribuyente</th>
                                  <th scope="col"></th>
                                  <th scope="col"><a title="Agregar Contribuyente" href="/agregarContribuyente"><i class="fas  fa-plus fa-lg"></i></a></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($contribuyentes as $contribuyente)
                                <tr>                                 
                                  <td>{{ $contribuyente->nombre }}</td>
                                  <td>{{ $contribuyente->apellido }}</td>
                                  <td><a title="Editar Contribuyente" href="/showContribuyente/{{ $contribuyente->id }}"><i class="far fa-edit fa-lg"></i></a></td>
                                  <td><a title="Eliminar Contribuyente" href="/borrarContribuyente/{{ $contribuyente->id }}"><i class="fas fa-trash-alt fa-lg"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>

                        </div>

                      
                    </div>

@endsection
