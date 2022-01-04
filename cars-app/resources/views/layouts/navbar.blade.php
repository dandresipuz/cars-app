<nav class="navbar navbar-expand-lg navbar-light bg-light">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            {{ config('app.name', 'Car-APP') }}
        </a>
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav me-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ms-auto">
                <!-- Authentication Links -->
                @guest
                    <li class="nav-item dropdown">
                        <a class="nav-link dropdown-toggle" data-bs-toggle="dropdown" href="#" role="button"
                            aria-haspopup="true" aria-expanded="false">Exportar</a>
                        <div class="dropdown-menu" style="">
                            <a class="dropdown-item" href="{{ url('users/export/excel') }}">Usuarios</a>
                            <a class="dropdown-item" href="{{ url('departamentos/export/excel') }}">Departamentos</a>
                            <a class="dropdown-item" href="{{ url('cities/export/excel') }}">Ciudades</a>
                    </li>

                    @if (Route::has('register'))
                        <li class="nav-item">
                            <a class="btn btn-info" href="{{ route('users.create') }}">Registrate</a>
                        </li>
                    @endif

                @endguest
            </ul>
        </div>
    </div>
</nav>
