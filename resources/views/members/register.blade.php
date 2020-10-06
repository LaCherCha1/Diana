<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Registrarse - Area de miembros</title>

    {{-- <link rel="canonical" href="https://getbootstrap.com/docs/4.3/examples/sign-in/"> --}}

    <!-- Bootstrap CSS -->
    <link href={{ asset("css/app.css") }} rel="stylesheet" />
    <link href="{{ asset('fontawesome-5.11.2/css/all.css') }}" rel="stylesheet">
    <link href={{ asset("css/members/register.css") }} rel="stylesheet" />


</head>

<body class="text-center">
    <div class="container">
       @if ($register->registered)
        <h1>Saludos, {{$register->name}} ya tienes una cuenta del area de miembros, por favor dirigete a iniciar sesión</h1>
        <a href="{{route('login-form')}}" class="btn btn-primary btn-block">Iniciar sesión</a>
       @else
       <h1>Saludos, {{$register->name}} ahora puedes registrarte en el area de miembros</h1>
       <i class="fas fa-users"></i>

       <div class="container text-left form">
       <form method="POST" action="{{route('registrar-nuevo')}}">
           @csrf
           <input type="hidden" name="token" value="{{$register->token}}">
               <div class="row">
                   <div class="col">
                       <label for="name">Nombre</label>
                       <input class="form-control" id="name" name="name" type="text" value="{{$register->name ?? old('name')}}">
                       @error('name')
                       <small class="form-text text-muted">{{ $message }}</small>
                       @enderror
                   </div>
                   <div class="col">
                       <label for="last_name">Apellido</label>
                       <input class="form-control" id="last_name" name="last_name" type="text" value="{{$register->last_name ?? old('last_name)')}}">
                       @error('last_name')
                       <small class="form-text text-muted">{{ $message }}</small>
                       @enderror
                   </div>
               </div>
               <div class="row">
                   <div class="col my-2">
                       <label class="sr-only" for="instagram">Username</label>
                       <div class="input-group">
                           <div class="input-group-prepend">
                               <div class="input-group-text">@</div>
                           </div>
                       <input type="text" class="form-control" id="instagram" name="instagram" value="{{old('instagram')}}" placeholder="Usuario de Instagram">
                       </div>
                   </div>
               </div>

               <div class="form-group">
                   <label for="email">Correo electronico</label>
                   <input class="form-control" id="email" name="email" type="email" value="{{$register->email ?? old('email')}}" readonly>
                   
               </div>
               <div class="form-group">
                   <label for="password">Contraseña</label>
                   <input type="password" class="form-control" placeholder="Crea una contraseña para tu cuenta."
                       id="password" name="password">
                       @error('password')
                       <small class="form-text text-muted">{{ $message }}</small>
                       @enderror
               </div>

               <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
           </form>
       </div>
       @endif

    </div>
</body>

</html>
