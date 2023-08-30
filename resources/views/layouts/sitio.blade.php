<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
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

    <!-- Styles -->
    <link href="{{ asset('css/theme.min.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div id="app">
        <div class="container-fluid" style="position: relative; z-index:20">
            
            <nav class="navbar navbar-expand-lg " >
              <div class="container-fluid">
                <a class="navbar-brand"  href="/"><img width="200" src="/img/nativoPrueba.png" /></a>
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
                      <a class="nav-link ">COMUNIDAD</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link ">CONTACTO</a>
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
            <div class="piedePag"><img width="100%" src="/img/piedepag.png"></div>
          </div>
        </div>
        </div>
    </div>

<script src="/vendor/jquery/jquery.min.js"></script>
<script src="/js/theme-vendors.js"></script>
<script src="/js/theme.min.js"></script>
@yield('script')
</body>
</html>
