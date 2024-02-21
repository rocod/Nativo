@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Subcategorias</h1>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-12 col-lg-7">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                 
                                  <th scope="col">Nombre del subcategoria</th>
                                  <th scope="col">Eje</th>
                                  <th scope="col"></th>
                                  <th scope="col"><a title="Agregar subcategoria" href="/agregarSubcategoria"><i class="fas  fa-plus fa-lg"></i></a></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($subcategorias as $subcategoria)
                                <tr>                                 
                                  <td>{{ $subcategoria->nombre }}</td>
                                  <td>{{ $subcategoria->ejeNombre }}</td>
                                  <td><a title="Editar subcategoria" href="/showSubcategoria/{{ $subcategoria->id }}"><i class="far fa-edit fa-lg"></i></a></td>
                                  <td><a title="Eliminar subcategoria" href="/borrarSubcategoria/{{ $subcategoria->id }}"><i class="fas fa-trash-alt fa-lg"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>

                        </div>

                        <!-- Donut Chart -->
                      
                    </div>

@endsection
