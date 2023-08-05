@extends('layouts.sitio')

@section('content')

<div class="container-fluid">
    <div class="row justify-content-center">
        <div id="carouselExampleIndicators" class="carousel slide">
		  <div class="carousel-indicators">
		    <button type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="botonSlide active" aria-current="true" aria-label="Slide 1"></button>
		    <button type="button" class="botonSlide" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1" aria-label="Slide 2"></button>
		    <button type="button" class="botonSlide" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2" aria-label="Slide 3"></button>
		     <button type="button" class="botonSlide" data-bs-target="#carouselExampleIndicators" data-bs-slide-to="3" aria-label="Slide 3"></button>
		  </div>
		  <div class="carousel-inner">
		    <div class="carousel-item active">
		      <img src="/img/slide1.png" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="/img/slide2.png" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="/img/slide1.png" class="d-block w-100" alt="...">
		    </div>
		    <div class="carousel-item">
		      <img src="/img/slide2.png" class="d-block w-100" alt="...">
		    </div>
		  </div>
		  <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="prev">
		    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Previous</span>
		  </button>
		  <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleIndicators" data-bs-slide="next">
		    <span class="carousel-control-next-icon" aria-hidden="true"></span>
		    <span class="visually-hidden">Next</span>
		  </button>
		</div>

		
    </div>
    <div class="row  paddingRow">
    	<div class="d-flex justify-content-between align-items-center bgAzul pt-3 pb-3">
	    	<div class="fontMerri fSize20">CONOCÉ TODOS LOS CONTENIDOS POR <span class="celeste">EJES TEMÁTICOS</span></div>
	    	<div class="fontClimate fSize45"><span class="celeste"># </span>TEMAS</div>
	    </div>
	</div>

	<div class="container">
			<div class="row azul" id="filtros">
				<div class="col-3 bgCeleste px-5 pt-5 pb-5">
					<h3 class="filtros">FILTROS DE BÚSQUEDA</h3>
					<h2 class="itemFiltro pt-4">Ejes</h2>
					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><a href="#">Biotecnología</a></li>
					  <li class="list-group-item"><a href="#">Educación</a></li>
					  <li class="list-group-item"><a href="#">Tecnología</a></li>
					  <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle-fill"></i></a></li>
					 
					</ul>

					<h2 class="itemFiltro pt-4">Subcategorías</h2>
					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><a href="#">Título 1</a></li>
					  <li class="list-group-item"><a href="#">Título 2</a></li>
					  <li class="list-group-item"><a href="#">Título 3</a></li>
					  <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle-fill"></i></a></li>
					</ul>

					<h2 class="itemFiltro pt-4">Nivel</h2>
					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><a href="#">Nivel A</a></li>
					  <li class="list-group-item"><a href="#">Nivel B</a></li>				 
					  <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle-fill"></i></a></li>
					</ul>

					<h2 class="itemFiltro pt-4">Formato</h2>
					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><a href="#">Documento</a></li>
					  <li class="list-group-item"><a href="#">Audiovisual</a></li>	
					  <li class="list-group-item"><a href="#">Podcast</a></li>			 
					  <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle-fill"></i></a></li>
					</ul>

					<h2 class="itemFiltro pt-4">Etiquetas</h2>

					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><a href="#">Documento</a></li>
					  <li class="list-group-item"><a href="#">Audiovisual</a></li>	
					  <li class="list-group-item"><a href="#">Podcast</a></li>			 
					  <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle-fill"></i></a></li>
					</ul>

					<h2 class="itemFiltro pt-4">Autorxs (apellido)</h2>

					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><a href="#">A</a></li>
					  <li class="list-group-item"><a href="#">B</a></li>	
					  <li class="list-group-item"><a href="#">C</a></li>			 
					  <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle-fill"></i></a></li>
					</ul>

					<h2 class="itemFiltro pt-4">Otros contribuyentes (apellido)</h2>

					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><a href="#">A</a></li>
					  <li class="list-group-item"><a href="#">B</a></li>	
					  <li class="list-group-item"><a href="#">C</a></li>		 
					  <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle-fill"></i></a></li>
					</ul>

					<h2 class="itemFiltro pt-4">Licencia</h2>
					<ul class="list-group list-group-flush">
					  <li class="list-group-item"><a href="#">Licencia A</a></li>
					  <li class="list-group-item"><a href="#">Licencia B</a></li>	
					  <li class="list-group-item"><a href="#"><i class="bi bi-plus-circle-fill"></i></a></li>
					 
					</ul>

				</div>
				<div id="vistaPrevia" class="col-9 pt-5 pb-5 ">
					
					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

					<div class="row p-3 ">						
						  <div class="row unaVista">
						    <div class="col-md-2 justify-content-center pb-2">
						      <img src="/img/ejemplo1.png" width="70%" class="img-fluid " alt="titulo de la noticia">
						    </div>
						    <div class="col-md-8">
						      <div class="card-body">
						        <h5 class="card-title">Contenido #1 título de hasta 2 líneas de extensión en Roboto bold 22 pts, interlínea 25 pts</h5>
						        <p class="card-text">Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.  Lorem ipsum dolor sit amet, consectetuer adipiscing elit, sed diam nonummy nibh euismod tincidunt ut laoreet dolor.</p>
						       
						      </div>
						    </div>
						    <div class="col-md-2 d-flex align-items-center justify-content-end">
						    	<div class="verMas">ver más +</div>
						    </div>
						  </div>
					
					</div><!--fin una vista previa-->

				</div>
			</div>
	</div>

</div><!-- fin container fluid-->

@endsection
