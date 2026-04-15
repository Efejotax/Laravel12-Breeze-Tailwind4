    @auth()
    <!-- SUB TÍTULO: general -->
    <div class="py-6 mb-10 text-center bg-red-300 rounded-lg shadow">
        <h2 class="text-gray-600 text-3xl font-bold">H2 Sección Tarjetas</h2>
    </div>

    <!-- GRID DE CARDS -->

    <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
        @for ($i = 1; $i <= 6; $i++)
            <div class="bg-white rounded-lg shadow hover:shadow-lg transition">
                <img src="{{ asset('assets/img/laravel.png') }}" alt="Imagen {{ $i }}" class="w-full h-48 object-cover rounded-t-lg">
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
    @endauth

    @guest
        <!-- SUB TÍTULO: Aiso a usuarios no logueados -->
        <div class="py-6 mb-10 text-center bg-gray-500 rounded-lg shadow">
            <h2 class="text-white text-3xl font-bold">Tienes que estar logueado para ver el contenido</h2>
        </div>
    @endguest

