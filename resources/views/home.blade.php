<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Home - Laravel 12 + Tailwind 4</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-100 text-gray-800">

<!-- HEADER -->
<header class="bg-white shadow">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-indigo-600">Mi Sitio</h1>

        <!-- NAVBAR -->
        <nav class="space-x-6">
            <a href="#" class="text-gray-700 hover:text-indigo-600">Inicio</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600">Servicios</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600">Acerca</a>
            <a href="#" class="text-gray-700 hover:text-indigo-600">Contacto</a>
        </nav>
    </div>
</header>

<!-- BODY -->
<main class="max-w-7xl mx-auto px-6 py-10">
<h1 class="text-4xl text-blue-900 font-semibold mb-8 text-center">Página Home simple</h1>
    <h2 class="text-3xl font-semibold mb-8 text-center">Path: /views/home</h2>
    <h3 class="text-3xl text-blue-900 font-semibold mb-8 text-center">Tarjetas</h3>

    <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-4 gap-6">

        <!-- CARD 1 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2">Card 1</h3>
            <p class="text-gray-600 mb-4">Descripción breve de la tarjeta número uno.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2">Card 2</h3>
            <p class="text-gray-600 mb-4">Contenido informativo o promocional para esta tarjeta.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2">Card 3</h3>
            <p class="text-gray-600 mb-4">Texto descriptivo que explica el contenido de esta tarjeta.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

        <!-- CARD 4 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2">Card 4</h3>
            <p class="text-gray-600 mb-4">Información adicional o llamada a la acción.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

        <!-- CARD 5 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2">Card 5</h3>
            <p class="text-gray-600 mb-4">Descripción breve de la tarjeta número uno.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

        <!-- CARD 6 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2">Card 6</h3>
            <p class="text-gray-600 mb-4">Contenido informativo o promocional para esta tarjeta.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

        <!-- CARD 7 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2">Card 7</h3>
            <p class="text-gray-600 mb-4">Texto descriptivo que explica el contenido de esta tarjeta.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>

        <!-- CARD 8 -->
        <div class="bg-white shadow rounded-lg p-6 hover:shadow-lg transition">
            <h3 class="text-xl font-semibold mb-2">Card 8</h3>
            <p class="text-gray-600 mb-4">Información adicional o llamada a la acción.</p>
            <a href="#" class="text-indigo-600 font-medium hover:underline">Leer más</a>
        </div>



    </div>
</main>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 py-6 mt-10">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p>&copy; {{ date('Y') }} Mi Sitio. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>

