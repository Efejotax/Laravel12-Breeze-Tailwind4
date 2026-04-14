@extends('app.layouts.template')

@section('titulo', 'Página home')
{{--@section('estilos-css')--}}

@section('main-content')
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



@section('menu-rutas-2')
    {{-- Menú Rutas estilizado 2 --}}
    <div class="flex justify-center my-8">
        <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 text-lg font-semibold">

            <li>
                <a href="/saludos/listar"
                   class="block text-center px-6 py-3 bg-cyan-300 text-black rounded-lg shadow hover:bg-cyan-400 transition">
                    Listar
                </a>
            </li>

            <li>
                <a href="/saludos/crear"
                   class="block text-center px-6 py-3 bg-teal-300 text-black rounded-lg shadow hover:bg-teal-400 transition">
                    Crear
                </a>
            </li>

            <li>
                <a href="/saludos/almacenar"
                   class="block text-center px-6 py-3 bg-sky-300 text-black rounded-lg shadow hover:bg-sky-400 transition">
                    Almacenar
                </a>
            </li>

            <li>
                <a href="/saludos/mostrar"
                   class="block text-center px-6 py-3 bg-emerald-300 text-black rounded-lg shadow hover:bg-emerald-400 transition">
                    Mostrar
                </a>
            </li>

            <li>
                <a href="/saludos/editar"
                   class="block text-center px-6 py-3 bg-blue-300 text-black rounded-lg shadow hover:bg-blue-400 transition">
                    Editar
                </a>
            </li>

            <li>
                <a href="/saludos/actualizar"
                   class="block text-center px-6 py-3 bg-green-300 text-black rounded-lg shadow hover:bg-green-400 transition">
                    Actualizar
                </a>
            </li>

            <li>
                <a href="/saludos/borrar"
                   class="block text-center px-6 py-3 bg-indigo-300 text-black rounded-lg shadow hover:bg-indigo-400 transition">
                    Borrar
                </a>
            </li>

            <li>
                <a href="/saludos/holamundo"
                   class="block text-center px-6 py-3 bg-gray-300 text-black rounded-lg shadow hover:bg-gray-400 transition">
                    Hola Mundo
                </a>
            </li>

        </ul>
    </div>
@endsection
@section('menu-rutas-1')
    {{-- Menú Rutas estilizado 1 --}}
    <div class="flex justify-center my-8">
        <ul class="flex space-x-6 text-lg font-semibold">
            <li>
                <a href="/saludos/dia"
                   class="px-6 py-2 bg-yellow-400 text-black rounded-lg shadow hover:bg-yellow-500 transition">
                    Día
                </a>
            </li>

            <li>
                <a href="/saludos/tarde"
                   class="px-6 py-2 bg-orange-500 text-black  rounded-lg shadow hover:bg-orange-600 transition">
                    Tarde
                </a>
            </li>

            <li>
                <a href="/saludos/noche"
                   class="px-6 py-2 bg-red-700 text-black  rounded-lg shadow hover:bg-red-800 transition">
                    Noche
                </a>
            </li>
        </ul>
    </div>
@endsection



@section('scripts')
    {{-- aquí irían los scripts necesarios para cada página, si procede --}}
@endsection
