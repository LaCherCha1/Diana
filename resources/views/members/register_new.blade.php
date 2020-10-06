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
    <link href={{ asset("css/members/style.css") }} rel="stylesheet" />
    <link href={{ asset("css/members/register.css") }} rel="stylesheet" />


</head>

<body class="text-center">
    <div class="container">
      
       <h1 class="letra-1">Registrate para obtener acceso al area de miembros</h1>
       <i class="fas fa-users"></i>

       <div class="container text-left form">
       <form method="POST" action="{{route('registrar-normal-nuevo')}}">
           @csrf
          
               <div class="row">
                   <div class="col">
                       <label class="letra-2" for="name">Nombre</label>
                       <input class="form-control" id="name" name="name" type="text" value="{{old('name')}}">
                       @error('name')
                       <small class="form-text text-danger">{{ $message }}</small>
                       @enderror
                   </div>
                   <div class="col">
                       <label class="letra-2" for="last_name">Apellido</label>
                       <input class="form-control" id="last_name" name="last_name" type="text" value="{{old('last_name)')}}">
                       @error('last_name')
                       <small class="form-text text-danger">{{ $message }}</small>
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
                   <label class="letra-2" for="email">Correo electronico</label>
                   <input class="form-control" id="email" name="email" type="email" value="{{old('email')}}">
                   @error('email')
                   <small class="form-text text-danger">{{ $message }}</small>
                   @enderror
               </div>
               <div class="form-group">
                   <label class="letra-2" for="password">Contraseña</label>
                   <input type="password" class="form-control" placeholder="Crea una contraseña para tu cuenta."
                       id="password" name="password">
                       @error('password')
                       <small class="form-text text-danger">{{ $message }}</small>
                       @enderror
               </div>

               <button type="submit" class="btn btn-primary btn-block">Registrarse</button>
           </form>
       </div>
       

    </div>
</body>

</html>
