<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Inicio de Sesion</title>

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
        integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
    <!-- Font Awesome -->
    <link href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.14.0/css/all.min.css" rel="stylesheet">
    <!-- Styles -->
    <link href="{{ asset('css/login.css') }}" rel="stylesheet">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    <link href="{{ asset('css/preloader.css') }}" rel="stylesheet">
    <!-- Styles -->

    <style>
        @keyframes loading {

            0%,
            80%,
            100% {
                box-shadow: 0 2.5em 0 -1.3em;
            }

            40% {
                box-shadow: 0 2.5em 0 0;
            }
        }

    </style>

</head>

<body style="overflow-y: hidden;">
    {{-- PRELOADER --}}
    <div class="contenedor_loader">
        <div class="container-fluid">
            <div class="row text-xl-center justify-content-center">
                <div class="col-lg-auto text-center">
                    <img id="load3r" class="loadees-inicio" src="https://interclean.live/intranet/img/InterCleanP.png"
                        alt="" width="40%">
                </div>
                <div class="col-lg-auto text-center justify-content-center ">
                    <div class="load3r">
                    </div>
                </div>
            </div>
        </div>
    </div>
    {{-- PRELOADER// --}}

    {{-- VIDEO BACKGROUND --}}
    <div class="bg-video-wrap">
        <video src="https://interclean.live/intranet/video.mp4" loop muted autoplay>
        </video>
        <div class="overlay">

            {{-- VIDEO BACKGROUND --}}


            {{-- -------------------------------------------------Login-ICIntranet------------------------------------------ --}}



            <div class="container">
                <div class="middle">

                    <div id="login" class="col-6 col-md-6 ">
                        <form method="POST" action="{{ route('login') }}">
                            @csrf

                            <p><span class="fa fa-user"></span>
                                <input id="nombreUsuario" type="text" Placeholder="Usuario" @error('nombreUsuario')
                                    is-invalid @enderror name="nombreUsuario" value="{{ old('nombreUsuario') }}"
                                    required autocomplete="nombreUsuario" autofocus>
                                @error('nombreUsuario')
                                    <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span>
                                @enderror
                            </p>

                            <p><span class="fa fa-lock"></span>
                                <input id="password" type="password" Placeholder="Contraseña" @error('password')
                                    is-invalid @enderror name="password" required autocomplete="current-password">
                                @error('password')
                                    <span class="invalid-feedback" role="alert">
                                        <strong>{{ $message }}</strong>
                                    </span>
                                @enderror
                            </p>


                            <div class="row">
                                <div class="col text-center">
                                    <span style="width:100%; text-align:left;  display: inline-block;">
                                        <input type="submit" id="login" name="login" value="Acceder">
                                    </span>
                                </div>
                                <div class="col text-center">
                                    @guest
                                        @if (Route::has('register'))
                                            <span class="registrar"
                                                style="width:100%; text-align:left;  display: inline-block;">
                                                <a class="nav-link"
                                                    href="{{ route('register') }}">{{ __('Registrarse') }}</a>
                                            </span>
                                        @endif
                                    @endguest
                                </div>
                            </div>

                            <div class="row">
                                <span style="width:48%; text-align:left;  display: inline-block;">
                                    @if (Route::has('password.request'))
                                        <a class="small-text" href="{{ route('password.request') }}"> Olvidaste tu
                                            contraseña?</a>
                                    @endif
                                </span>
                            </div>
                        </form>
                    </div> <!-- end login -->

                    <div class="col-6 col-md-6">
                        <img width="100%" src="https://interclean.live/intranet/img/InterCleanP.png" alt="">
                    </div>
                </div>
            </div>

            {{-- -------------------------------------------------Login-ICIntranet------------------------------------------ --}}


            <script>
                //   Ocultar preloader despues de la carga de imagenes o videos
                window.addEventListener('load', () => {
                    const contenedor_loader = document.querySelector('.contenedor_loader')
                    contenedor_loader.style.opacity = 0;
                    contenedor_loader.style.visibility = 'hidden';
                })
            </script>

            <!-- AJAX -->
            <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.10.2/jquery.min.js"></script>

            <!-- Option 1: jQuery and Bootstrap Bundle (includes Popper) -->
            <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
                        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
            </script>
            <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js"
                        integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous">
            </script>

</body>

</html>
