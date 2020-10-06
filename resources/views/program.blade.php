@extends('layouts.home') {{-- extender de la plantilla home --}}

@section('title','Programa')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/program.css') }}">
@endsection


@section('body')

<header class="bg-gradient">

</header>
{{-- Programa --}}
<div class="section bg-light">
    <div class="container text-center">
        <h1 class="letra-1 text-capitalize bg-primary rounded-sm">Programa Manifestando mis sueños</h1>
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
        <h2 class="letra-1 text-center">Dentro de este programa podrás aprender a: </h2>
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
<div class="section text-center">
    <h2 class="mb-4 letra-1">¿Esta eres tu?</h2>
    <div class="container">
        <hr>
    </div>

    <p class="mt-5">Sientes que no tienes motivación para hacer nada?</p>
    <p class="mt-5">No quieres dar el primer paso por miedo a fracasar?</p>
    <p class="mt-5">Las cosas han salido mal y esto te ha convertido en una persona negativa?</p>
    <p class="mt-5">Quieres hacer muchas cosas y no sabes por donde empezar?</p>
    <p class="mt-5">No tienes clara cuales son tus metas?</p>
    <p class="mt-5">Te encuentras en un punto de tu vida donde te das cuenta que esa no es la vida que deseas?</p>
    <p class="mt-5">Quieres cambiar tu vida y empezar a vivir la vida de tus sueños pero no tienes ni idea de como
        empezar a manifestar eso?</p>

    <div class="container">
        <div class="dropdown-divider"></div>
    </div>
    <h2 class="letra-1 mt-5">I feel you, créeme te entiendo!</h2>
    <p class="mt-5">Yo también estuve ahí pero salí y estoy dispuesta a ayudarte a hacer lo mismo.</p>
    <p class="mt-5">Chequea la información de mi programa de 8 semanas totalmente en linea donde te enseñare:</p>
    <div class="container mt-sm-5">
        <div class="row justify-content-center text-left">
            <div class="col-md-5 offset-md-1">
                <p><i class="fas fa-check"></i>Como usar la ley de atracción.</p>
                <p><i class="fas fa-check"></i>Dominar tus emociones.</p>
                <p><i class="fas fa-check"></i>Organizar tus metas.</p>
                <p><i class="fas fa-check"></i>Identificar que te está deteniendo y combatir eso.</p>
                <p><i class="fas fa-check"></i>Soltar tus miedos.</p>
                <p><i class="fas fa-check"></i>Manifestar la vida de tus sueños.</p>
                <p><i class="fas fa-check"></i>Aumentar la confianza en ti misma.</p>
                <p><i class="fas fa-check"></i>Construir un plan de vida.</p>
            </div>
        </div>
    </div>


</div>
<!-- // end .section -->

<div class="section bg-light">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h3 class="letra-1 mb-5 mt-3">Esto <strong>NO</strong> es para ti si:</h3>
                <p><i class="fas fa-minus"></i> No estas decidido a cambiar tu vida.</p>
                <p><i class="fas fa-minus"></i> No estas comprometido con hacer todo lo que se debe para transformar
                    tu realidad.</p>
                <p><i class="fas fa-minus"></i> Solo quieres sentirte mejor aunque no logres nada.</p>
                <p><i class="fas fa-minus"></i> Te encuentras viviendo la vida que sueñas.</p>
            </div>
            <div class="col-md-6">
                <h3 class="letra-1 mb-5 mt-3">Esto es para ti si:</h3>
                <p><i class="fas fa-minus"></i> Estás dispuesta a hacer todo lo requerido para lograr tus metas y
                    vivir la vida que deseas.</p>
                <p><i class="fas fa-minus"></i> Quieres vencer tus miedos y salir adelante.</p>
                <p><i class="fas fa-minus"></i> Quieres hacer un plan de vida y cumplirlo.</p>
                <p><i class="fas fa-minus"></i> Quieres aprender a manifestar lo que quieras.</p>
                <p><i class="fas fa-minus"></i> Quieres empezar a vivir una vida en abundancia.</p>
                <p><i class="fas fa-minus"></i> Estas 100% comprometido a sacar de abajo y dar lo mejor de ti.</p>
            </div>
        </div>
    </div>
