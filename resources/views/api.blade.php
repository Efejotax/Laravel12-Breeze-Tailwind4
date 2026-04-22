@extends('app.layouts.template')

@section('titulo', 'APIs disponibles')

@section('main-content')

    <div class="container mx-auto py-10">

        <h1 class="text-4xl font-bold text-center mb-10">
            Selecciona una API
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Tarjetas - Pokémon API --}}
            <a href="{{route('pokemon.index')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Pokémon API</h2>
                <p class="text-gray-600">Consulta información de Pokémon.</p>

                <a href="{{route('pokemon.invoke')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                    <h2 class="text-xl font-semibold mb-2">Pokémon API invoke</h2>
                    <p class="text-gray-600">Consulta información de Pokémon en JSON.</p>
                </a>
            </a>

            {{-- Tarjetas - Star Wars API --}}
            <a href="{{route('planetas.index')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Star Wars API</h2>
                <p class="text-gray-600">Personajes, naves y planetas.</p>
            </a>

            <a href="{{route('starwars.invoke')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Star Wars API invoke</h2>
                <p class="text-gray-600">Planetas de Star Wars en JSON.</p>
            </a>

            {{-- Tarjetas  - Rick & Morty API --}}
            <a href="#" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Rick & Morty API</h2>
                <p class="text-gray-600">Personajes y episodios.</p>
            </a>

            {{-- Tarjetas - Harry Potter API --}}
            <a href="#" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Harry Potter API</h2>
                <p class="text-gray-600">Hechizos, personajes y casas.</p>
            </a>

            {{-- Tarjetas - Marvel API --}}
            <a href="#" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Marvel API</h2>
                <p class="text-gray-600">Superhéroes y cómics.</p>
            </a>

            {{-- Tarjetas - Películas API --}}
            <a href="{{route('movies.index')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Películas API</h2>
                <p class="text-gray-600">Información sobre cine.</p>
            </a>

            <a href="{{route('movies.invoke')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Películas API invoke</h2>
                <p class="text-gray-600">Información sobre Películas en JSON.</p>
            </a>

        </div>

    </div>

@endsection

@section('scripts-js')
@endsection
