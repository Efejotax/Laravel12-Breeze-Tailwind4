@extends('app.layouts.template')

@section('titulo', 'Productos')

@section('main-content')
    <div class="min-h-screen bg-gray-100 py-12 px-6">

        <!-- TÍTULO -->
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">
            Nuestros Productos
        </h1>

        @php
            $productos = [
                ['nombre' => 'Producto 1', 'img' => 'tableta.png'],
                ['nombre' => 'Producto 2', 'img' => 'tableta.png'],
                ['nombre' => 'Producto 3', 'img' => 'tableta.png'],
                ['nombre' => 'Producto 4', 'img' => 'tableta.png'],
                ['nombre' => 'Producto 5', 'img' => 'tableta.png'],
                ['nombre' => 'Producto 6', 'img' => 'tableta.png'],
            ];
        @endphp

            <!-- GRID DE CARDS -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($productos as $producto)
                <div class="bg-white rounded-lg shadow p-6 text-center">

                    <!-- Imagen reducida -->
                    <img src="{{ asset('assets/img/' . $producto['img']) }}"
                         class="mx-auto max-w-[140px] h-auto object-contain mb-4"
                         alt="{{ $producto['nombre'] }}">

                    <h2 class="text-xl font-semibold mb-2">{{ $producto['nombre'] }}</h2>
                    <p class="text-gray-600">Descripción breve del producto.</p>
                </div>
            @endforeach

        </div>

    </div>
@endsection

