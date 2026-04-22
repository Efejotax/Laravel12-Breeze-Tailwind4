@extends('app.layouts.template')
@section('titulo', 'Pokemon API Show')
    @section('main-content')
    <div class="max-w-3xl mx-auto py-10">
        <div class="bg-white shadow-lg rounded-xl p-6">

            {{-- Nombre e imagen principal --}}
            <div class="text-center">
                <h1 class="text-4xl font-bold capitalize mb-4">
                    {{ $pokemon['name'] }}
                </h1>

                <img
                    src="{{ $pokemon['sprites']['other']['official-artwork']['front_default'] }}"
                    alt="{{ $pokemon['name'] }}"
                    class="w-60 mx-auto drop-shadow-lg"
                >
            </div>

            {{-- Información básica --}}
            <div class="mt-8 grid grid-cols-2 gap-6 text-lg">
                <div>
                    <p><span class="font-semibold">ID:</span> {{ $pokemon['id'] }}</p>
                    <p><span class="font-semibold">Altura:</span> {{ $pokemon['height'] / 10 }} m</p>
                    <p><span class="font-semibold">Peso:</span> {{ $pokemon['weight'] / 10 }} kg</p>
                </div>

                <div>
                    <p class="font-semibold">Tipos:</p>
                    <div class="flex gap-2 mt-1">
                        @foreach ($pokemon['types'] as $type)
                            <span class="px-3 py-1 rounded-full text-white text-sm capitalize
                                @switch($type['type']['name'])
                                    @case('fire') bg-red-500 @break
                                    @case('water') bg-blue-500 @break
                                    @case('grass') bg-green-500 @break
                                    @case('electric') bg-yellow-400 text-black @break
                                    @default bg-gray-500
                                @endswitch
                            ">
                                {{ $type['type']['name'] }}
                            </span>
                        @endforeach
                    </div>
                </div>
            </div>

            {{-- Habilidades --}}
            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-2">Habilidades</h2>
                <ul class="list-disc list-inside text-lg">
                    @foreach ($pokemon['abilities'] as $ability)
                        <li class="capitalize">{{ $ability['ability']['name'] }}</li>
                    @endforeach
                </ul>
            </div>

            {{-- Stats --}}
            <div class="mt-8">
                <h2 class="text-2xl font-semibold mb-4">Estadísticas</h2>

                <div class="space-y-3">
                    @foreach ($pokemon['stats'] as $stat)
                        <div>
                            <p class="capitalize font-medium">
                                {{ $stat['stat']['name'] }}: {{ $stat['base_stat'] }}
                            </p>
                            <div class="w-full bg-gray-200 rounded-full h-3">
                                <div class="bg-blue-500 h-3 rounded-full"
                                     style="width: {{ min($stat['base_stat'], 100) }}%">
                                </div>
                            </div>
                        </div>
                    @endforeach
                </div>
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

