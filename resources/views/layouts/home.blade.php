<!doctype html>
<html lang="es">
<head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">


    <title>Diana Guevara - @yield('title')</title>


    {{-- <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com"> --}}
    <!-- Bootstrap CSS -->   
    <link href = {{ asset("css/app.css") }} rel="stylesheet" />
    {{-- <link href="{{ asset('bootstrap-4.3.1/css/bootstrap.min.css') }}" rel="stylesheet"> --}}
    <!-- load all styles fontawesome -->
    <link href="{{ asset('fontawesome-5.11.2/css/all.css') }}" rel="stylesheet">
    <!-- Main CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">

    {{-- Each page styles --}}
    @yield('styles')
</head>

<body data-spy="scroll" data-target="#navbar" data-offset="30">
    <!-- Nav Menu -->
    <div class="nav-menu fixed-top">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-12">
                    <nav class="navbar navbar-dark navbar-expand-lg">
                        <a class="navbar-brand" href="{{  route('inicio') }}">
                            <p id="logo" class="pt-2">Diana Guevara</p>
                        </a>
                        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbar"
                            aria-controls="navbar" aria-expanded="false" aria-label="Toggle navigation"> <span
                                class="navbar-toggler-icon"></span> </button>
                        <div class="collapse navbar-collapse" id="navbar">
                            <ul class="navbar-nav ml-auto">
                                <li class="nav-item"> <a class="nav-link" href="{{ route('inicio') }}">Inicio</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('programa') }}">Programas</a>
                                </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('planes') }}">Trabaja
                                        conmigo</a> </li>
                                <li class="nav-item"> <a class="nav-link" href="{{ route('login-form') }}">Miembros</a> </li>
                                <!--  <li class="nav-item"><a href="#" class="btn btn-outline-light my-3 my-sm-0 ml-lg-3">Download</a></li> -->
                            </ul>
                        </div>
                    </nav>
                </div>
            </div>
        </div>
    </div>


    {{-- Body --}}
    @yield('body')
    {{-- end body --}} 

    <!-- Footer -->
    <footer class="py-5 bg-white" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <i class="fas fa-map-marker-alt mr-2"></i> Santo Domingo, Republica Dominicana</p>
                    <div class=" d-inline d-sm-inline-block">
                        <p class="mb-2">
                            <i class="fas fa-envelope mr-2"></i> <a class="mr-4"
                                href="mailto:infodianagvara@gmail.com">infodianagvara@gmail.com</a>
                        </p>
                    </div>
                    <div class="d-inline d-sm-inline-block">
                        <p class="mb-0">
                            <i class="fas fa-headphones mr-2"></i> <a href="tel:8097049996">+1 (809) 704-9996</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="#"><i class="fab fa-facebook"></i></a>
                        <a href="#"><i class="fab fa-twitter"></i></a>
                        <a href="#"><i class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    <!-- // end .section -->

    <!-- jQuery and Bootstrap -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('js/bootstrap.bundle.min.js') }}"></script>   
    <!-- main JS -->
    <script src="{{ asset('js/script.js') }}"></script>

    <script type="text/javascript">
        $(document).ready(function () {
            $("#p1").show('slide', 'Right', 1500, function () {
                $("#p2").show('slide', 'Right', 1000);
            });
        });
    
    </script>
</body>

</html>
