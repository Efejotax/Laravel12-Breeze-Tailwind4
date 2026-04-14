<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    {{--título--}}
    <title>@yield('titulo', 'app laravel 12')</title>

    {{--Favicon--}}
    <link rel="icon" type="image/png" href="{{ asset('assets/img/logo.png') }}">

    {{-- Linkeando estilos en path: public/assets --}}
    <link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
    <link rel="stylesheet" href="{{asset('assets/css/saludos.css')}}">
    @yield('stilos-css')


    {{-- Directiva Blade para importar los estilos css y el JS - definida en Vite.config.js --}}
    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-900">

<!-- NAVBAR -->
<header class="bg-gray-900 text-white">
    <nav class="max-w-7xl mx-auto px-4 flex items-center h-16">

        <!-- LOGO + LINKS IZQUIERDA -->
        <div class="flex items-center space-x-8">
            <!-- LOGO -->
            <a href="/" class="flex items-center">
                <img src="{{ asset('assets/img/logo.png') }}" alt="logo" class="h-12 w-auto">
            </a>

            <!-- MENU NAV BAR LINKS -->
            @include('app.partials.menu-main-navbar')
        </div>

        <!-- LOGIN / REGISTER / USER (A LA DERECHA) -->
        <div class="flex items-center space-x-4 ml-auto">

            @auth
                <a href="{{ route('dashboard') }}"
                   class="bg-blue-600 px-4 py-2 rounded hover:bg-blue-700 transition">
                    Dashboard
                </a>

                <form method="POST" action="{{ route('logout') }}">
                    @csrf
                    <button type="submit"
                            class="bg-red-600 px-4 py-2 rounded hover:bg-red-700 transition">
                        Logout
                    </button>
                </form>

            @else
                <a href="{{ route('login') }}"
                   class="px-4 py-2 rounded hover:text-red-400 transition">
                    Login
                </a>

                <a href="{{ route('register') }}"
                   class="bg-green-600 px-4 py-2 rounded hover:bg-green-700 transition">
                    Register
                </a>
            @endauth
        </div>
    </nav>
</header>


@yield('main-content')

@yield('menu-rutas-2')
@yield('menu-rutas-1')


<!-- FOOTER -->
<footer class="bg-gray-900 text-white text-center py-4 mt-10">
    <p>© {{ date('Y') }} Mi Sitio Web - Todos los derechos reservados.</p>
</footer>

@yield('scripts')

</body>
