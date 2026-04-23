@extends('app.layouts.template')
@section('titulo', 'The Simpsons API Index')

@section('main-content')

    <div class="container mx-auto py-10">

        <h1 class="text-4xl font-bold mb-8 text-center">
            Personajes de Los Simpsons
        </h1>

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

                    {{-- Frase --}}
                    <p class="text-gray-600 text-sm mb-1">
                        <strong>Frase:</strong> {{ $character['quote'] }}
                    </p>

                    {{-- Género --}}
                    <p class="text-gray-600 text-sm mb-1">
                        <strong>Género:</strong> {{ $character['gender'] }}
                    </p>

                    {{-- Ocupación --}}
                    <p class="text-gray-600 text-sm mb-1">
                        <strong>Ocupación:</strong> {{ $character['occupation'] }}
                    </p>

                    {{-- Estado --}}
                    <p class="text-gray-600 text-sm mb-1">
                        <strong>Estado:</strong> {{ $character['status'] }}
                    </p>

                    {{-- Botón Ver Detalle --}}
                    <a href="{{ route('thesimpsoms.show', $character['id']) }}"
                       class="inline-block mt-4 px-4 py-2 bg-yellow-500 text-black rounded hover:bg-yellow-600">
                        Ver detalle
                    </a>

                </div>
            @endforeach

        </div>

    </div>

@endsection
