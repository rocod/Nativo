@extends('layouts.sitio')

@section('content')


<div class="row ">
		<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3 lqd-column" 	data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
			<div class=" fSize20">MIRÁ LAS ÚLTIMAS PRODUCCIONES SUBIDAS</div>
			<div class="fontClimate fSize45"><span class="celeste"># </span>LO ÚLTIMO</div>
		</div>
	</div>


	<div class="container" id="detalleContenido">
			<div class="row azul" id="filtros">

				<div  class="col-12 pt-3 pb-5 ">
					<a class="pointer" onclick="history.back()">VOLVER</a>
				</div>
			</div>
			<div class="row">
				<div class="col">
					<h2>{{ $novedad->titulo}}</h2>
				</div>
			</div>
			<!--
			<div class="row">
				<div class="col-8 offset-md-2">
					<img width="100%" src="/img/comunidad/{{ $novedad->imagen }}" />
				</div>
			</div>
		-->
	
			<div class="row mt-4 mb-4">
				<div class="col">
					 	

			        	{!! nl2br($novedad->texto) !!}
			       
				</div>
			</div>
	</div>




	
	<div class="row pt-4" >
		<div class="d-flex justify-content-between align-items-center fdoTriang pt-3 pb-3 lqd-column" 	data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
			<div class="fSize20 ">MIRÁ MÁS NOVEDADES</div>
			<div class="fontClimate fSize45 colorazul"><span class="celeste"># </span>COMUNIDAD</div>
		</div>
	</div>
	<div class="container">
		<div class="row pt-5" data-custom-animations="true"
		data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>
		@php $con=1; @endphp
		@foreach($novedades as $novedad)

			@php 
				$resumen = substr($novedad->texto, 0, 400); 
			@endphp
			@if($con!=1)

			<div class="col-lg-4 offset-lg-2 col-md-8 pt-4 pb-3">
				<div class="radius2 py-2 pl-1 ">
					<div class="row">
						<div class="col">
							<img  src="/img/comunidad/{{ $novedad->imagen }}" width="100%" />
							<p class="titNove">{{ $novedad->titulo }}</p>
							<a href="/detalle_novedad/{{ $novedad->id }}"><div class="btn-vermas">VER MÁS +</div></a>
						</div>
						<div class="col-2">
							
						</div>
					</div>
				</div>
			</div>

			@endif
			@php 
			$con++;
			@endphp
		@endforeach	
			
			

		</div>
	</div>

	

@endsection



@section('script')

<script>
    $(document).load(function () {
        $("#adornos").fadeIn('8000');
    });
</script>
@endsection

