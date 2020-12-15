<nav class="navbar fixed-top navbar-expand-md navbar-dark bg-dark shadow-sm">
    <div class="container">
        <a class="navbar-brand" href="{{ url('/') }}">
            <img src="{{ asset('img/logo.png') }}" height="50" alt="" loading="lazy">
        </a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
            aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
            <span class="navbar-toggler-icon"></span>
        </button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <!-- Left Side Of Navbar -->
            <ul class="navbar-nav mr-auto">

            </ul>

            <!-- Right Side Of Navbar -->
            <ul class="navbar-nav ml-auto" id="menu">
                <li class="nav-item">
                    <a class="nav-link" href="#somos">QUINES SOMOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#servicios">SERVICIOS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#galeria">GALERÍA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#ofertas">OFERTAS</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#contacto">CONTACTO</a>
                </li>
            </ul>
            <ul class="navbar-nav">
                <!-- Authentication Links -->
                @livewire('cart')
                @guest
                    @if (Route::has('login'))
                    <li class="nav-item">
                        <a class="btn btn-danger" href="{{ route('login') }}">{{ __('INGRESAR') }}</a>
                    </li>
                    @endif
                @else
                <li class="nav-item dropdown">
                    <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button"
                        data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                        {{ strtoupper(Auth::user()->name) }}
                    </a>

                    <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                        <a class="dropdown-item" href="{{ route('home') }}">PANEL</a>
                        <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                             document.getElementById('logout-form').submit();">
                            SALIR
                        </a>

                        <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                            @csrf
                        </form>
                    </div>
                </li>
                @endguest
            </ul>
        </div>
    </div>
</nav>
