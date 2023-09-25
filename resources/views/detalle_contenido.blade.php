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
					<a onclick="history.back()">VOLVER A FILTROS </a>
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
				<div class="col">
					<img width="100%" src="/img/portada/{{ $contenido->portada}}" />
				</div>
			</div>
			@endif
			<div class="row mt-4 mb-4">
				<div class="col">
					 @switch($contenido->id_formato) 
					@case(1)
			        	{!! $contenido->texto !!} 
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
	</div>

</div><!-- fin container fluid-->

@endsection

