@extends('app.layouts.template')

@section('titulo', 'Star Wars - Detalles de Planeta')

@section('main-content')

    <div class="max-w-3xl mx-auto py-10">
        <div class="bg-white shadow-lg rounded-xl p-6">

            {{-- Nombre del planeta --}}
            <div class="text-center">
                <h1 class="text-4xl font-bold mb-4">
                    {{ $planeta['properties']['name'] }}
                </h1>

                {{-- Imagen genérica de planeta --}}
                <img
                    src="https://static.vecteezy.com/system/resources/previews/009/384/704/non_2x/planet-icon-design-free-png.png"
                    alt="{{ $planeta['properties']['name'] }}"
                    class="w-48 mx-auto drop-shadow-lg"
                >
            </div>

            {{-- Información básica --}}
            <div class="mt-8 grid grid-cols-2 gap-6 text-lg">

                <div>
                    <p><span class="font-semibold">Clima:</span> {{ $planeta['properties']['climate'] }}</p>
                    <p><span class="font-semibold">Terreno:</span> {{ $planeta['properties']['terrain'] }}</p>
                    <p><span class="font-semibold">Gravedad:</span> {{ $planeta['properties']['gravity'] }}</p>
                    <p><span class="font-semibold">Agua superficial:</span> {{ $planeta['properties']['surface_water'] }}%</p>
                </div>

                <div>
                    <p><span class="font-semibold">Población:</span> {{ $planeta['properties']['population'] }}</p>
                    <p><span class="font-semibold">Diámetro:</span> {{ $planeta['properties']['diameter'] }} km</p>
                    <p><span class="font-semibold">Rotación:</span> {{ $planeta['properties']['rotation_period'] }} horas</p>
                    <p><span class="font-semibold">Órbita:</span> {{ $planeta['properties']['orbital_period'] }} días</p>
                </div>

            </div>

            {{-- Descripción --}}
            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-2">Descripción</h2>
                <p class="text-lg text-gray-700">
                    {{ $planeta['description'] ?? 'Sin descripción disponible.' }}
                </p>
            </div>

            {{-- Botón volver --}}
            <div class="mt-10 text-center">
                <a href="{{ url()->previous() }}"
                   class="px-6 py-2 bg-gray-800 text-white rounded-lg hover:bg-gray-700">
                    Volver
                </a>
            </div>

        </div>
    </div>

@endsection
