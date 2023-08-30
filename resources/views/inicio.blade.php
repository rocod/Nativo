@extends('layouts.sitio')

@section('content')

<div class="lqd-particles-bg-wrap" style="position: absolute; top:30%; width: 100%; height: 100%; z-index: 5">
	<div class="ld-particles-container">
		<div
		class="ld-particles-inner"
		id="particles-1559739661542-e9d04c39-a9eb"
		data-particles="true"
		data-particles-options='{"particles":{"number":{"value":4}, "color":{"value":["#f9ad9b", "#079dd8", "#fc9127"]}, "shape":{"type":["circle"]}, "opacity":{"random":true, "anim":{"enable":true, "opacity_min":0.80000000000000004, "speed":1, "sync":true}}, "size":{"value":6, "random":true, "anim":{"enable":true, "size_min":52}}, "move":{"enable":true, "direction":"none", "speed":1, "random":true, "out_mode":"out"}}, "interactivity":[]}'>
		</div><!-- /.ld-particles-inner -->
	</div><!-- /.ld-particles-container -->
</div><!-- /.lqd-particles-bg-wrap -->

<div class="row fondoInicio">
	<div class="col">
		<div class="row">
			<div class="lqd-column col-md-4"
						data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"2000", "delay":"160", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":30, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>			
				<img class="lineaArri" src="/img/lineacelestearr.png" alt="Linea ornamental" />			
			</div>
		</div>
		<div class="row">
			<div class="col text-center lqd-column" 
						data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
				<img class="titPlatCont" src="/img/plataformaContenidos.png" />
			</div>
		</div>
		<div class="row" >
			<div class="lqd-column col-3 offset-9 text-end" data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>			
				<img width="100%" class="lineaTur" src="/img/lineaTurquesa.png" alt="Linea ornamental" />			
			</div>
		</div>
	</div>
	<div class="row" id="adornos" >
		<div class="adorno1 w3-animate-opacity">
			<img class="w3-animate-opacity" src="/img/adorno1.png" />
		</div>
		<div class="adorno2">
			<img src="/img/adorno2.png" />
		</div>
		<div class="adorno3">
			<img src="/img/adorno3.png" />
		</div>
		<div class="adorno4">
			<img src="/img/adorno4.png" />
		</div>
	</div>
</div>
</div>

<div class="row ">
	<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3 lqd-column" data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
		<div class=" fSize20">CONOCÉ TODOS LOS CONTENIDOS POR <span class="celeste">EJES TEMÁTICOS</span></div>
		<div class="fontClimate fSize45"><span class="celeste"># </span>TEMAS</div>
	</div>
</div>


<div
		class="row mt-5 mb-5 text-center"
		data-custom-animations="true"
		data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>

		@foreach($ejes as $eje)

			<div class="lqd-column col-md-3 @switch($eje->nombre) 
					@case('Biotecnología')
			        	bgceleste
			        @break 
			        @case('Educación')
			        	bgfucsia
			        @break 
			        @case('Tecnología e Ingeniería')
			        	bgnaranja
			        @break 
			        @case('Salud Comunitaria')
			        	bgturquesa
			        @break  
		        @endswitch">
		        <h4 class="titTarjetas mt-4">{{ $eje->nombre }}</h4>
				<div class="row">
					<div class="col pb-3">
						<img width="50" src="/img/viborita.png" />
					</div>
				</div>
				<div class="row">
					<div class="col px-5 py-2">
						<img width="100%" src="/img/ejemplo1.png" width="" />
					</div>
				</div>
				<div class="row">
					<div class="col pb-3">
						<img width="50" src="/img/viborita.png" />
					</div>
				</div>
				<div class="row">
					<div class="col pb-3">
						<a href="/ver_contenidos?id_eje={{ $eje->id }}"  ><div class="btn btn-vermas" data-localscroll="true" data-localscroll-options='{"scrollBelowSection":true}' >Ver Más +</div></a>
					</div>
				</div>

			</div><!-- /.lqd-column col-md-4 -->

			@endforeach
			

		</div><!-- /.row -->

	

				
			

	<div class="row ">
		<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3 lqd-column" 	data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
			<div class=" fSize20">MIRÁ LAS ÚLTIMAS PRODUCCIONES SUBIDAS</div>
			<div class="fontClimate fSize45"><span class="celeste"># </span>LO ÚLTIMO</div>
		</div>
	</div>
	<div class="container">
		<div class="row pt-4 " data-custom-animations="true"
		data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>
			<div class="col-4 offset-md-2  pt-4 pb-3  ">

				<img class="radius1" src="/img/imagenComunidad.jpg" width="100%" />
			</div>
			<div class="col-5 pt-4 pb-3 colorazul">
				<h3 class="comunidadTit">Contenido #2 título de hasta 3 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h3>
				<p>Bajada de hasta 6 líneas de extensión en
				Roboto regular 18 pts #06053A, 20 pts de interlínea, alineación a la izquierda. Lorem
				ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod
				tincidunt ut laoreet dolor. 
				</p>
				<div class="btn-vermas">VER MÁS +</div>
			</div>
		</div>
	</div>
	<div class="row pt-4" >
		<div class="d-flex justify-content-between align-items-center fdoTriang pt-3 pb-3 lqd-column" 	data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
			<div class="fSize20 ">IDEAS, TIPS Y HERRAMIENTAS </div>
			<div class="fontClimate fSize45 colorazul"><span class="celeste"># </span>COMUNIDAD</div>
		</div>
	</div>
	<div class="container">
		<div class="row pt-5" data-custom-animations="true"
		data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1600", "delay":"160", "easing":"easeOutQuint", "initValues":{"translateY": 100, "opacity":0}, "animations":{"translateY": 0, "opacity":1}}'>
			<div class="col p-2">
				<div class="radius2 py-2 pl-1 ">
					<div class="row">
						<div class="col">
							<img  src="/img/comunidad1.png" width="100%" />
							<p>Contenido #2 título de hasta 3 líneas de extensión en Roboto bold 22 pts, interlínea 25 pt</p>
							<div class="btn-vermas">VER MÁS +</div>
						</div>
						<div class="col-2">
							
						</div>
					</div>
				</div>
			</div>
			<div class="col p-2">
				<div class="radius2 py-2 pl-1 ">
					<div class="row">
						<div class="col">
							<img  src="/img/fotoCuadrada.jpg" width="100%" />
							<p>Contenido #2 título de hasta 3 líneas de extensión en Roboto bold 22 pts, interlínea 25 pt</p>
							<div class="btn-vermas">VER MÁS +</div>
						</div>
						<div class="col-2">
							
						</div>
					</div>
				</div>
			</div>
			<div class="col p-2">
				<div class="radius2 py-2 pl-1 ">
					<div class="row">
						<div class="col">
							<img  src="/img/comunidad3.png" width="100%" />
							<p>Contenido #2 título de hasta 3 líneas de extensión en Roboto bold 22 pts, interlínea 25 pt</p>
							<div class="btn-vermas">VER MÁS +</div>
						</div>
						<div class="col-2">
							
						</div>
					</div>
				</div>
			</div>
			<div class="col p-2">
				<div class="radius2 py-2 pl-1 ">
					<div class="row">
						<div class="col">
							<img  src="/img/fotoCuadrada.jpg" width="100%" />
							<p>Contenido #2 título de hasta 3 líneas de extensión en Roboto bold 22 pts, interlínea 25 pt</p>
							<div class="btn-vermas">VER MÁS +</div>
						</div>
						<div class="col-2">
							
						</div>
					</div>
				</div>
			</div>

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

