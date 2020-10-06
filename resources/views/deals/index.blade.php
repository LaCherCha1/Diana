<!doctype html>
<html lang="es">

<head>
    <title>Diana Guevara</title>
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
    <link rel="stylesheet" type="text/css" href="{{ asset('css/pricing.css') }}">



<body>

    <div id="black" class="section">
        <div class="container-fluid text-center">
            <h2 class="text-primary display-1 text-uppercase">{{$deal_name}}</h2>
            <p class="lead">
                Aprovecha nuestra gran oferta de {{$deal_name}} de un 70%
            </p>
            <a href="#planes" class="btn btn-lg btn-primary">Aprovechar las ofertas</a>
        </div>
    </div>
    {{-- Programa --}}
    <div class="section bg-light">
        <div class="container text-center">
            @if (session('comprado'))
            <div class="alert alert-success shadow-lg p-3 mb-5 rounded alert-dismissible fade show" role="alert">
                Su compra se ha realizado con éxito, pronto recibirá un correo!
                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            @endif

            <h1 class="testimonial-h text-capitalize bg-primary rounded-sm">Programa Manifestando mis sueños</h1>
            <ul class="list-unstyled">
                <li>
                    <p><i class="fas fa-check"></i> 8 Módulos</p>
                </li>
                <li>
                    <p><i class="fas fa-check"></i> 8 Semanas de entrenamiento en linea</p>
                </li>
                <li>
                    <p><i class="fas fa-check"></i> Llamadas grupales cada semana</p>
                </li>
                <li>
                    <p><i class="fas fa-check"></i> Acceso a un área de miembros</p>
                </li>
                <li>
                    <p><i class="fas fa-check"></i> Acceso a un grupo privado</p>
                </li>
            </ul>
        </div>
    </div>
    {{-- Aprender --}}
    <div class="section">
        <div class="container">
            <h2 class="text-center">Dentro de este programa podrás aprender a: </h2>
            <div class="row">
                <div class="col-lg-5 offset-lg-4">
                    <p> <i class="fas fa-minus"></i> Manifestar y atraer lo que quieras con
                        facilidad. </p>
                    <p> <i class="fas fa-minus"></i> Vencer tus miedos y aumentar tu autoconfianza.
                    </p>
                    <p> <i class="fas fa-minus"></i> Usar la ley de atracción a tu favor. </p>
                    <p> <i class="fas fa-minus"></i> Dominar tus emociones. </p>
                    <p> <i class="fas fa-minus"></i> Cambiar tu vida por completo cambiando tu
                        mentalidad. </p>
                </div>
            </div>


            <p>
                El programa consiste cumplir cada paso que requiere re-programar tu mente por completo para que puedas
                transformar todas las areas de tu vida aprendiendo diferentes técnicas y completando una serie de
                actividades y ejercicios.
            </p>

            <p>
                Dentro del programa tendrás acceso a mi a través de un grupo privado y por las llamadas grupales que
                serán
                hechas y grabadas cada semana.
            </p>

            <p>
                Este programa contiene cada uno de los pasos que use para transformar mi vida. Y porque quiero lo mismo
                para
                ti, lo he puesto todo dentro de el mismo.
            </p>
        </div>
    </div>
    {{-- Programa --}}
    <div class="section bg-light">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h3 class="mb-5 mt-3 titles">Esto <em>NO</em> es para ti si:</h3>
                    <p><i class="fas fa-minus"></i> No estas decidido a cambiar tu vida.</p>
                    <p><i class="fas fa-minus"></i> No estas comprometido con hacer todo lo que se debe para transformar
                        tu realidad.</p>
                    <p><i class="fas fa-minus"></i> Solo quieres sentirte mejor aunque no logres nada.</p>
                    <p><i class="fas fa-minus"></i> Te encuentras viviendo la vida que sueñas.</p>
                </div>
                <div class="col-md-6">
                    <h3 class="mb-5 mt-3 titles">Esto es para ti si:</h3>
                    <p><i class="fas fa-minus"></i> Estás dispuesta a hacer todo lo requerido para lograr tus metas y
                        vivir la vida que deseas.</p>
                    <p><i class="fas fa-minus"></i> Quieres vencer tus miedos y salir adelante.</p>
                    <p><i class="fas fa-minus"></i> Quieres hacer un plan de vida y cumplirlo.</p>
                    <p><i class="fas fa-minus"></i> Quieres aprender a manifestar lo que quieras.</p>
                    <p><i class="fas fa-minus"></i> Quieres empezar a vivir una vida en abundancia.</p>
                    <p><i class="fas fa-minus"></i> Estas 100% comprometido a sacar de abajo y dar lo mejor de ti.</p>
                </div>
            </div>
            <div class="text-center">
                <a href="#planes" class="btn btn-lg btn-primary">Estoy decidida</a>
            </div>
        </div>
    </div>

    {{-- Modulo --}}
    <div class="section">
        <div class="container">
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center testimonial-h">Modulo 1</h1>
                    <h2 class="px-2 bg-primary testimonial-sh rounded-sm">Identificando mi enfoque</h2>
                    <ul class="module-list">
                        <li>
                            <p class="my-0">Determina tu enfoque.</p>
                        </li>
                        <li>
                            <p class="my-0">Identificando que me esta deteniendo.</p>
                        </li>
                        <li>
                            <p class="my-0">Organizando mis metas.</p>
                        </li>
                        <li>
                            <p class="my-0">Visualizando.</p>
                        </li>
                        <li>
                            <p class="my-0">Diseñando tu visión en 10 años.</p>
                        </li>
                        <li>
                            <p class="my-0">Planeando el logro de mis metas.</p>
                        </li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center testimonial-h">Modulo 2</h1>
                    <h2 class="px-2 bg-primary testimonial-sh rounded-sm">Diagnosticando mis pensamientos limitantes
                    </h2>
                    <ul class="module-list">
                        <li>
                            <p class="my-0">Identificando mis creencias limitantes.</p>
                        </li>
                        <li>
                            <p class="my-0">Transformando mis pensamientos.</p>
                        </li>
                        <li>
                            <p class="my-0">La ley de atracción.</p>
                        </li>
                        <li>
                            <p class="my-0">Introduciendo rutinas de cuidado personal que atraen.</p>
                        </li>
                        <li>
                            <p class="my-0">Aumentando la confianza en mi misma.</p>
                        </li>
                        <li>
                            <p class="my-0">Las historias que nos contamos a nosotros mismos.</p>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center testimonial-h">Modulo 3</h1>
                    <h2 class="px-2 bg-primary testimonial-sh rounded-sm">Creando hábitos de éxito</h2>
                    <ul class="module-list">
                        <li>
                            <p class="my-0">Introduciendo salvavidas en mis rutinas diarias.</p>
                        </li>
                        <li>
                            <p class="my-0">Creando afirmaciones concretas.</p>
                        </li>
                        <li>
                            <p class="my-0">El ejercicio y su importancia para manifestar.</p>
                        </li>
                        <li>
                            <p class="my-0">Los libros de éxito y su importancia.</p>
                        </li>
                        <li>
                            <p class="my-0">El arte del diario.</p>
                        </li>
                        <li>
                            <p class="my-0">Personalizando mi rutina matutina.</p>
                        </li>
                        <li>
                            <p class="my-0">El poder de los mantras.</p>
                        </li>
                    </ul>
                    <hr>
                </div>
                <div class="col-md-6">
                    <h1 class="text-center testimonial-h">Modulo 4</h1>
                    <h2 class="px-2 bg-primary testimonial-sh rounded-sm">Dominando mis emociones</h2>
                    <ul class="module-list">
                        <li>
                            <p class="my-0">Que son las emociones y como se forman.</p>
                        </li>
                        <li>
                            <p class="my-0">Reconociendo mis emociones.</p>
                        </li>
                        <li>
                            <p class="my-0">Tomando el control de mis emociones.</p>
                        </li>
                        <li>
                            <p class="my-0">Las emociones y mi vida social.</p>
                        </li>
                        <li>
                            <p class="my-0">Las emociones y mi futuro.</p>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center testimonial-h">Modulo 5</h1>
                    <h2 class="px-2 bg-primary testimonial-sh rounded-sm">Manifestando mis deseos</h2>
                    <ul class="module-list">
                        <li>
                            <p class="my-0">Mi caja de manifestación.</p>
                        </li>
                        <li>
                            <p class="my-0">El porque de mis deseos.</p>
                        </li>
                        <li>
                            <p class="my-0">Creado confianza en mis creencias.</p>
                        </li>
                        <li>
                            <p class="my-0">Que es el NLP.</p>
                        </li>
                        <li>
                            <p class="my-0">Ejercicio de la NLP.</p>
                        </li>
                        <li>
                            <p class="my-0">Técnica NLP de re-programación.</p>
                        </li>
                        <li>
                            <p class="my-0">la técnica de blanqueamiento de NLP.</p>
                        </li>
                    </ul>
                    <hr>
                </div>

                <div class="col-md-6">
                    <h1 class="text-center testimonial-h">Modulo 6</h1>
                    <h2 class="px-2 bg-primary testimonial-sh rounded-sm">Transformando mi realidad</h2>
                    <ul class="module-list">
                        <li>
                            <p class="my-0">Las leyes del universo, que son y como funcionan.</p>
                        </li>
                        <li>
                            <p class="my-0">Núcleos principales de la ley de atracción.</p>
                        </li>
                        <li>
                            <p class="my-0">Alineando mis deseos.</p>
                        </li>
                        <li>
                            <p class="my-0">La gratitud es la actitud.</p>
                        </li>
                        <li>
                            <p class="my-0">Creando mi mapa de acción inspirada.</p>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
            <div class="row">
                <div class="col-md-6">
                    <h1 class="text-center testimonial-h">Modulo 7</h1>
                    <h2 class="px-2 bg-primary testimonial-sh rounded-sm">Balanceando mi energía</h2>
                    <ul class="module-list">
                        <li>
                            <p class="my-0">Que es EFT.</p>
                        </li>
                        <li>
                            <p class="my-0">Configurando el guion.</p>
                        </li>
                        <li>
                            <p class="my-0">Es hora de aprovechar.</p>
                        </li>
                        <li>
                            <p class="my-0">El procedimiento de la paz personal.</p>
                        </li>
                        <li>
                            <p class="my-0">Intro a los 7 chakras.</p>
                        </li>
                        <li>
                            <p class="my-0">Protegiendo mi energía.</p>
                        </li>
                    </ul>
                    <hr>
                </div>

                <div class="col-md-6">
                    <h1 class="text-center testimonial-h">Modulo 8</h1>
                    <h2 class="px-2 bg-primary testimonial-sh rounded-sm">Transformando mi vida</h2>
                    <ul class="module-list">
                        <li>
                            <p class="my-0">El arte del perdón.</p>
                        </li>
                        <li>
                            <p class="my-0">El perdón te hace libre.</p>
                        </li>
                        <li>
                            <p class="my-0">Perdonando mi pasado.</p>
                        </li>
                        <li>
                            <p class="my-0">Perdonándome a mi misma.</p>
                        </li>
                    </ul>
                    <hr>
                </div>
            </div>
        </div>
    </div>

    {{-- Testimonios --}}
    <div class="section bg-light">
        <div class="container-fluid">
            <h1 id="testimonial-heading" class="text-center mt-5 mb-5">Testimonios</h1>
            <div class="row testimonios align-items-center">
                <div class="offset-md-1 col-md-4 text-md-right text-center">
                    <img src="images/testimonio1.jpeg" class="align-middle rounded-circle testimonios-fotos"
                        alt="Eimy Disla">
                </div>
                <div class="col-md-5">
                    <h3 class="text-center text-md-left mt-0-md mt-3">Mi vida realmente cambió</h3>
                    <blockquote class="blockquote ">
                        <p class="mb-0 text-justify">Al principio me sentía muy mal, no tenía ánimos para nada, no tenía
                            ningún
                            pensamiento positivo y solo me culpaba por no tener el control de mi situación hasta que me
                            di cuenta de
                            que todo eso era algo que yo misma atraía cada vez que me culpaba o que me dedicaba a solo
                            pensarlo peor,
                            después de la primera llamada, me sentí más libre, sentí que nada de lo que quería lograr o
                            tener se
                            complicaría, cambie mis hábitos y he manifestado muchas cosas que quería desde hace mucho,
                            ahora siento
                            gratitud, se que todo esta a mi favor y que puedo guiarme hacia donde yo lo desee.</p>
                        <footer class="blockquote-footer mt-3">Eimy Disla</footer>
                    </blockquote>
                </div>
            </div>

            <div class="row testimonios align-items-center">
                <div class="offset-md-1 col-md-4 text-md-right text-center">
                    <img src="images/testimonio2.jpeg" class="rounded-circle testimonios-fotos" alt="Shanella Montilla">
                </div>
                <div class="col-md-5">
                    <h3 class="text-center text-md-left mt-0-md mt-3">Mi vida a cambiado totalmente</h3>
                    <blockquote class="blockquote ">
                        <p class="mb-0 text-justify">
                            Ha sido una de las mejores inversiones que he hecho, porque gracias a esto pude mejorar mi
                            manera de
                            pensar, he visto cambios en mi y también las personas a mi alrededor lo han podido notar,
                            mi vida a cambiado mucho, tengo una mejor vida económica, he sabido manejar mis situaciones,
                            he aprendido a manifestar cosas positivas en mi vida, entre otras cosas. Esto es 100% real.
                        </p>
                        <footer class="blockquote-footer mt-3">Shanella Montilla</footer>
                    </blockquote>
                </div>
            </div>

            <div class="row testimonios align-items-center">
                <div class="offset-md-1 col-md-4 text-md-right text-center">
                    <img src="images/testimonio3.jpeg" class="rounded-circle testimonios-fotos" alt="Victoria González">
                </div>
                <div class="col-md-5">
                    <h3 class="text-center text-md-left mt-0-md mt-3">Todo se ha vuelto mas fácil</h3>
                    <blockquote class="blockquote ">
                        <p class="mb-0 text-justify">Todo ha sido mucho mas fácil para mi, mi mentalidad ha cambiado de
                            una forma
                            increíble, la confianza en mi misma ha aumentado a un nivel grandioso, a cualquier persona
                            que quiera
                            cambiar su mente y su vida por completo le recomiendo que haga esto, de verdad lo vale!

                            Gracias Diana por tanto.</p>
                        <footer class="blockquote-footer mt-3">Victoria González</footer>
                    </blockquote>
                </div>
            </div>

            <div class="row testimonios align-items-center">
                <div class="offset-md-1 col-md-4 text-md-right text-center">
                    <img src="images/testimonio4.jpeg" class="align-middle rounded-circle testimonios-fotos"
                        alt="Perla Jiménez">
                </div>
                <div class="col-md-5">
                    <h3 class="text-center text-md-left mt-0-md mt-3">Emprendí un negocio muy exitoso</h3>
                    <blockquote class="blockquote ">
                        <p class="mb-0 text-justify">Mi vida, entorno y mentalidad ha cambiado por completo luego de
                            este programa,
                            perdí el miedo , tengo mucho mas confianza en mi misma y gracias a este programa y la ayuda
                            de Diana pude
                            emprender un negocio personal que hoy en día es muy exitoso, estoy muy agradecida!</p>
                        <footer class="blockquote-footer mt-3">Perla Jiménez</footer>
                    </blockquote>
                </div>
            </div>

            <div class="row testimonios align-items-center">
                <div class="offset-md-1 col-md-4 text-md-right text-center">
                    <img src="images/testimonio5.jpeg" class="rounded-circle testimonios-fotos" alt="Scarlet Castillo">
                </div>
                <div class="col-md-5">
                    <h3 class="text-center text-md-left mt-0-md mt-3">Vivo mi día a día de una forma diferente</h3>
                    <blockquote class="blockquote ">
                        <p class="mb-0 text-justify">Este programa me ha ayudado muchísimo, he cambiado mis hábitos y
                            eso ha
                            provocado muchos cambios positivos en mi vida y mi mentalidad, gracias a esto hoy soy una
                            persona que no
                            se deja dominar por los miedos y he podido alcanzar metas que ni siquiera sabia que podía.
                        </p>
                        <footer class="blockquote-footer mt-3">Scarlet Castillo</footer>
                    </blockquote>
                </div>
            </div>


        </div>
    </div>
    {{-- Planes --}}
    <div id="planes" class="section balloon">
        <div class="container">
            <div class="row card-deck mb-3">
                <!-- plan 1 -->
                <div class="offset-lg-2 col-lg-4 col-md-6 col-sm-12">
                    <div class="card mb-4">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-center">VIP Pago Completo</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-0"><del class="text-muted">$800</del></h4>
                            <h5 class="text-center mb-0"><span class='deal'>$200</span></h5>
                            <h1 class="card-title pricing-card-title text-center">$200</h1>
                            <ul class="bonus list-unstyled mt-3 mb-4">
                                <li class="text-center">
                                    <p class="badge badge-light">1 pago de $200 USD</p>
                                </li>
                                <li><i class="fas fa-plus"></i> Acceso de por vida al programa y sus ediciones</li>
                                <li class="text-center">
                                    <h5 class="mt-3">Bonus <i class="fas fa-gift"></i></h5>
                                </li>
                                <li><i class="fas fa-plus"></i> 50% próximo programa</li>
                                <li><i class="fas fa-plus"></i> Mis trucos privados de manifestación</li>
                                <li><i class="fas fa-plus"></i> 3 semanas de asesoría privada por Voxer</li>
                            </ul>
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="RDGUB5YZP5DBY">
                                <input type="submit" class="seleccionar btn btn-lg btn-block btn-primary"
                                    value="Seleccionar" border="0" name="submit" alt="Pago Completo">
                            </form>

                            {{-- <form action="{{ route('crear-pago') }}" method="post">
                            @csrf
                            <input type="submit" class="btn btn-lg btn-block btn-primary" value="Seleccionar">
                            </form> --}}
                        </div>
                    </div>
                </div>
                <!-- plan 2 -->
                <div class="col-lg-4 col-md-6 col-sm-12">
                    <div class="card  mb-4 ">
                        <div class="card-header">
                            <h4 class="my-0 font-weight-normal text-center">Plan Premium</h4>
                        </div>
                        <div class="card-body">
                            <h4 class="text-center mb-0"><del class="text-muted">$800</del></h4>
                            <h5 class="text-center mb-0"><span class='deal'>$200</span></h5>
                            <h1 class="card-title pricing-card-title text-center">$100<small class="text-muted">/ cada
                                    15 días</small>
                            </h1>
                            <ul class="bonus list-unstyled mt-3 mb-4">
                                <li class="text-center">
                                    <p class="badge badge-light">2 pagos de $100 USD</p>
                                </li>
                                <li><i class="fas fa-plus"></i> Acceso de por vida al programa y sus ediciones</li>
                                <li class="text-center">
                                    <h5 class="mt-3">Bonus <i class="fas fa-gift"></i></h5>
                                </li>
                                <li><i class="fas fa-plus"></i> 25% próximo programa</li>
                                <li><i class="fas fa-plus"></i> Mis trucos privados de manifestación</li>
                            </ul>
                            <form action="https://www.paypal.com/cgi-bin/webscr" method="post" target="_top">
                                <input type="hidden" name="cmd" value="_s-xclick">
                                <input type="hidden" name="hosted_button_id" value="NF8KJY5SGQC5L">
                                <input type="submit" class="seleccionar btn btn-lg btn-block btn-primary"
                                    value="Seleccionar" border="0" name="submit" alt="Pago Completo">
                            </form>
                            {{-- <button type="button" class="seleccionar btn btn-lg btn-block btn-primary">Seleccionar</button> --}}
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
