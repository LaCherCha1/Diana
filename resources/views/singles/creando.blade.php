<!doctype html>
<html lang="es">

<head>
    <title>Co-creando mi mejor año</title>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Font -->
    <link rel="dns-prefetch" href="//fonts.googleapis.com">

    <!-- Bootstrap CSS -->
    <link href="{{ asset('bootstrap-4.3.1/css/bootstrap.min.css') }}" rel="stylesheet">
    <!-- load all styles fontawesome -->
    <link href="{{ asset('fontawesome-5.11.2/css/all.css') }}" rel="stylesheet">
    <!-- Main CSS -->
    <link href="{{ asset('css/style.css') }}" rel="stylesheet">
    <link href="{{ asset('css/black.css') }}" rel="stylesheet">


    <link href="https://fonts.googleapis.com/css?family=Bevan&display=swap" rel="stylesheet">
    {{-- <link rel="stylesheet" type="text/css" href="{{ asset('css/pricing.css') }}"> --}}
    <style>
        .section {
            padding-top: 5rem;
            margin-top: 0;

        }

    </style>


<body>

    <div class="jumbotron text-center">
        <div class="container">
            <h1 class="testimonial-h text-capitalize bg-primary rounded-sm mb-5">Co-creando mi mejor año</h1>
            <p class="lead">
                Challenge de 22 dias. / Inicio: 2 De enero
            </p>
            <p class="text-danger letra-2">
                Cupos limitados
            </p>
        </div>
    </div>
    {{-- start --}}
    <div class="section bg-white">
        <div class="container text-center">


            @if (session('comprado'))
            <div class="container">
                <div class="alert alert-success shadow py-3 text-center mx-auto my-4 rounded alert-dismissible fade show"
                    role="alert">
                    Su compra se ha realizado con éxito, pronto recibirá un correo!
                    <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
            </div>
            @endif

            <h1 class="text-center letra-2">¿Alguna vez haz sentido que tienes que trabajar muy duro para conseguir lo
                que quieres?</h1>
            <p>
                Puede parecer que para ser merecedores de algo debemos de luchar mucho. Como si tuviéramos que hacer que
                las cosas sucedan. Mientras que sentirse bien se convierte en una idea de último momento.
            </p>
            <p>
                O tal vez te hayan enseñado a pensar que debes sufrir y luchar para ser digno de felicidad; y si te
                dejas ser feliz, te lo quitarán.
            </p>
            <p>
                Recuerdo esos sentimientos tan claramente.
            </p>

            <h1 class="text-center letra-2 mt-3">¿Cada año te propones nuevas metas, y dices que daras lo mejor de ti
                pero no sabes por donde empezar?</h1>
            <p>
                Esto es algo que nos ha sucedido a todos, dentro de este challenge podras romper esa monotonía que has
                estado llevando por tantos años, es hora que de que transformes tu vida.
            </p>

            <h1 class="text-center letra-2 mt-3">¿El miedo a fracasar es una de las cosas que te ha mantenido estancada
                y no sabes como dejarlo a un lado?</h1>
            <p>
                Estas en un lugar correcto, todos pasamos por esta situación pero para el beneficio de todos esto tiene
                solución.
            </p>



        </div>
    </div>
    {{-- start --}}
    <div class="section bg-light">
        <div class="container text-center">


            <h2 class="text-center letra-2">Estas a punto de:</h2>
            <ul class="list-unstyled">
                <li>
                    <p><i class="fas fa-minus"></i> Aprender a fijar metas claras.</p>
                </li>
                <li>
                    <p><i class="fas fa-minus"></i> Aprender a manifestar el logro de esas metas con facilidad.</p>
                </li>
                <li>
                    <p><i class="fas fa-minus"></i> Dejar de un lado el miedo y estancamiento.</p>
                </li>
                <li>
                    <p><i class="fas fa-minus"></i> Activar las leyes del universo a tu favor.</p>
                </li>
                <li>
                    <p><i class="fas fa-minus"></i> Conocer y activar el arte de permitirte recibir lo que deseas.</p>
                </li>

            </ul>
        </div>
    </div>

    {{-- start --}}
    <div class="section bg-white">
        <div class="container text-center">


            <h1 class="text-center letra-2 mb-4">¿Como funciona?</h1>
            <p class="my-3">
                <i class="fas fa-star"></i> Cada dia a partir del dia 1 del challenge (Inicia el 2 de enero) recibirás
                un correo con las actividades a realizar y Formatos a descargar.
                <p class="my-3">
                    <i class="fas fa-star"></i> Una vez hagas el pago recibirás un correo de confirmacion de que ya
                    estas dentro con la lección #1 de preparación, la cual vas a completar cada dia hasta el dia de
                    inicio.
                </p>
                <p class="mt-3 mb-0">
                    <i class="fas fa-star"></i> Una vez dentro del programa tendras acceso a un grupo de facebook donde
                    podras dejar tus dudas, preguntas o sugerencias para mi o las demas personas dentro.
                </p>
                <p class="text-muted mt-0">
                    (Es opcional estar dentro de este grupo)
                </p>
        </div>
    </div>
    {{-- start --}}
    <div class="section bg-light">
        <div class="container">


            <div class="row card-deck mb-3">
                <!-- plan 1 -->
                <div class="offset-lg-4 col-lg-4 offset-md-2 col-md-8 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-center">Pago completo</h4>
                        </div>
                        <div class="card-body">
                            {{-- <h4 class="text-center mb-0"><del>$888</del></h4> --}}
                            <h1 class="card-title pricing-card-title text-center">$88</h1>
                            <ul class="bonus list-unstyled mt-3 mb-4">
                                <li class="text-center">
                                    <p class="badge badge-light">1 pago de $88 USD</p>
                                </li>
                                <li><i class="fas fa-plus"></i> Acceso de por vida al programa</li>
                                <li class="text-center">
                                    <h5 class="mt-3">Bonus <i class="fas fa-gift"></i></h5>
                                </li>
                                <li><i class="fas fa-plus"></i> Hojas de instrucciones para manifestar dinero</li>

                            </ul>
                            {{-- <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                            <input type="hidden" name="cmd" value="_s-xclick">
                            <input type="hidden" name="hosted_button_id" value="XFREQ46SZQXS6">
                            <input type="submit" class="seleccionar btn btn-lg btn-block btn-primary" border="0"
                                value="Seleccionar" name="submit" alt="Pago Completo">
                        </form> --}}
                            <a class="btn btn-lg btn-block btn-primary"
                                href="{{ route('co-creando-pagar') }}">Seleccionar</a>
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>

    <!-- Footer -->
    <footer class="py-5" id="contact">
        <div class="container">
            <div class="row">
                <div class="col-lg-6 text-center text-lg-left">
                    <p class="mb-2"> <i class="fas fa-map-marker-alt mr-2"></i> Santo Domingo, Republica Dominicana</p>
                    <div class=" d-block d-sm-inline-block">
                        <p class="mb-2">
                            <i class="fas fa-envelope mr-2"></i> <a class="mr-4"
                                href="mailto:infodianagvara@gmail.com">infodianagvara@gmail.com</a>
                        </p>
                    </div>
                    <div class="d-block d-sm-inline-block">
                        <p class="mb-0" hidden>
                            <i class="fas fa-headphones mr-2"></i> <a href="tel:8097049996">+1 (809) 704-9996</a>
                        </p>
                    </div>

                </div>
                <div class="col-lg-6">
                    <div class="social-icons">
                        <a href="#" hidden><i class="fab fa-facebook"></i></a>
                        <a href="#" hidden><i class="fab fa-twitter"></i></a>
                        <a target="_blank" href="https://www.instagram.com/dianagvara_/"><i
                                class="fab fa-instagram"></i></a>
                    </div>
                </div>
            </div>

        </div>

    </footer>
    <!-- // end .section -->
    <!-- jQuery and Bootstrap -->
    <script src="{{ asset('js/jquery-3.2.1.min.js') }}"></script>
    <script src="{{ asset('js/jquery-ui.min.js') }}"></script>
    <script src="{{ asset('bootstrap-4.3.1/js/bootstrap.bundle.min.js') }}"></script>

    <!-- main JS -->
    <script src="{{ asset('js/script.js') }}"></script>
</body>

</html>
