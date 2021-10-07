{{-- @extends('layouts.app')

@section('content') --}}

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesion - INTERCLEAN</title>
    <!-- Styles -->
    <link href="{{ asset('css/register.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>


<body>
    {{-- VIDEO BACKGROUND --}}
    <div class="bg-video-wrap">
        <video src="https://interclean.live/intranet/video.mp4" loop muted autoplay>
        </video>
        <div class="overlay">

            {{-- VIDEO BACKGROUND --}}
            <div id="slideBox">
                <div class="topLayer">
                    <!--Contenido de la derecha-->
                    <div class="right">
                        <div class="content">
                            <div class="row">
                                <div class="text-center justify-content-center">
                                    <img class="logo_registro" src="https://interclean.live/intranet/img/interclean.png"
                                        alt="">
                                </div>
                            </div>
                            <h2>Formulario de registro</h2>

                            {{-- <form method="POST" action="{{ route('register.post') }}"> --}}
                            <form method="POST" action="{{ route('register') }}">
                                @csrf

                                <div class="form-group row">
                                    <label for="nombre"
                                        class="col-md-4 col-form-label text-md-left">{{ __('Nombre') }}</label>

                                    <div class="col-md-6">
                                        <input id="nombre" type="text"
                                            class="form-control @error('nombre') is-invalid @enderror" name="nombre"
                                            value="{{ old('nombre') }}" required autocomplete="nombre" autofocus>

                                        @error('nombre')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="nombreUsuario"
                                        class="col-md-4 col-form-label text-md-left">{{ __('Nombre de Usuario') }}</label>

                                    <div class="col-md-6">
                                        <input id="nombreUsuario" type="text"
                                            class="form-control @error('nombreUsuario') is-invalid @enderror"
                                            name="nombreUsuario" value="{{ old('nombreUsuario') }}" required
                                            autocomplete="nombreUsuario" autofocus>

                                        @error('nombreUsuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password"
                                        class="col-md-4 col-form-label text-md-left">{{ __('Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password" type="password"
                                            class="form-control @error('password') is-invalid @enderror" name="password"
                                            required autocomplete="new-password">

                                        @error('password')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="password-confirm"
                                        class="col-md-4 col-form-label text-md-left">{{ __('Confirmar Contraseña') }}</label>

                                    <div class="col-md-6">
                                        <input id="password-confirm" type="password" class="form-control"
                                            name="password_confirmation" required autocomplete="new-password">
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="online"
                                        class="col-md-4 col-form-label text-md-left">{{ __('Online') }}</label>

                                    <div class="col-md-6">
                                        <input id="online" type="text"
                                            class="form-control @error('online') is-invalid @enderror" name="online"
                                            value="{{ old('online') }}" required autocomplete="online" autofocus>

                                        @error('online')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="tipo_usuario"
                                        class="col-md-4 col-form-label text-md-left">{{ __('Tipo de Usuario') }}</label>

                                    <div class="col-md-6">
                                        <input id="tipo_usuario" type="text"
                                            class="form-control @error('tipo_usuario') is-invalid @enderror"
                                            name="tipo_usuario" value="{{ old('tipo_usuario') }}" required
                                            autocomplete="tipo_usuario" autofocus>

                                        @error('tipo_usuario')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="zona"
                                        class="col-md-4 col-form-label text-md-left">{{ __('Zona') }}</label>

                                    <div class="col-md-6">
                                        <input id="zona" type="text"
                                            class="form-control @error('zona') is-invalid @enderror" name="zona"
                                            value="{{ old('zona') }}" required autocomplete="zona" autofocus>

                                        @error('zona')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="cliente"
                                        class="col-md-4 col-form-label text-md-left">{{ __('Cliente') }}</label>

                                    <div class="col-md-6">
                                        <input id="cliente" type="text"
                                            class="form-control @error('cliente') is-invalid @enderror" name="cliente"
                                            value="{{ old('cliente') }}" required autocomplete="cliente" autofocus>

                                        @error('cliente')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row">
                                    <label for="Estatus"
                                        class="col-md-4 col-form-label text-md-left">{{ __('Estatus') }}</label>

                                    <div class="col-md-6">
                                        <input id="Estatus" type="text"
                                            class="form-control @error('Estatus') is-invalid @enderror" name="Estatus"
                                            value="{{ old('Estatus') }}" required autocomplete="Estatus" autofocus>

                                        @error('Estatus')
                                            <span class="invalid-feedback" role="alert">
                                                <strong>{{ $message }}</strong>
                                            </span>
                                        @enderror
                                    </div>
                                </div>

                                <div class="form-group row mb-0">
                                    <div class="col-md-6 offset-md-4">
                                        <button type="submit" class="btn btn-primary">
                                            {{ __('Registrarse') }}
                                        </button>
                                    </div>
                                    @if (Route::has('login'))
                                        <li class="nav-item retorno-login">
                                            <a class="nav-link"
                                                href="{{ route('login') }}">{{ __('ó Inicia Sesion') }}</a>
                                        </li>
                                    @endif
                                </div>

                            </form>
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
    </script>
    <!-- Styles -->
    <script src="{{ asset('js/preloader.js') }}" rel="stylesheet"></script>
</body>

</html>
{{-- @endsection --}}
