@extends('layouts.sitio')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
    </div>
    <div class="row  ">
    	<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3">
	    	<div class="fontMerri fSize20">CONOCÉ TODOS LOS CONTENIDOS POR <span class="celeste">EJES TEMÁTICOS</span></div>
	    	<div class="fontClimate fSize45"><span class="celeste"># </span>TEMAS</div>
	    </div>
	</div>

	<div class="container" id="detalleContenido">
			<div class="row azul" id="filtros">

				<div  class="col-12 pt-3 pb-5 ">
					<a class="pointer" onclick="history.back()">VOLVER A FILTROS </a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2>{{ $contenido->titulo}}</h2>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<p>{{ $contenido->resumen}}</p>
				</div>
			</div>
			@if($contenido->id_formato==3 || $contenido->id_formato==4 || $contenido->id_formato==5 )
			<div class="row">
				<div class="col text-center">
					<img width="60%" src="/img/portada/{{ $contenido->portada}}" />
				</div>
			</div>
			@endif
			<div class="row mt-4 mb-4">
				<div class="col">
					 @switch($contenido->id_formato) 
					@case(1)

						@php
							$video=substr_replace($contenido->texto, ' class="videoCont" ', 8 , 25);
						@endphp
			        	<div class="d-flex justify-content-center">{!! $video !!}</div>
			        @break 
			        @case(2)
			        	{!! $contenido->texto !!} 
			        @break 
			        @case(3)
			        	<a class="btn btn-primary" target="_blank" href="/storage/uploads/{{ $contenido->archivo }}" role="button">Descargar archivo</a>
			        @break 
			       @case(4)
			        	{!! nl2br($contenido->texto) !!}
			        @break  
			        @case(5)
			        	<a class="btn btn-primary" target="_blank" href="{{ $contenido->link }} " role="button">Click aquí para acceder</a> 
			        @break
		        @endswitch
				</div>
			</div>
			<div class="row border rounded p-3 border-secondary bggris"><!--ficha-->
				<div class="col p-2">
					<h3>Ficha</h3>
					<p>Publicado: {{ $contenido->created_at }}</p>
					<p>Última modificación: {{ $contenido->updated_at }}</p>
					<div><h4>Eje:</h4> <span class="border rounded p-1 text-bg-secondary">{{ $contenido->ejeNombre }}</span></div>
				</div>
				<div class="col  p-2">
					<div  class="pb-1 mb-2"><h4>Subcategoría:</h4> <span class="border rounded p-1 text-bg-secondary">{{ $contenido->subcategoriaNombre }}</span></div>
					<div  class="pb-1 mb-2"><h4>Nivel:</h4> <span class="border rounded p-1 text-bg-secondary">{{ $contenido->nivelNombre }}</span></div>
					<div  class="pb-1 mb-2"><h4>Formato:</h4> <span class="border rounded p-1 text-bg-secondary">{{ $contenido->formatoNombre }}</span></div>

				</div>
				<div class="col  p-2">
					<div class="pb-1 mb-2"><h4>Autor:</h4> <span class="border rounded p-1 text-bg-secondary">{{ $contenido->autorxNombre  }} {{ $contenido->autorxApellido }}</span></div>
					@if($contenido->contribuyenteNombre)
					<div class="pb-1 mb-2"><h4>Contribuyente:</h4> <span class="border rounded p-1 text-bg-secondary">{{ $contenido->contribuyenteNombre }} {{ $contenido->contribuyenteApellido }}</span></div>
					@endif
					<div class="pb-1 mb-2"><h4>Licencia:</h4> <span class="border rounded p-1 text-bg-secondary">{{ $contenido->licenciaNombre }}</span></div>
				</div>
			</div>
	</div>

</div><!-- fin container fluid-->

@endsection

