<!doctype html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="stylesheet" href="{{asset('CSS/plantUsu.css')}}">
    @yield('estilos')
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <title>@yield('title')</title>
    {{-- Link iconos de google --}}
    <link rel="stylesheet" href="https://fonts.googleapis.com/css2?family=Material+Symbols+Outlined:opsz,wght,FILL,GRAD@24,400,0,0" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/boxicons@latest/css/boxicons.min.css">
    {{-- Favicon --}}
    <link rel="icon" type="ima/png" href="{{asset('img/logo.png')}}">
  </head>
  <body  style="background-color: rgb(236, 234, 234);">
    <nav class="navbar navbar-expand-lg navbar-light bg-white">
        <div class="container-fluid">
          <a class="navbar-brand" href="#"><img src="{{asset ('img/megaBus.png')}}" alt="" style="width: 50px;"></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
            <ul class="navbar-nav me-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link text-dark" aria-current="page" href="#">Principal</a>
              </li>
            </ul>
            <div class="d-flex">
                @if(auth()->check())
                    <h5 class="">Bienvenido {{ auth()->user()->name }}</h5>
                @endif
                <form action="{{ route('logout') }}" method="POST" class="d-flex">
                    @csrf <!-- Necesario para la protección CSRF -->
                    <button type="submit" class="nav_link border-0 bg-white" id="cerrarSe"> <i class='bx bx-log-out nav_icon'></i> </button>
                </form>
            </div>
          </div>
        </div>
      </nav>

    @yield('content')

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
  </body>
</html>

{{-- @if(auth()->check())
            <p class="text-light bienvenida">Bienvenido {{ auth()->user()->name }}</p>
    @endif --}}