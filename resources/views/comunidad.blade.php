@extends('layouts.sitio')

@section('content')




<div class="row ">
		<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3 lqd-column" 	data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
			<div class=" fSize20">IDEAS, TIPS y HERRAMIENTAS</div>
			<div class="fontClimate fSize45"><span class="celeste"># </span>COMUNIDAD</div>
		</div>
	</div>
	
	
	<div class="container" id="NovWeb">
		<div class="row pt-5" data-custom-animations="true"
		data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>
	
		@foreach($novedades as $novedad)

			@php 
				$resumen = substr($novedad->texto, 0, 400); 
			@endphp
			

			<div class="col-4 p-2">
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

		@endforeach	

		<div class="row"> 
			<div class="col text-center">
				{{ $novedades->links() }}
			</div>
		</div>
			
			

		</div>
	</div>


	<div class="container" id="NovMov">
		
		
		@foreach($novedades as $novedad)

			@php 
				$resumen = substr($novedad->texto, 0, 400); 
			@endphp
			
			<div class="row pt-5" >
			<div class="col">
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
			</div>

			
		@endforeach	
		
		
	</div>


	

@endsection



@section('script')

<script>
    $(document).load(function () {
        $("#adornos").fadeIn('8000');
    });
</script>
@endsection

