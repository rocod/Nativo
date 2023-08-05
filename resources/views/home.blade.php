@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Contenidos</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">

                            <h4>Agregar un nuevo contenido</h4>

                            <form>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Email address</label>
                                <select class="form-control" aria-label="">
                                  <option selected>Ejes</option>
                                  <option value="1">Eje 1</option>
                                  <option value="2">Eje 2</option>
                                  <option value="3">Eje 3</option>
                                </select>
                                <div id="emailHelp" class="form-text">Seleccione el eje del contenido</div>
                              </div>
                             
                              
                              <button type="submit" class="btn btn-primary">Continuar</button>
                            </form>
                           
                            

                        </div>

                        <!-- Donut Chart -->
                        <div class="col-xl-4 col-lg-5">
                            <div class="card shadow mb-4">
                                <!-- Card Header - Dropdown -->
                                <div class="card-header py-3">
                                    <h6 class="m-0 font-weight-bold text-primary">Ejes con más contenidos</h6>
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
