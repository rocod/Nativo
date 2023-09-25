@extends('layouts.sitio')

@section('content')




<div class="row ">
		<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3 lqd-column" 	data-custom-animations="true"
						data-ca-options='{"triggerHandler":"inview", "animationTarget":"all-childs", "duration":"1200", "delay":"130", "easing":"easeOutQuint", "direction":"forward", "initValues":{"translateY":50, "opacity":0}, "animations":{"translateY":0, "opacity":1}}'>
			<div class=" fSize20">ENVIANOS TU CONSULTA</div>
			<div class="fontClimate fSize45"><span class="celeste"># </span>CONTACTO</div>
		</div>
	</div>


	<div class="container" id="detalleContenido">
		
		@if (session('success'))
		<div class="row pt-3">
			<div class="col-6 offset-3">
	            <div class="alert alert-success text-center" role="alert">
	                {{ session('success') }}
	            </div>
	        </div>
         </div>
        @endif
    	
		<div class="row pt-5">
			<div class="col-lg-4 col-sm-12 offset-lg-1">
				<p class="text-end envianos">Envianos tu consulta o comentario,<br/> te responderemos a la brevedad.</p>

			</div>
			<div class="col-lg-4 col-sm-12 offset-lg-1">

				<form action="/enviarMensaje" method="post">
					 @csrf
				  <div class="mb-3">
				    <label for="nombre" class="form-label">Nombre</label>
				    <input type="text" class="form-control" name="nombre" id="nombre" required>
				  </div>
				  <div class="mb-3">				  	
				    <label for="exampleInputEmail1" class="form-label">Email</label>
				    <input type="email" class="form-control" id="exampleInputEmail1" name="email" aria-describedby="emailHelp">
				    
				  </div>
				  <div class="mb-3">
				    <label for="telefono" class="form-label">Teléfono</label>
				    <input type="tel" class="form-control" name="telefono" id="telefono">
				  </div>
				  <div class="mb-3">
				    <label for="nombre" class="form-label">Consulta</label>
				    <textarea class="form-control" required name="texto" id="texto"></textarea>
				  </div>
				 
				  <button type="submit" class="btn btn-primary">Enviar</button>
				</form>
				
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

