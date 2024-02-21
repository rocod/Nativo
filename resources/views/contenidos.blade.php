@extends('layouts.sitio2')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        

		
    </div>
    <div class="row  ">
    	<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3" >
	    	<div class=" fSize20">CONOCÉ TODOS LOS CONTENIDOS POR <span class="celeste">EJES TEMÁTICOS</span></div>
	    	<div class="fontClimate fSize45"><span class="celeste"># </span>TEMAS</div>
	    </div>
	</div>
	<div class="row">
		<nav class="navbar navbar-expand-lg p-2" id="filtrosMovilCont" >
              <div class="container-fluid">
               
                <div class="btn-verfiltros" type="button" data-bs-toggle="collapse" data-bs-target="#FiltrosMovil" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  Ver Filtros
                </div>
                <div class="collapse navbar-collapse" id="FiltrosMovil">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                   <form action="/ver_contenidos" method="get">

					<h2 class="itemFiltro pt-4">Ejes</h2>
					<select name="id_eje" id="id_eje" class="form-select form-select-lg mb-3 ejex" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($ejes as $eje)				  
					  <option @if(isset($_GET['id_eje']) && $_GET['id_eje']==$eje->id) selected @endif value="{{ $eje->id }}">{{ $eje->nombre }}</option>
					 @endforeach
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Subcategorías</h2>
					<select name="id_subcategoria" id="id_subcategoria" class="form-select form-select-lg mb-3" aria-label="Large select example">

					<option value="">+</option>	
					@if($subcategorias)

						@foreach($subcategorias as $sub)
							<option @if(isset($_GET['id_subcategoria']) && $_GET['id_subcategoria']==$sub->id) selected @endif value="{{ $sub->id }}">{{ $sub->nombre }}</option>
						@endforeach

					@endif
					
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Nivel</h2>
					<select name="id_nivel" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($niveles as $nivel)				  
					  <option  @if(isset($_GET['id_nivel']) && $_GET['id_nivel']==$nivel->id) selected @endif value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
					 @endforeach
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Formato</h2>
					<select name="id_formato" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($formatos as $formato)				  
					  <option @if(isset($_GET['id_formato']) && $_GET['id_formato']==$formato->id) selected @endif value="{{ $formato->id }}">{{ $formato->nombre }}</option>
					 @endforeach
					</select>
					
					<hr  />
					<h2 class="itemFiltro pt-2">Autorxs (apellido)</h2>
					<select name="id_autor" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($autorxs as $autor)				  
					  <option @if(isset($_GET['id_autor']) && $_GET['id_autor']==$autor->id) selected @endif value="{{ $autor->id }}">{{ $autor->nombre }} {{ $autor->apellido }}</option>
					 @endforeach
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Otros contribuyentes (apellido)</h2>
					<select name="id_contribuyente" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($contribuyentxs as $contribuyente)				  
					  <option @if(isset($_GET['id_contribuyente']) && $_GET['id_contribuyente']==$contribuyente->id) selected @endif value="{{ $contribuyente->id }}">{{ $contribuyente->nombre }} {{ $contribuyente->apellido }}</option>
					 @endforeach
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Licencia</h2>
					<select name="id_licencia" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($licencias as $licencia)				  
					  <option @if(isset($_GET['id_licencia']) && $_GET['id_licencia']==$licencia->id) selected @endif value="{{ $licencia->id }}">{{ $licencia->nombre }}</option>
					 @endforeach
					</select>
					 <button type="submit" class="btn btn-primary">Filtrar</button>
				</form>
                  </ul>
                </div>
              </div>
            </nav>
	</div>



	<div class="container">
			<div class="row azul" id="filtros2">
				<div id="FiltrosWeb" class="col-3 bgCeleste px-5 pt-5 pb-5">
					<h3 class="filtros">FILTROS DE BÚSQUEDA</h3>
					<form action="/ver_contenidos" method="get">

					<h2 class="itemFiltro pt-4">Ejes</h2>
					<select name="id_eje" id="id_eje2" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($ejes as $eje)				  
					  <option @if(isset($_GET['id_eje']) && $_GET['id_eje']==$eje->id) selected @endif value="{{ $eje->id }}">{{ $eje->nombre }}</option>
					 @endforeach
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Subcategorías</h2>
					<select name="id_subcategoria" id="id_subcategoria2" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@if($subcategorias)

						@foreach($subcategorias as $sub)
							<option @if(isset($_GET['id_subcategoria']) && $_GET['id_subcategoria']==$sub->id) selected @endif value="{{ $sub->id }}">{{ $sub->nombre }}</option>
						@endforeach

					@endif
					
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Nivel</h2>
					<select name="id_nivel" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($niveles as $nivel)				  
					  <option  @if(isset($_GET['id_nivel']) && $_GET['id_nivel']==$nivel->id) selected @endif value="{{ $nivel->id }}">{{ $nivel->nombre }}</option>
					 @endforeach
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Formato</h2>
					<select name="id_formato" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($formatos as $formato)				  
					  <option @if(isset($_GET['id_formato']) && $_GET['id_formato']==$formato->id) selected @endif value="{{ $formato->id }}">{{ $formato->nombre }}</option>
					 @endforeach
					</select>
					
					<hr  />
					<h2 class="itemFiltro pt-2">Autorxs (apellido)</h2>
					<select name="id_autor" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($autorxs as $autor)				  
					  <option @if(isset($_GET['id_autor']) && $_GET['id_autor']==$autor->id) selected @endif value="{{ $autor->id }}">{{ $autor->nombre }} {{ $autor->apellido }}</option>
					 @endforeach
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Otros contribuyentes (apellido)</h2>
					<select name="id_contribuyente" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($contribuyentxs as $contribuyente)				  
					  <option @if(isset($_GET['id_contribuyente']) && $_GET['id_contribuyente']==$contribuyente->id) selected @endif value="{{ $contribuyente->id }}">{{ $contribuyente->nombre }} {{ $contribuyente->apellido }}</option>
					 @endforeach
					</select>
					<hr  />
					<h2 class="itemFiltro pt-2">Licencia</h2>
					<select name="id_licencia" class="form-select form-select-lg mb-3" aria-label="Large select example">
					<option value="">+</option>	
					@foreach($licencias as $licencia)				  
					  <option @if(isset($_GET['id_licencia']) && $_GET['id_licencia']==$licencia->id) selected @endif value="{{ $licencia->id }}">{{ $licencia->nombre }}</option>
					 @endforeach
					</select>
					 <button type="submit" class="btn btn-primary">Filtrar</button>
				</form>

				</div>
				<div id="vistaPrevia" class="col-lg-9 col-md-12 pt-5 pb-5 ">
					
					@foreach($contenidos as $contenido)
					<div class="row p-3 ">						
						  <div class="row unaVista"	>
						    <div class="col-md-3 justify-content-center pb-2" >
						      <img height="120" src="/img/portada/{{ $contenido->portada }}"   alt="{{ $contenido->titulo }}">
						    </div>
						    <div class="col-md-7 pb-3" >
						      <div class="card-body">
						        <h5 class="card-title"><a class="verMascon" href="/detalle_contenido/{{ $contenido->id }}">{{ $contenido->titulo }}</a></h5>
						        <p class="card-text">{{ $contenido->resumen }}</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<a class="verMascon" href="/detalle_contenido/{{ $contenido->id }}"><div class="verMas">ver más +</div></a>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					@endforeach
					
					<div class="row"> 
						<div class="col text-center">
							{{ $contenidos->appends(["busqueda" => $busqueda, "id_eje" => $id_eje,
							"id_subcategoria" => $id_subcategoria,
							"id_nivel" => $id_nivel,
							"id_formato" => $id_formato,
							"id_autor" => $id_autor,
							"id_contribuyente" => $id_contribuyente,
							"id_licencia" => $id_licencia,

							])->links() }}
						</div>
					</div>

				</div>
			</div>
	</div>

</div><!-- fin container fluid-->

@endsection

@section('script')

<script type="text/javascript">



$("#id_eje2").change(function(){

	

  $value=$(this).val();


    $.ajax({
    type : 'get',
    url : '{{URL::to('buscar_subcategoria_web')}}/'+$value,
    //data:{'localidad':$value},
    success:function(data){
    $('#id_subcategoria2').html(data);
    }
    });



    

})


$('#id_eje').change(function(){


  $value=$(this).val();
    $.ajax({
    type : 'get',
    url : '{{URL::to('buscar_subcategoria_web')}}/'+$value,
    //data:{'localidad':$value},
    success:function(data){
    $('#id_subcategoria').html(data);
    }
    });

})
</script>
@endsection
