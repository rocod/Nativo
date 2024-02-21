@extends('layouts.panel')

@section('content')


<h1 class="h3 mb-2 text-gray-800">Eliminar Imagen carrousel</h1>
                   

                    <!-- Content Row -->
            <div class="row">

                <div class="col-xl-8 col-lg-7">
                   
                    <form method="post" action="{{ route('destroySlide', ['slide'=>$slide->id]) }}" >
                        @csrf
                        @method('DELETE')
                    
                            @if($slide->imagen!="") 
                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Imagen</label>
                        <img width="100" src="/img/comunidad/{{ $slide->imagen }}" />
                        
                      </div>
                      @else

                      @php
                        $video=substr_replace($slide->texto, ' class="VideoSlideMini" ', 8 , 25);
                      @endphp

                       <div class="mb-3">
                        <label for="exampleInputEmail1" class="form-label">Video</label>
                        <div>{!! $video !!}</div>

                      </div>

                      @endif                             
                      
                      <button type="submit" class="btn btn-primary">Eliminar</button>
                    </form>
                   
                    

                </div>

                
            </div>

@endsection
