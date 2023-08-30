@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Editar Contenido</h1>
                   

                    <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                   
                    <form method="post" enctype="multipart/form-data" action="{{ route('editContenido', ['contenido'=>$contenido->id]) }}" >
                        @csrf
                        @method('PUT')
                      <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Titulo del Contenido</label>
                        <input class="form-control" name="titulo" value="{{ $contenido->titulo }}">
                        
                      </div>
                      <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Formato</label>
                                <select class="form-control" required name="id_formato" required>
                                    <option value="">Seleccione</option>
                                    @foreach($formatos as $formato)
                                      <option @if($contenido->id_formato== $formato->id) selected @endif value="{{ $formato->id }}">{{ $formato->nombre }}</option>
                                    @endforeach
                                  
                                </select>
                                
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Subcategoría</label>
                                <select class="form-control" name="id_subcategoria" required>
                                    <option value="">Seleccione</option>
                                    @foreach($subcategorias as $subcategoria)
                                      <option  @if($contenido->id_subcategoria== $subcategoria->id) selected @endif value="{{ $subcategoria->id }}">{{ $subcategoria->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Resumen</label>
                                <textarea class="form-control" required name="resumen">{{ $contenido->resumen }}</textarea>
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Texto</label>
                                <textarea class="form-control" name="texto">{{ $contenido->texto }}</textarea>
                              

                              </div>
                               <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Portada (imagen)</label>
                                <img width="100" src="/img/portada/{{ $contenido->portada }}" />
                                <input type="file"  class="form-control" name="portada">
                              </div>
                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Link</label>
                                <input class="form-control" value="{{ $contenido->link }}" name="link">
                              </div>
                               <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Archivo (pdf) @if($contenido->archivo!="")  <a target="_blank" href="/storage/uploads/{{ $contenido->archivo }}">Ver archivo</a> @endif</label>

                                <input type="file" class="form-control" name="archivo">
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Nivel</label>
                                <select class="form-control" name="id_nivel" required>
                                    <option value="">Seleccione</option>
                                    @foreach($niveles as $nivel)
                                      <option  @if($contenido->id_nivel== $nivel->id) selected @endif value="{{ $subcategoria->id }}">{{ $nivel->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Autorx</label>
                                <select required class="form-control" name="id_autor" required>
                                    <option value="">Seleccione</option>
                                    @foreach($autorxs as $autorx)
                                      <option  @if($contenido->id_autor== $autorx->id) selected @endif value="{{ $autorx->id }}">{{ $autorx->nombre }} {{ $autorx->apellido }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Contribuyente</label>
                                <select class="form-control" name="id_contribuyente" >
                                     <option value="">Seleccione</option>
                                      @foreach($contribuyentxs as $contribuyente)
                                      <option value="{{ $contribuyente->id }}">{{ $contribuyente->nombre }} {{ $contribuyente->apellido }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Licencia</label>
                                <select class="form-control" required name="id_licencia" >
                                     <option value="">Seleccione</option>
                                      @foreach($licencias as $licencia)
                                      <option  @if($contenido->id_licencia== $licencia->id) selected @endif value="{{ $licencia->id }}">{{ $licencia->nombre }}</option>
                                    @endforeach                                  
                                </select>                                
                              </div>

                              <div class="mb-3">
                                <label for="exampleInputEmail1" class="form-label">Etiquetas</label>
                                    <div>
                                      @foreach($etiquetas as $etiqueta)
                                      {{ $etiqueta->nombre }} 
                                      <input 
                                      @foreach($etiquetas_cont as $eti)
                                        @if($eti->id_etiqueta== $etiqueta->id)
                                        checked
                                        @endif
                                      @endforeach
                                      type="checkbox" name="etiquetas[]" value="{{ $etiqueta->id }}">  
                                    @endforeach                                  
                                </div>                        

                              </div>
                     
                      
                      <button type="submit" class="btn btn-primary">Editar</button>
                    </form>
                   
                    

                </div>

                
            </div>

@endsection
