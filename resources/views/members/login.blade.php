<!doctype html>
<html lang="es">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <title>Login - Area de miembros</title>

    <!-- Bootstrap CSS -->
    <link href={{ asset("css/app.css") }} rel="stylesheet" />
    <link href="{{ asset('fontawesome-5.11.2/css/all.css') }}" rel="stylesheet">
    <link href={{ asset("css/members/style.css") }} rel="stylesheet" />
    <link href={{ asset("css/members/signin.css") }} rel="stylesheet" />


</head>

<body class="text-center">
    <div class="container">
        <h1 class="letra-1">Area de miembros</h1>
        <i class="fas fa-users"></i>
        <h2 class="mb-3 font-weight-normal letra-2">Iniciar sesión</h2>
        @if (session('info'))
            <p class="alert alert-danger"> {{ session('info') }}</p>
        @endif
        @if (session('active'))
            <p class="alert alert-danger"> Su cuenta esta inactiva, por favor poganse en contacto con <a href="mailto:infodianagvara@gmail.com" class="alert-link">Diana Guevara</a>. </p>
        @endif
        <form action="{{ route('login') }}" class="form-signin" method="POST">
            <div class="form-group mb-0">
                <label for="email" class="sr-only">Correo</label>
                <input name="email" type="email" id="email" value="{{ old('email') }}" class="form-control"
                    placeholder="Correo electronico" autofocus>
                @error('email')
                <small class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>
            <div class="form-group mb-0">
                <label for="password" class="sr-only">Contraseña</label>
                <input type="password" name="password" id="password" class="form-control mb-0 "
                    placeholder="Contraseña">

                @error('password')
                <small id="emailHelp" class="form-text text-danger">{{ $message }}</small>
                @enderror
            </div>

            {{-- <div class="checkbox mb-3">
                    <label>
                        <input type="checkbox" name="remember_me"> Recuérdame
                    </label>
                </div> --}}
            @csrf
            <button class="btn btn-lg btn-primary btn-block mt-2" type="submit">Entrar</button>
            <a class="btn btn-sm btn-dark btn-block" href="{{ route('inicio') }}">Volver a la pagina de inicio</a>
        </form>
    </div>
</body>

</html>
