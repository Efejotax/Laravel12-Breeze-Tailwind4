@extends('app.layouts.template')

@section('titulo', 'Servicios')

@section('main-content')
    <div class="min-h-screen bg-gray-100 py-12 px-6">

        <!-- TÍTULO -->
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">
            Nuestros Servicios
        </h1>

        @php
            $servicios = [
                ['nombre' => 'Servicio 1', 'img' => 'services-hero-image.png'],
                ['nombre' => 'Servicio 2', 'img' => 'services-hero-image.png'],
                ['nombre' => 'Servicio 3', 'img' => 'services-hero-image.png'],
                ['nombre' => 'Servicio 4', 'img' => 'services-hero-image.png'],
                ['nombre' => 'Servicio 5', 'img' => 'services-hero-image.png'],
                ['nombre' => 'Servicio 6', 'img' => 'services-hero-image.png'],
            ];
        @endphp

            <!-- GRID DE CARDS -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($servicios as $servicio)
                <div class="bg-white rounded-lg shadow p-6 text-center">

                    <!-- Imagen reducida -->
                    <img src="{{ asset('assets/img/' . $servicio['img']) }}"
                         class="mx-auto max-w-[140px] h-auto object-contain mb-4"
                         alt="{{ $servicio['nombre'] }}">

                    <h2 class="text-xl font-semibold mb-2">{{ $servicio['nombre'] }}</h2>
                    <p class="text-gray-600">Descripción breve del servicio.</p>
                </div>
            @endforeach

        </div>

    </div>
@endsection

