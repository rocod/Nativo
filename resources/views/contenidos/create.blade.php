@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Crear nuevo contenido</h1>
                   

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-7">
                           
                            <form method="post" enctype="multipart/form-data" action="{{ route('grabarContenido') }}" >
                                @csrf
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Título</label>
                                <input class="form-control" name="titulo">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Formato</label>
                                <select class="form-control" name="id_formato" required>
                                    <option value=" ">Seleccione</option>
                                    @foreach($formatos as $formato)
                                      <option value="{{ $formato->id }}">{{ $formato->nombre }}</option>
                                    @endforeach
                                  
                                </select>
                                
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Subcategoría</label>
                                <select class="form-control" name="id_subcategoria" required>
                                    <option value=" ">Seleccione</option>
                                    @foreach($subcategorias as $subcategoria)
                                      <option value="{{ $subcategoria->id }}">{{ $subcategoria->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Resumen</label>
                                <textarea class="form-control" name="resumen"></textarea>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Texto</label>
                                <textarea class="form-control" name="texto"></textarea>
                              </div>
                               <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Portada (imagen)</label>
                                <input type="file" class="form-control" name="portada">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Link</label>
                                <input class="form-control" name="link">
                              </div>
                               <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Archivo (pdf)</label>
                                <input type="file" class="form-control" name="archivo">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nivel</label>
                                <select class="form-control" name="id_nivel" required>
                                    <option value=" ">Seleccione</option>
                                    @foreach($niveles as $nivel)
                                      <option value="{{ $subcategoria->id }}">{{ $nivel->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Autorx</label>
                                <select class="form-control" name="id_autor" required>
                                    <option value=" ">Seleccione</option>
                                    @foreach($autorxs as $autorx)
                                      <option value="{{ $autorx->id }}">{{ $autorx->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Contribuyente</label>
                                <select class="form-control" name="id_contribuyente" required>
                                     <option value=" ">Seleccione</option>
                                      @foreach($contribuyentxs as $contribuyente)
                                      <option value="{{ $contribuyente->id }}">{{ $contribuyente->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>
                             
                              
                              <button type="submit" class="btn btn-primary">Agregar</button>
                            </form>
                           
                            

                        </div>

                        
                    </div>

@endsection
