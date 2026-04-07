<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laravel 12</title>

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
                <img src="{{ asset('img/logo.png') }}" alt="logo" class="h-12 w-auto">
            </a>

            <!-- LINKS -->
            <ul class="flex space-x-6 text-lg">
                <li><a href="/" class="hover:text-red-400 transition">Inicio</a></li>
                <li><a href="#" class="hover:text-red-400 transition">Servicios</a></li>
                <li><a href="#" class="hover:text-red-400 transition">Contacto</a></li>
            </ul>
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

        <!-- MAIN -->
        <main class="max-w-7xl mx-auto py-10 px-4">

            <!-- TÍTULO -->
            <div class="py-6 mb-10 text-center bg-red-600 rounded-lg shadow">
                <h1 class="text-white text-3xl font-bold">Bienvenido a la Home</h1>
            </div>

            <!-- GRID DE CARDS -->
            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                        <img src="{{ asset('img/laravel.png') }}" alt="Imagen {{ $i }}" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-5">
                            <h5 class="text-xl font-semibold mb-2">Card {{ $i }}</h5>
                            <p class="text-gray-600 mb-4">Descripción breve de la tarjeta número {{ $i }}.</p>
                            <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                Ver más
                            </a>
                        </div>
                    </div>
                @endfor
            </div>

            <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-2">
                @for ($i = 1; $i <= 3; $i++)
                    <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                        <img src="{{ asset('img/laravel.png') }}" alt="Imagen {{ $i }}" class="w-full h-48 object-cover rounded-t-lg">
                        <div class="p-5">
                            <h5 class="text-xl font-semibold mb-2">Card {{ $i }}</h5>
                            <p class="text-gray-600 mb-4">Descripción breve de la tarjeta número {{ $i }}.</p>
                            <a href="#" class="inline-block bg-blue-600 text-white px-4 py-2 rounded hover:bg-blue-700 transition">
                                Ver más
                            </a>
                        </div>
                    </div>
                @endfor
            </div>
        </main>

        <!-- FOOTER -->
        <footer class="bg-gray-900 text-white text-center py-4 mt-10">
            <p>© {{ date('Y') }} Mi Sitio Web - Todos los derechos reservados.</p>
        </footer>
</body>
