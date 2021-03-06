@extends('layouts.theme.tablero')

@section('content')
    <style>
        @import url("https://fonts.googleapis.com/css?family=Montserrat+Alternates:400,700");

        :root {
            --sun-color: #ffe65c;
            --sun-color-rgba: rgb(255, 230, 92);
            --card-sunny: #ffa333;
            --moon-night: #2f3475;
            --moon: #ffe646;
            --moon-wave: rgb(79, 85, 148);
            --snow-day: #1ec9ed;
            --foreground-mountain: #82dff9;
            --background-mountain: #00b4d8;
        }

        body {
            background-color: #dbf8ff;
        }

        .grid {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
        }

        .card--weather {
            margin: 1rem 2rem;
            width: 10rem;
            height: 10rem;
            border-radius: 0.5rem;
            position: relative;
            overflow: hidden;
        }

        .weather--indicator {
            position: absolute;
            font-size: 2.5rem;
            color: white;
            z-index: 2;
            font-family: "Montserrat Alternates", sans-serif;
            bottom: 1.5rem;
            left: 1.5rem;
        }

        .moon-indicator {
            text-shadow: 1px 3px #182067;
        }

        .sun-indicator {
            text-shadow: 1px 3px #ff9406;
        }

        .sunny-day {
            background-color: var(--card-sunny);
            box-shadow: 0 5px 10px var(--card-sunny);
            animation: 0.3s ease-in-out sunny-hover--back both;
        }

        .card--weather.sunny-day:hover {
            animation: 0.3s ease-in-out 0s sunny-hover both;
        }

        .card--weather.moon-night:hover {
            animation: 0.3s ease-in-out 0s moon-hover both;
        }

        .card--weather.snow-day:hover {
            animation: 0.3s ease-in-out 0s snow-hover both;
        }

        .sunny-day .sun {
            width: 7rem;
            height: 7rem;
            border-radius: 100%;
            position: absolute;
            top: -4rem;
            right: -2.8rem;
            background-color: var(--sun-color);
            animation: sun-rays 4s infinite;
            box-shadow: 0 0 1rem rgba(255, 192, 98, 0.4), 0 0 0 2.8rem rgb(255, 198, 102),
                0 0 0 3rem rgb(255, 175, 73), 0 0 0 4.8rem rgb(255, 177, 77);
        }

        .moon-night {
            background-color: var(--moon-night);
            box-shadow: 0 5px 10px var(--moon-night);
            animation: 0.3s ease-in-out moon-hover--back both;
        }

        .snow-day {
            background-color: var(--snow-day);
            box-shadow: 0 5px 10px var(--snow-day);
            animation: 0.3s ease-in-out snow-hover--back both;
        }

        .foreground-mountain {
            background-color: var(--foreground-mountain);
            width: 34rem;
            height: 10rem;
            border-radius: 100%;
            position: absolute;
            bottom: -6.6rem;
            left: 1rem;
            box-shadow: 0 0 2rem #1ec9ed;
        }

        .background-mountain {
            background-color: var(--background-mountain);
            width: 24rem;
            height: 10rem;
            border-radius: 100%;
            position: absolute;
            top: 5rem;
            left: -17rem;
            box-shadow: 0 0 2rem #1ec9ed;
        }

        .moon-night .moon {
            width: 2.5rem;
            height: 2.5rem;
            background-color: var(--moon);
            border-radius: 100%;
            position: absolute;
            top: 2rem;
            right: 1.5rem;
            animation: moon-rays 4s infinite;
            box-shadow: 0 0 1rem rgb(79, 85, 148), 0 0 0 1.5rem rgb(79, 85, 148),
                0 0 3rem rgb(79, 85, 148), 0 0 0 3.5rem rgb(65, 73, 137),
                0 0 5rem rgb(44, 52, 114);
        }

        @keyframes snow-hover {
            0% {
                box-shadow: 0 5px 10px var(--snow-day);
            }

            100% {
                box-shadow: 0 10px 20px var(--snow-day);
            }
        }

        @keyframes snow-hover--back {
            0% {
                box-shadow: 0 10px 20px var(--snow-day);
            }

            100% {
                box-shadow: 0 5px 10px var(--snow-day);
            }
        }

        @keyframes moon-hover {
            0% {
                box-shadow: 0 5px 10px var(--moon-night);
            }

            100% {
                box-shadow: 0 10px 20px var(--moon-night);
            }
        }

        @keyframes moon-hover--back {
            0% {
                box-shadow: 0 10px 20px var(--moon-night);
            }

            100% {
                box-shadow: 0 5px 10px var(--moon-night);
            }
        }

        @keyframes sunny-hover {
            0% {
                box-shadow: 0 5px 10px var(--card-sunny);
            }

            100% {
                box-shadow: 0 10px 20px var(--card-sunny);
            }
        }

        @keyframes sunny-hover--back {
            0% {
                box-shadow: 0 10px 20px var(--card-sunny);
            }

            100% {
                box-shadow: 0 5px 10px var(--card-sunny);
            }
        }

        @keyframes sun-rays {
            0% {
                box-shadow: 0 0 1rem rgba(255, 192, 98, 0.4), 0 0 0 2.8rem rgb(255, 198, 102),
                    0 0 0 3rem rgb(255, 175, 73), 0 0 0 4.8rem rgb(255, 177, 77);
            }

            50% {
                box-shadow: 0 0 0.8rem rgba(255, 192, 98, 0.4),
                    0 0 0 2.2rem rgb(255, 198, 102), 0 0 0 2.8rem rgb(255, 175, 73),
                    0 0 0 4.4rem rgb(255, 177, 77);
            }

            100% {
                box-shadow: 0 0 1rem rgba(255, 192, 98, 0.4), 0 0 0 2.8rem rgb(255, 198, 102),
                    0 0 0 3rem rgb(255, 175, 73), 0 0 0 4.8rem rgb(255, 177, 77);
            }
        }

        @keyframes moon-rays {
            0% {
                box-shadow: 0 0 1rem rgb(79, 85, 148), 0 0 0 1.5rem rgb(79, 85, 148),
                    0 0 3rem rgb(79, 85, 148), 0 0 0 3.5rem rgb(65, 73, 137),
                    0 0 5rem rgb(44, 52, 114);
            }

            50% {
                box-shadow: 0 0 1rem rgb(79, 85, 148), 0 0 0 1.8rem rgb(79, 85, 148),
                    0 0 3rem rgb(79, 85, 148), 0 0 0 3.3rem rgb(65, 73, 137),
                    0 0 5rem rgb(44, 52, 114);
            }

            100% {
                box-shadow: 0 0 1rem rgb(79, 85, 148), 0 0 0 1.5rem rgb(79, 85, 148),
                    0 0 3rem rgb(79, 85, 148), 0 0 0 3.5rem rgb(65, 73, 137),
                    0 0 5rem rgb(44, 52, 114);
            }
        }

    </style>

    <h2 class="text-center text-uppercase "> {{ __('BIENVENIDO: ') }} {{ Auth::user()->nombreUsuario }} </h2>
    <div class="grid">
        <div class="card--weather sunny-day">
            <div class="bg--illustration">
                <div class="sun"></div>
            </div>
            <div class="weather--indicator sun-indicator">36??</div>
        </div>
        <div class="card--weather moon-night">
            <div class="bg--illustration">
                <div class="moon"></div>
            </div>
            <div class="weather--indicator moon-indicator">26??</div>
        </div>
        <div class="card--weather snow-day">
            <div class="bg--illustration">
                <div class="moutains">
                    <div class="background-mountain"></div>
                    <div class="foreground-mountain"></div>
                </div>
            </div>
            <div class="weather--indicator snow-indicator">26??</div>
        </div>
    </div>

@endsection