</div>
<!-- // end .section -->
{{-- testimonios --}}
<div class="section">
    <div class="container-fluid">            
        <h1 class="letra-1 text-center mt-5 mb-5">Testimonios</h1>
        <div class="row testimonios align-items-center">
            <div class="offset-md-1 col-md-4 text-md-right text-center">
                <img src="images/testimonio1.jpeg" class="align-middle rounded-circle testimonios-fotos"
                    alt="Eimy Disla">
            </div>
            <div class="col-md-5">
                <h3 class="letra-2 text-center text-md-left mt-0-md mt-3">Mi vida realmente cambió</h3>
                <blockquote class="blockquote ">
                    <p class="mb-0 text-justify">Al principio me sentía muy mal, no tenía ánimos para nada, no tenía
                        ningún
                        pensamiento positivo y solo me culpaba por no tener el control de mi situación hasta que me di
                        cuenta de
                        que todo eso era algo que yo misma atraía cada vez que me culpaba o que me dedicaba a solo
                        pensarlo peor,
                        después de la primera llamada, me sentí más libre, sentí que nada de lo que quería lograr o
                        tener se
                        complicaría, cambie mis hábitos y he manifestado muchas cosas que quería desde hace mucho, ahora
                        siento
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
                <h3 class="letra-2 text-center text-md-left mt-0-md mt-3">Mi vida a cambiado totalmente</h3>
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
                <h3 class="letra-2 text-center text-md-left mt-0-md mt-3">Todo se ha vuelto mas fácil</h3>
                <blockquote class="blockquote ">
                    <p class="mb-0 text-justify">Todo ha sido mucho mas fácil para mi, mi mentalidad ha cambiado de una
                        forma
                        increíble, la confianza en mi misma ha aumentado a un nivel grandioso, a cualquier persona que
                        quiera
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
                <h3 class="letra-2 text-center text-md-left mt-0-md mt-3">Emprendí un negocio muy exitoso</h3>
                <blockquote class="blockquote ">
                    <p class="mb-0 text-justify">Mi vida, entorno y mentalidad ha cambiado por completo luego de este
                        programa,
                        perdí el miedo , tengo mucho mas confianza en mi misma y gracias a este programa y la ayuda de
                        Diana pude
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
                <h3 class="letra-2 text-center text-md-left mt-0-md mt-3">Vivo mi día a día de una forma diferente</h3>
                <blockquote class="blockquote ">
                    <p class="mb-0 text-justify">Este programa me ha ayudado muchísimo, he cambiado mis hábitos y eso ha
                        provocado muchos cambios positivos en mi vida y mi mentalidad, gracias a esto hoy soy una
                        persona que no
                        se deja dominar por los miedos y he podido alcanzar metas que ni siquiera sabia que podía.</p>
                    <footer class="blockquote-footer mt-3">Scarlet Castillo</footer>
                </blockquote>
            </div>
        </div>


    </div>
</div>
{{-- end section --}}

{{-- Modulo --}}
<div class="section">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h1 class="text-center letra-1">Modulo 1</h1>
                <h2 class="px-2 bg-primary testimonial-sh letra-2 rounded-sm">Identificando mi enfoque</h2>
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
                <h1 class="text-center letra-1">Modulo 2</h1>
                <h2 class="px-2 bg-primary testimonial-sh letra-2 rounded-sm">Diagnosticando mis pensamientos limitantes
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
                <h1 class="text-center letra-1">Modulo 3</h1>
                <h2 class="px-2 bg-primary testimonial-sh letra-2 rounded-sm">Creando hábitos de éxito</h2>
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
                <h1 class="text-center letra-1">Modulo 4</h1>
                <h2 class="px-2 bg-primary testimonial-sh letra-2 rounded-sm">Dominando mis emociones</h2>
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
                <h1 class="text-center letra-1">Modulo 5</h1>
                <h2 class="px-2 bg-primary testimonial-sh letra-2 rounded-sm">Manifestando mis deseos</h2>
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
                <h1 class="text-center letra-1">Modulo 6</h1>
                <h2 class="px-2 bg-primary testimonial-sh letra-2 rounded-sm">Transformando mi realidad</h2>
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
                <h1 class="text-center letra-1">Modulo 7</h1>
                <h2 class="px-2 bg-primary testimonial-sh letra-2 rounded-sm">Balanceando mi energía</h2>
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
                <h1 class="text-center letra-1">Modulo 8</h1>
                <h2 class="px-2 bg-primary testimonial-sh letra-2 rounded-sm">Transformando mi vida</h2>
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
<!-- // end .section -->
@endsection
