<!doctype html>
<html lang="{{ app()->getLocale() }}">
    <head>
        <meta charset="utf-8">
        <meta http-equiv="X-UA-Compatible" content="IE=edge">
        <meta name="viewport" content="width=device-width, initial-scale=1">

<<<<<<< HEAD
        <title>Laravel</title>
=======
        <title>Mi Expresión Cuenta</title>
>>>>>>> f4f9550ce00473f57194d4d8ee73c88b03ac9e98

        <!-- Fonts -->
        <link href="https://fonts.googleapis.com/css?family=Raleway:100,600" rel="stylesheet" type="text/css">

        <!-- Styles -->
        <style>
            html, body {
                background-color: #3E64FF;
                color: #fff;
                font-family: 'Raleway', sans-serif;
                font-weight: 100;
                height: 100vh;
                margin: 0;
            }

            .full-height {
                height: 100vh;
            }

            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }

            .position-ref {
                position: relative;
            }

            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }

            .content {
                text-align: center;
            }

            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff;
                padding: 0 25px;
                font-size: 8px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }

            .m-b-md {
                margin-bottom: 30px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height">
            @if (Route::has('login'))
                <div class="top-right links">
                    @if (Auth::check())
<<<<<<< HEAD
                        <a linhref="{{ url('/home') }}">Inicio</a>
=======
                        <a href="{{ url('/home') }}">Inicio</a>
>>>>>>> f4f9550ce00473f57194d4d8ee73c88b03ac9e98
                    @else
                        <a href="{{ url('/login') }}">Iniciar sesión</a>
                        <a href="{{ url('/register') }}">Registrarse</a>
                    @endif
                </div>
            @endif
          
            <div class="content">
                <div class="title m-b-md">

                  <a> Mi expresión cuenta</a>
                </div>
            </div>
        </div>
    </body>
</html>
