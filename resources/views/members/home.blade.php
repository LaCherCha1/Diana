@extends('layouts.members.main')

@section('name',"$member->name $member->last_name")
    

@section('body')
<!-- Page Content -->
<div class="container">

    <div class="row">

        <!-- Blog Entries Column -->
        <div class="col-12">

        <h1 class="my-4 letra-1">Manifestando mis sueños</h1>

            @foreach ($modulos as $modulo)
            <!-- Blog Post -->
            <div class="card mb-4 shadow">
            <img  class="card-img-top" src="{{ asset("storage/images/modules/{$modulo->id}.jpg") }}" alt="imagen {{$modulo->title}}">
                <div class="card-body">
                    <h2 class="card-title letra-2">{{ $modulo->title }}</h2>
                    <p class="card-text">{!! nl2br($modulo->description) !!}</p>
                    <a href="{{ url("miembros/modulo/{$modulo->id}") }}" class="btn btn-primary">Acceder al modulo</a>
                </div>
            </div>
            @endforeach


        </div>

    </div>

</div>
<!-- /.container -->
@endsection
