<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Template Pastel</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-purple-50 text-gray-800">

<!-- NAVBAR -->
<header class="bg-white shadow-sm border-b border-purple-100">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-purple-600">PastelUI</h1>

        <nav class="space-x-6">
            <a href="/" class="hover:text-purple-600">Inicio</a>
            <a href="/home" class="hover:text-purple-600">Dashboard</a>
            <a href="#" class="hover:text-purple-600">Acerca</a>
            <a href="#" class="hover:text-purple-600">Contacto</a>
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="bg-gradient-to-r from-purple-400 to-pink-300 text-white py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h1 class="text-5xl font-extrabold mb-4 drop-shadow-md">Diseño Suave y Elegante</h1>
        <h2 class="text-3xl font-extrabold mb-4 drop-shadow-md" >Path: Layout/template.blade.php</h2>
        <p class="text-lg opacity-90 mb-8">
            Un template minimalista con tonos pastel para tus proyectos en Laravel 12.
        </p>

        <a href="/home" class="bg-white text-purple-600 px-8 py-3 rounded-lg font-semibold shadow hover:bg-purple-50 transition">
            Explorar
        </a>
    </div>
</section>

<!-- SECCIÓN DE CARDS -->
@yield('content')

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 py-6 mt-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p>&copy; {{ date('Y') }} PastelUI. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>

