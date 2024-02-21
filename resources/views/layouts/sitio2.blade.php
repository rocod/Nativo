<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <meta name="description" content="Nativo es la plataforma de contenidos educativos de la UNAHUR, está orientada a docentes de esta y otras instituciones">
    <meta name="author" content="UNAHUR">

    <title>Nativo - Una plataforma de Contenidos de la UNAHUR</title>
    
    <meta property="og:type" content="Contenido" />
    <meta property="og:title" content="Nativo - Una plataforma de Contenidos de la UNAHUR" />
    <meta property="og:description" content="Nativo es la plataforma de contenidos educativos de la UNAHUR, está orientada a docentes de esta y otras instituciones" />
    <meta property="og:image" content="https://nativo.unahur.edu.ar/img/educacion2.png" />
    <meta property="og:url" content="https://nativo.unahur.edu.ar" />
    <meta property="og:site_name" content="Nativo" />

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.1/font/bootstrap-icons.css">

    <!-- Styles -->
    <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="icon" href="/img/favicon.png" type="image/gif" />



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div id="app">
        <div class="container-fluid" style="position: relative; z-index:20">
            
            <nav class="navbar navbar-expand-lg  bg-body-tertiary" >
              <div class="container-fluid">
                <a class="navbar-brand"  href="/"><img class="logoNav" src="/img/logo.png" alt="Nativo logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu mr-3">
                   
                    
                    <li class="nav-item">
                      <a class="nav-link " href="/">INICIO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/ver_contenidos">CONTENIDOS</a>
                    </li>                    
                    <li class="nav-item">
                      <a class="nav-link " href="/comunidad">COMUNIDAD</a>
                    </li>
                   <!-- <li class="nav-item">
                      <a class="nav-link " href="/contacto">CONTACTO</a>
                    </li>-->
                  
                  <form class="d-flex" role="search" action="ver_contenidos"> 
                    <input class="form-control  busqueda" type="search" placeholder="" name="busqueda" aria-label="Search">
                    <button class="btn btn-outline-success btnBusqueda" type="submit"><img src="/img/lupa.png" alt="Lupa búsqueda" /></button>
                  </form>
                 
                  </ul>
                </div>
              </div>
            </nav>
        </div>       

        <div class="container-fluid">
            @yield('content')


        <div class="row">
          <div class="col p-0">
            <img  src="/img/piedePagN.png" width="100%" />
          </div>
        </div>
        <div class="row">
          <div class="col p-0">
            <div class="piedePag">

               <div class="row">               
                <div class="col-lg-2 offset-lg-1" >
                  <img  src="/img/pieLogoUNahur.png" width="160" />
                </div>
                 <div class="col-lg-9">
                    <div class="d-flex flex-row-reverse mostrarWeb">
                     <a href="https://aaescuelas.unahur.edu.ar/" target="_blank"><div class="mr-4 bgfucsia botonesPie">AULA ABIERTA ESCUELA</div></a>
                    <a href="https://unahur.edu.ar/" target="_blank"><div class="mr-4 bgverde botonesPie">WEB INSTITUCIONAL</div></a>                
                    <a target="_blank" href="https://docentes.unahur.edu.ar/"><div class="mr-4 bgcelestef botonesPie">SITIO WEB DOCENTE</div></a>
                  </div>
                </div>
              </div>

              <div class="d-flex flex-row-reverse pt-4">
               
                  <a href="https://www.instagram.com/unahurlingham/" target="_blank"><div class="mr-4  botonesPie"><i class="bi bi-instagram"></i> unahurlingham</div></a>                
                <a href="https://www.instagram.com/orientateunahur/" target="_blank"><div class="mr-4  botonesPie"><i class="bi bi-instagram"></i> orientateunahur</div></a>
              </div>
          </div>

          <div class="piedePagM">
            <div class="row">
              <div class="col">
                <div class="d-flex flex-column mb-3">
                  <div class="p-2">
                    <img  src="/img/pieLogoUNahur.png" width="160" />
                  </div>  
                  <div class="p-2">
                    <a target="_blank" href="https://docentes.unahur.edu.ar/"><div class="mr-4 bgcelestef botonesPie">SITIO WEB DOCENTE</div></a>
                  </div>
                  <div class="p-2">
                     <a href="https://unahur.edu.ar/" target="_blank"><div class="mr-4 bgverde botonesPie">WEB INSTITUCIONAL</div></a>
                  </div>
                  <div class="p-2">
                    <a href="https://aaescuelas.unahur.edu.ar/" target="_blank"><div class="mr-4 bgfucsia botonesPie">AULA ABIERTA ESCUELA</div></a>
                  </div>
                  <div class="p-2">
                    <a href="https://www.instagram.com/unahurlingham/" target="_blank"><div class="botonesPie"><i class="bi bi-instagram"></i> unahurlingham</div></a>
                  </div>  
                  <div class="p-2">
                    <a href="https://www.instagram.com/unahurlingham/" target="_blank"><div class=" botonesPie"><i class="bi bi-instagram"></i> unahurlingham</div></a>
                  </div>

                </div>
              </div>
            </div>
            
          </div>

        </div>
        </div>
        </div>
    </div>

<script src="/vendor/jquery/jquery.min.js"></script>


@yield('script')
</body>
</html>
