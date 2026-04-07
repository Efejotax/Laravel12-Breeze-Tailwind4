@extends('app.layouts.template')

@section('titulo', 'Página home')

@section('contenido')
    <!-- MAIN CONTENT-->
    <main class="max-w-7xl mx-auto py-10 px-4">

        <!-- TÍTULO -->
        <div class="py-6 mb-10 text-center bg-red-600 rounded-lg shadow">
            <h1 class="text-white text-3xl font-bold">Bienvenido a la Home</h1>
        </div>

        <!-- GRID DE CARDS -->
        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-10">
            @for ($i = 1; $i <= 3; $i++)
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

        <div class="grid grid-cols-1 md:grid-cols-3 gap-8 mb-2">
            @for ($i = 1; $i <= 3; $i++)
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
    </main>
@endsection

@section('scripts')
    {{-- aquí irían los scripts necesarios para cada página, si procede --}}
@endsection
