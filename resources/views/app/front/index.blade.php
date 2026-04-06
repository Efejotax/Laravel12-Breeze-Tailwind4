<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">

<!-- HEADER -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-indigo-600">Mi Aplicación</h1>

        <!-- NAVBAR -->
        <nav class="space-x-6">
            <a href="/" class="text-gray-700 hover:text-indigo-600">Inicio</a>
            <a href="/home" class="text-gray-700 hover:text-indigo-600">Home</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600">Servicios</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600">Contacto</a>
        </nav>
    </div>
</header>

<!-- HERO / BANNER -->
<section class="bg-indigo-600 text-white py-20">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-4xl font-bold mb-4">Bienvenido a la index page frontend</h2>
        <p class="text-lg opacity-90 mb-6">Una plantilla inicial para comenzar tu proyecto con Laravel 12 y Tailwind 4.</p>
        <a href="/home" class="bg-white text-indigo-600 px-6 py-3 rounded-lg font-semibold shadow hover:bg-gray-100 transition">
            Ir al Home
        </a>
    </div>
</section>

<!-- CONTENIDO PRINCIPAL -->
<main class="max-w-7xl mx-auto px-6 py-12">

    <h3 class="text-3xl font-semibold mb-8 text-center">Características</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

        <!-- CARD 1 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h4 class="text-xl font-semibold mb-2">Rápido</h4>
            <p class="text-gray-600 mb-4">Laravel y Tailwind permiten desarrollar interfaces modernas con gran velocidad.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h4 class="text-xl font-semibold mb-2">Seguro</h4>
            <p class="text-gray-600 mb-4">Breeze ofrece autenticación lista para usar con buenas prácticas.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h4 class="text-xl font-semibold mb-2">Escalable</h4>
            <p class="text-gray-600 mb-4">Perfecto para proyectos pequeños o grandes aplicaciones empresariales.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

    </div>
</main>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 py-6 mt-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p>&copy; {{ date('Y') }} Mi Aplicación. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>

