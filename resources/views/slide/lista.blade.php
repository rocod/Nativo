@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Carrousel de imágenes inicio</h1>

                    <!-- Content Row -->
                    <div class="row">

                        <div class="col-xl-8 col-lg-8">
                            <table class="table table-striped">
                              <thead>
                                <tr>
                                  <th scope="col">Contenido (imagen o video)</th>
                                  <th scope="col"><a title="Agregar slide" href="/agregarSlide"><i class="fas  fa-plus fa-lg"></i></a></th>
                                </tr>
                              </thead>
                              <tbody>
                                @foreach($slides as $slide)
                                <tr> 
                                  @if($slide->imagen!="") 
                                 <td><img width="320" src="/img/comunidad/{{ $slide->imagen }}" /></td>       
                                 @else 
                                  @php
                                  $video=substr_replace($slide->texto, ' class="VideoSlide" ', 8 , 25);
                                @endphp                    
                                  <td>{!! $video !!}</td>                                
                                @endif
                                  <td><a title="Eliminar slide" href="/borrarSlide/{{ $slide->id }}"><i class="fas fa-trash-alt fa-lg"></i></a></td>
                                </tr>
                                @endforeach
                              </tbody>
                            </table>                           

                        </div>

                    </div>

@endsection
