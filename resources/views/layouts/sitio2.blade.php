<!doctype html>
<html lang="es">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Nativo</title>

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



    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div id="app">
        <div class="container-fluid" style="position: relative; z-index:20">
            
            <nav class="navbar navbar-expand-lg  bg-body-tertiary" >
              <div class="container-fluid">
                <a class="navbar-brand"  href="/"><img class="logoNav" src="/img/nativoPrueba.png" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                   
                    
                    <li class="nav-item">
                      <a class="nav-link " href="/">INICIO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link" href="/ver_contenidos">CONTENIDOS</a>
                    </li>                    
                    <li class="nav-item">
                      <a class="nav-link " href="/comunidad">COMUNIDAD</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link " href="/contacto">CONTACTO</a>
                    </li>
                  
                  <form class="d-flex" role="search">
                    <input class="form-control  busqueda" type="search" placeholder="" aria-label="Search">
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
            <div class="piedePag">
              <div class="d-flex flex-row-reverse mostrarWeb">
                <div class="mr-4 bgfucsia botonesPie">AULA ABIERTA ESCUELA</div>
                <div class="mr-4 bgverde botonesPie">WEB INSTITUCIONAL</div>                
                <div class="mr-4 bgcelestef botonesPie">SITIO WEB DOCENTE</div>
              </div>
              <div class="d-flex flex-row-reverse pt-4">
               
                <div class="mr-4  botonesPie"><i class="bi bi-instagram"></i> unahurlingham</div>                
                <div class="mr-4  botonesPie"><i class="bi bi-instagram"></i> orientateunahur</div>
              </div>
          </div>
        </div>
        </div>
    </div>

<script src="/vendor/jquery/jquery.min.js"></script>


@yield('script')
</body>
</html>
