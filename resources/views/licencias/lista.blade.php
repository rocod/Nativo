@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Licencias</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">

                            <table class="table table-striped">
                              <thead>
                                <tr>
                                 
                                  <th scope="col">Nombre del Licencia</th>
                                  <th scope="col"></th>
                                  <th scope="col"><a title="Agregar Licencia" href="/agregarLicencia"><i class="fas  fa-plus fa-lg"></i></a></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($licencias as $licencia)
                                <tr>                                 
                                  <td>{{ $licencia->nombre }}</td>
                                  <td><a title="Editar Licencia" href="/showLicencia/{{ $licencia->id }}"><i class="far fa-edit fa-lg"></i></a></td>
                                  <td><a title="Eliminar Licencia" href="/borrarLicencia/{{ $licencia->id }}"><i class="fas fa-trash-alt fa-lg"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>

                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Licencias con más contenidos</h6>
                                </div>
                                <!-- Card Body -->
                                <div class="card-body">
                                    <div class="chart-pie pt-4">
                                        <canvas id="myPieChart"></canvas>
                                    </div>
                                    <hr>
                                    
                                </div>
                            </div>
                        </div>
                    </div>

@endsection
