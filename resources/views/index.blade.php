@extends('layouts.home') {{-- extender de la plantilla home --}}

@section('title','Inicio')

@section('styles')
<link rel="stylesheet" href="{{ asset('css/index.css') }}">
@endsection


@section('body')
<header class="bg-gradient" id="home">
    <div class="container-fluid mt-5" id="desc">
        <div class="row">
            <div class="col-12 align-self-center">
                <div id="p1">
                    <p class="p1">Una mentalidad positiva te abre</p>
                    <p class="p2">un mundo de éxitos y posibilidades,</p>
                </div>
                <div id="p2">
                    <p class="p1">trabaja conmigo y te enseñaré</p>
                    <p class="p2">como hacerlo.</p>
                </div>
            </div>
        </div>
    </div>
</header>

<div id="prueba" class="section bg-white">

    <div class="container">
        <div class="row">
            <div class="col-6 col-sm-6 text-center">
                <img src="images/download.jpg" alt="Prueba" class="img-fluid">
            </div>
            <div class="col-6 col-sm-6 d-flex align-items-center">
                <div>
                    <h2 class="letra-1">Prueba Gratis</h2>
                    <p class="mb-4">Descarga la rutina diaria de motivación que uso para lograr todas mis metas.</p>
                    <a role='button' href="#" class="btn btn-primary btn-lg">Descargar</a>
                </div>
            </div>
        </div>

    </div>

</div>
<!-- // end .section -->

<div class="section bg-light text-center">
    <h2 class="letra-1" class="mb-4">Transformar tu mentalidad no tiene que sentirse como un trabajo pesado.</h2>
    <div class="container">
        <div class="dropdown-divider"></div>
    </div>

    <p class="mt-5">Quieres tener una mentalidad que te permita avanzar en todas las areas de tu vida y lograr lo
        que siempre haz soñado?</p>

    <p class="mt-5">Que tal si cada día despiertas sintiéndote orgullosa acerca de la vida que estas construyendo?
    </p>

    <p class="mt-5">Que pasa si te das cuenta que todos los dias te acercas más al logro de tus metas?</p>

</div>
<!-- // end .section -->


@endsection
