<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login - Area de administración</title>

    <!-- Bootstrap CSS -->
    <link href={{ asset("css/app.css") }} rel="stylesheet" />
    <link href="{{ asset('fontawesome-5.11.2/css/all.css') }}" rel="stylesheet">
    <link href={{ asset("css/members/style.css") }} rel="stylesheet" />
    <link href={{ asset("css/members/signin.css") }} rel="stylesheet" />


</head>

<body class="text-center">
    <div class="container">
        <h1 class="letra-1">Area de administración</h1>
        <i class="fas fa-user"></i>
        <h2 class="mb-3 font-weight-normal letra-2">Iniciar sesión</h2>
        @if (session('info'))
            <p class="alert alert-danger"> {{ session('info') }}</p>
        @endif        
        <form action="{{ route('admin-login') }}" class="form-signin" method="POST">
            <div class="form-group mb-0">
                <label for="user" class="sr-only">Usuario</label>
                <input name="user" type="user" id="user" value="{{ old('user') }}" class="form-control"
                    placeholder="Nombre de usuario" autofocus>
                @error('user')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-0">
                <label for="password" class="sr-only">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control mb-0 "
                    placeholder="Contraseña">

                @error('password')
                <small id="userHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="remember_me"> Recuérdame
                    </label>
                </div> --}}
            @csrf
            <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Entrar</button>
            <a class="btn btn-sm btn-dark btn-block" href="{{ route('inicio') }}">Ir a la pagina principal</a>
        </form>
    </div>
</body>

</html>
