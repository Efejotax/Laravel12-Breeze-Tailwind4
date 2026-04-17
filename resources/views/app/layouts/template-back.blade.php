<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>@yield('titulo', 'Dashboard')</title>

    @vite(['resources/css/app.css', 'resources/js/app.js'])
</head>

<body class="bg-gray-100 text-gray-800">

<!-- LAYOUT GENERAL -->
<div class="flex min-h-screen">

    <!-- SIDEBAR -->
    <aside class="w-64 bg-gray-900 text-white flex flex-col">

        <div class="p-6 text-center border-b border-gray-700">
            <h1 class="text-xl font-bold">Mi Dashboard</h1>
        </div>

        <nav class="flex-1 px-4 py-6 space-y-2">

            <a href="{{ route('dashboard') }}"
               class="block px-4 py-2 rounded hover:bg-gray-700">
                📊 Panel Principal
            </a>

            <a href="{{ route('saludos') }}"
               class="block px-4 py-2 rounded hover:bg-gray-700">
                👋 Saludos
            </a>

            <a href="{{ route('crud') }}"
               class="block px-4 py-2 rounded hover:bg-gray-700">
                🗂 CRUD
            </a>

            <a href="{{ route('rutas') }}"
               class="block px-4 py-2 rounded hover:bg-gray-700">
                🧭 Rutas
            </a>

            <a href="{{ route('productos') }}"
               class="block px-4 py-2 rounded hover:bg-gray-700">
                🛒 Productos
            </a>

            <a href="{{ route('contacto') }}"
               class="block px-4 py-2 rounded hover:bg-gray-700">
                ✉ Contacto
            </a>

        </nav>

        <div class="p-4 border-t border-gray-700">
            <form method="POST" action="{{ route('logout') }}">
                @csrf
                <button type="submit"
                        class="w-full text-center bg-red-600 py-2 rounded hover:bg-red-700">
                    Cerrar sesión
                </button>
            </form>

        </div>

    </aside>

    <!-- CONTENIDO PRINCIPAL -->
    <main class="flex-1 flex flex-col">

        <!-- HEADER -->
        <header class="bg-white shadow p-4 flex justify-between items-center">
            <h2 class="text-2xl font-semibold">@yield('titulo')</h2>

            <div class="flex items-center gap-4">
                <span class="text-gray-600">Usuario Admin</span>
                <img src="https://ui-avatars.com/api/?name=Admin"
                     class="w-10 h-10 rounded-full border">
            </div>
        </header>

        <!-- CONTENIDO DINÁMICO -->
        <section class="p-6">
            @yield('main-content')
        </section>

    </main>

</div>

</body>
</html>
