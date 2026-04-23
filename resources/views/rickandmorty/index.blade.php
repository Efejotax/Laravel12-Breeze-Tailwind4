@extends('app.layouts.template')
@section('titulo', 'Rick & Morty API Index')

@section('main-content')

    <div class="container mx-auto py-10">

        <h1 class="text-4xl font-bold mb-8 text-center">
            Personajes de Rick & Morty
        </h1>

        {{-- GRID DE PERSONAJES --}}
        <div class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 lg:grid-cols-5 gap-6">

            @foreach ($characters as $character)
                <div class="bg-white rounded-lg shadow hover:shadow-xl transition p-4 text-center">

                    {{-- Imagen --}}
                    <img
                        src="{{ $character['image'] }}"
                        alt="{{ $character['name'] }}"
                        class="w-full h-48 object-cover rounded-md mb-4"
                    >

                    {{-- Nombre --}}
                    <h2 class="text-xl font-semibold mb-2">
                        {{ $character['name'] }}
                    </h2>

                    {{-- Estado + especie --}}
                    <p class="text-gray-600 text-sm mb-1">
                        <strong>Estado:</strong> {{ $character['status'] }}
                    </p>

                    <p class="text-gray-600 text-sm mb-3">
                        <strong>Especie:</strong> {{ $character['species'] }}
                    </p>

                    {{-- Botón detalle --}}
                    <a href="{{ route('rickandmorty.show', $character['id']) }}"
                       class="inline-block mt-2 px-4 py-2 bg-green-600 text-white rounded hover:bg-green-700">
                        Ver detalle
                    </a>

                </div>
            @endforeach

        </div>

    </div>

@endsection
