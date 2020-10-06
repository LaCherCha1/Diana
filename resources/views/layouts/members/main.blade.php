<!DOCTYPE html>
<html lang="es">

<head>

    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    

    <title>Módulos - Area de miembros</title>

    <!-- Bootstrap CSS -->
    <link href={{ asset("css/app.css") }} rel="stylesheet" />
    <!-- Custom styles for this template -->
    <link href="{{ asset('fontawesome-5.11.2/css/all.css') }}" rel="stylesheet">

    <link href="{{ asset('css/members/style.css') }}" rel="stylesheet">

</head>

<body>

    <!-- Navigation -->
    <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top">
        <div class="container">
            <a id="logo" class="navbar-brand" href="{{  route('inicio') }}">Diana Guevara</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarResponsive"
                aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarResponsive">
                <ul class="navbar-nav ml-auto">

                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            @yield('name')
                        </a>
                        <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                            <a class="dropdown-item" href="#">Mi cuenta <i class="fas fa-user"></i></a>
                            <a class="dropdown-item" href="#">Mensajes <span
                                    class="badge badge-dark badge-pill">0</span></a>
                            <div class="dropdown-divider"></div>
                            <a class="dropdown-item" href="{{ route('logout') }}">Cerrar Sesión</a>
                        </div>
                    </li>

                </ul>
            </div>
        </div>
    </nav>

    {{-- Body --}}
    @yield('body')
    {{-- end body --}}

    <!-- Footer -->
    <footer class="py-5 bg-dark">
        <div class="container">
            <p class="m-0 text-center text-white">Copyright &copy; Diana Guevara 2019</p>
        </div>
        <!-- /.container -->
    </footer>

    <!-- jQuery and Bootstrap -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>    

</body>

</html>
