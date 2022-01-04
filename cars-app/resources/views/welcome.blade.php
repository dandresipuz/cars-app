<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>Car-App</title>
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">

    <!-- Styles -->
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
</head>

<body class="antialiased">
    @include('layouts.navbar')
    <div id="carouselExampleFade" class="carousel slide carousel-fade container" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img src="{{ asset('img/car3.jpg') }}" class="d-block w-100" alt="...">
                <div class="carousel-caption d-none d-md-block">
                    <h5>Quieres ganarte este Automóvil</h5>
                    <p>Solo debes registrar tus datos y cada 5 registros habilitaremos un botón para mostrar un ganador!
                    </p>
                    @if (COUNT($users) > 5)
                        <li class="nav-item">
                            <a class="btn btn-success" href="{{ url('users/win') }}">Ver el ganador</a>
                        </li>
                    @endif
                </div>
            </div>
        </div>
    </div>
    <script src="{{ asset('js/app.js') }}"></script>
</body>

</html>
