<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Plataforma UNAHUR</title>

    <!-- Scripts -->
    <script src="{{ asset('js/app.js') }}" defer></script>

    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.10.5/font/bootstrap-icons.css">
</head>
<body>
    <div id="app">
        <div class="container-fluid">
            
            <nav class="navbar navbar-expand-lg ">
              <div class="container-fluid">
                <a class="navbar-brand" href="#"><img src="/img/logo.png" alt="Logo" class="logo" /></a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon"></span>
                </button>
                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  <ul class="navbar-nav me-auto mb-2 mb-lg-0 menu">
                   
                    <!--
                    <li class="nav-item dropdown">
                      <a class="nav-link dropdown-toggle" href="#" role="button" data-bs-toggle="dropdown" aria-expanded="false">
                        Dropdown
                      </a>
                      <ul class="dropdown-menu">
                        <li><a class="dropdown-item" href="#">INICIO</a></li>
                        <li><a class="dropdown-item" href="#">CONTENIDOS</a></li>
                        
                        <li><a class="dropdown-item" href="#">SECCIÓN X</a></li>
                        <li><a class="dropdown-item" href="#">NOVEDADES</a></li>
                      </ul>
                    </li>-->
                    <li class="nav-item">
                      <a class="nav-link ">INICIO</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link ">CONTENIDOS</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link ">SECCIÓN X</a>
                    </li>
                    <li class="nav-item">
                      <a class="nav-link ">NOVEDADES</a>
                    </li>
                  </ul>
                  <form class="d-flex" role="search">
                    <input class="form-control  busqueda" type="search" placeholder="" aria-label="Search">
                    <button class="btn btn-outline-success btnBusqueda" type="submit"><img src="/img/lupa.png" alt="Lupa búsqueda" /></button>
                  </form>
                </div>
              </div>
            </nav>
        </div>       

        <main class="py-4">
            @yield('content')
        </main>
    </div>
</body>
</html>
