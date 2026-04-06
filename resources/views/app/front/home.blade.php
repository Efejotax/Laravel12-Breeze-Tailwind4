<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Inicio</title>
    @vite('resources/css/app.css')
</head>

<body class="bg-gray-50 text-gray-800">

<!-- NAVBAR -->
<header class="bg-white shadow-sm">
    <div class="max-w-7xl mx-auto px-6 py-4 flex justify-between items-center">
        <h1 class="text-2xl font-bold text-emerald-600">Mi Proyecto</h1>

        <nav class="space-x-6">
            <a href="/" class="hover:text-emerald-600">Inicio</a>
            <a href="/home" class="hover:text-emerald-600">Dashboard</a>
            <a href="#" class="hover:text-emerald-600">Blog</a>
            <a href="#" class="hover:text-emerald-600">Contacto</a>
        </nav>
    </div>
</header>

<!-- HERO -->
<section class="bg-emerald-600 text-white py-24">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <h2 class="text-5xl font-extrabold mb-4">Construye algo increíble</h2>
        <p class="text-lg opacity-90 mb-8">
            Laravel 12 y Tailwind 4 te permiten crear aplicaciones modernas, rápidas y elegantes.
        </p>

        <a href="/home" class="bg-white text-emerald-600 px-8 py-3 rounded-lg font-semibold shadow hover:bg-gray-100 transition">
            Comenzar ahora
        </a>
    </div>
</section>

<!-- SECCIÓN DE CARACTERÍSTICAS -->
<main class="max-w-7xl mx-auto px-6 py-16">

    <h3 class="text-3xl font-semibold text-center mb-12">¿Qué ofrece esta plantilla?</h3>

    <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

        <!-- CARD 1 -->
        <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
            <div class="text-emerald-600 text-4xl mb-4">⚡</div>
            <h4 class="text-xl font-semibold mb-2">Rendimiento</h4>
            <p class="text-gray-600">
                Tailwind 4 ofrece estilos optimizados y un rendimiento excepcional.
            </p>
        </div>

        <!-- CARD 2 -->
        <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
            <div class="text-emerald-600 text-4xl mb-4">🔒</div>
            <h4 class="text-xl font-semibold mb-2">Seguridad</h4>
            <p class="text-gray-600">
                Breeze proporciona autenticación segura lista para usar.
            </p>
        </div>

        <!-- CARD 3 -->
        <div class="bg-white p-8 rounded-xl shadow hover:shadow-lg transition">
            <div class="text-emerald-600 text-4xl mb-4">🚀</div>
            <h4 class="text-xl font-semibold mb-2">Escalabilidad</h4>
            <p class="text-gray-600">
                Ideal para proyectos pequeños o grandes aplicaciones empresariales.
            </p>
        </div>

    </div>
</main>

<!-- FOOTER -->
<footer class="bg-gray-900 text-gray-300 py-6 mt-16">
    <div class="max-w-7xl mx-auto px-6 text-center">
        <p>&copy; {{ date('Y') }} Mi Proyecto. Todos los derechos reservados.</p>
    </div>
</footer>

</body>
</html>

