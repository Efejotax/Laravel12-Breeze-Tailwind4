@extends('app.layouts.template')
@section('titulo', 'Harry Potter API Index')

@section('main-content')

    <div class="container mx-auto py-10">

        <h1 class="text-4xl font-bold mb-8 text-center">
            Personajes de Harry Potter
        </h1>

        {{-- GRID DE PERSONAJES --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

            @foreach ($characters as $character)
                <div class="bg-white rounded-lg shadow hover:shadow-xl transition p-4 text-center">

                    {{-- Imagen --}}
                    @if (!empty($character['image']))
                        <img
                            src="{{ $character['image'] }}"
                            alt="{{ $character['name'] }}"
                            class="w-full h-48 object-cover rounded-md mb-4"
                        >
                    @else
                        <div class="w-full h-48 bg-gray-200 rounded-md mb-4 flex items-center justify-center text-gray-500">
                            Sin imagen
                        </div>
                    @endif

                    {{-- Nombre --}}
                    <h2 class="text-xl font-semibold mb-2">
                        {{ $character['name'] }}
                    </h2>

                    {{-- Casa --}}
                    <p class="text-gray-600 text-sm mb-1">
                        <strong>Casa:</strong> {{ $character['house'] ?: 'Desconocida' }}
                    </p>

                    {{-- Especie --}}
                    <p class="text-gray-600 text-sm mb-1">
                        <strong>Especie:</strong> {{ $character['species'] }}
                    </p>

                    {{-- Actor --}}
                    <p class="text-gray-600 text-sm mb-3">
                        <strong>Actor:</strong> {{ $character['actor'] ?: 'No disponible' }}
                    </p>

                    {{-- Botón detalle --}}
                    <a href="{{ route('harrypotter.show', $loop->index) }}"
                       class="inline-block mt-2 px-4 py-2 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                        Ver detalle
                    </a>

                </div>
            @endforeach

        </div>

    </div>

@endsection
