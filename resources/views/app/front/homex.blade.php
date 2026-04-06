@extends('layout.template')
@section('content')
    <main class="max-w-7xl mx-auto px-6 py-16">

        <h3 class="text-3xl font-semibold text-center mb-12">Características del Template</h3>

        <div class="grid grid-cols-1 md:grid-cols-3 gap-10">

            <!-- CARD 1 -->
            <div class="bg-white p-8 rounded-xl shadow border border-purple-100 hover:shadow-lg transition">
                <div class="text-purple-500 text-4xl mb-4">🌸</div>
                <h4 class="text-xl font-semibold mb-2">Estética Pastel</h4>
                <p class="text-gray-600">
                    Tonos suaves que transmiten calma y profesionalismo.
                </p>
            </div>

            <!-- CARD 2 -->
            <div class="bg-white p-8 rounded-xl shadow border border-pink-100 hover:shadow-lg transition">
                <div class="text-pink-500 text-4xl mb-4">🎀</div>
                <h4 class="text-xl font-semibold mb-2">Diseño Minimalista</h4>
                <p class="text-gray-600">
                    Limpio, moderno y fácil de adaptar a cualquier proyecto.
                </p>
            </div>

            <!-- CARD 3 -->
            <div class="bg-white p-8 rounded-xl shadow border border-indigo-100 hover:shadow-lg transition">
                <div class="text-indigo-500 text-4xl mb-4">✨</div>
                <h4 class="text-xl font-semibold mb-2">Totalmente Responsive</h4>
                <p class="text-gray-600">
                    Se adapta perfectamente a móviles, tablets y pantallas grandes.
                </p>
            </div>

        </div>
    </main>
@endsection
