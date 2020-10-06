@extends('layouts.members.main')

@section('name',"$member->name $member->last_name")

@section('body')
<!-- Page Content -->
<div class="container">

    <div class="row">

        {{-- panel colum --}}
        <div class="col-lg-4 mt-5">
            <div class="list-group" id="list-tab" role="tablist">
                @foreach ($temas as $tema)
                <a class="list-group-item list-group-item-action shadow-sm {{ $loop->index == 0 ? 'active shadow':'' }}"
                    data-toggle="list" href="#tema{{ $loop->index + 1}}" role="tab"
                    aria-controls="{{ $tema->topic }}">{{ $tema->topic }}</a>
                @endforeach

            </div>

            <a href="{{ route('miembros-home') }}" class="btn btn-dark btn-md btn-block mt-5">Atrás</a>
        </div>
        <!-- Post Content Column -->
        <div class="col-lg-8">
            <div class="tab-content" id="nav-tabContent">
                @foreach ($temas as $tema)

                <div class="tab-pane fade show {{ $loop->index == 0 ? 'active':'' }}" id="tema{{ $loop->index + 1}}">
                    <!-- Title -->
                    <h1 class="mt-5">{{ $tema->topic }}</h1>
                    <hr>

                    <!-- Preview Image -->
                    <img class="img-fluid rounded"
                src="{{ asset("storage/images/topics/{$tema->id}.jpg") }}" alt="{{$tema->topic}}">

                   

                   @if ($tema->description)
                   
                        <!-- Post Content -->
                    <p>
                        {!! nl2br($tema->description) !!}
                    </p>

                    <hr>
                   @endif
                   {{-- video --}}
                   @if ($tema->video)
                        <!-- Post Content -->
                    <div class="video">
                        <video width="100%" height="400" controls>
                            <source src="{{ asset("videos/members/modulo{$module->image}.mp4") }}" type="video/mp4">                           
                          Your browser does not support the video tag.
                          </video>
                    </div>

                    <hr>
                   @endif

                    {{-- pdf --}}
                    @if ($tema->pdf == 'si')
                        @if (session('pdf'))
                            <div class="alert alert-success shadow py-3 text-center mx-auto my-5 rounded alert-dismissible fade show"
                                role="alert">
                                PDF descargado, puedes descargarlo todas las veces que quieras!
                                <button type="button" class="close" data-dismiss="alert" aria-label="Close">
                                    <span aria-hidden="true">&times;</span>
                                </button>
                            </div>
                        @endif
                        <a href="{{route('descargar-pdf',$tema->id)}}"
                            class="btn btn-dark btn-md btn-block mt-5">Descargar PDF</a>
                    @endif

                </div>

                @endforeach
            </div>
        </div>

    </div>
    <!-- /.row -->
    <div class="row">
        <div class="col-12">
            <!-- Comments Form -->
            <div class="card my-4">
                <h5 class="card-header">Deja un comentario:</h5>
                <div class="card-body">
                    <form method="POST" action="{{ route('comentar') }}">
                        @csrf
                        <input type="hidden" name="member_id" value="{{ $member->id }}">
                        <input type="hidden" name="module_id" value="{{ $module->id }}">
                        <div class="form-group">
                            <textarea class="form-control" name="comment" rows="3">{{ old('comment') }}</textarea>
                            @error('comment')
                            <small class="text-danger my-0"> {{ $message }}</small>
                            @enderror
                        </div>
                        <button type="submit" class="btn btn-primary">Comentar</button>
                    </form>
                </div>
            </div>

            @foreach ($comments as $comment)
            <!-- Comment -->
            <div class="media mb-4 py-4 px-4 bg-light shadow rounded">
                {{-- <img class="d-flex mr-3 rounded-circle" src="http://placehold.it/50x50" alt=""> --}}
                <div class="media-body">
                    <h5 class="name mt-0">{{ $comment->name }} {{ $comment->last_name }}</h5>
                    <p class="comment mb-1">
                        {!! nl2br($comment->comment) !!}
                    </p>
                    <small class="float-right text-muted">{{ $comment->created_at }}</small>
                    @if ($comment->instagram)
                    <a class="instagram" href="http://www.instagram.com/{{ $comment->instagram }}"> <small><i
                                class="fab fa-instagram"></i>{{$comment->instagram}}</small></a>
                    @endif
                </div>
            </div>
            @endforeach

        </div>
    </div>
    {{-- /.row --}}
</div>
<!-- /.container -->


@endsection
