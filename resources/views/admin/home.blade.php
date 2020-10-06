@extends('layouts.admin.main')

@section('name',ucfirst($admin->user))

@section('body')

<div class="container mt-5">
   <div class="row row-cols-md-2 row-cols-sm-1">
    <div class="col">
        <a type="button" href="{{route('admin-members')}}" class="btn btn-primary btn-lg btn-block my-3">Miembros</a>
    </div>
    <div class="col">
        <a type="button" href="{{route('admin-modules')}}" class="btn btn-primary btn-lg btn-block mt-3">Modulos</a>
    </div>
   </div>
</div>
@endsection
