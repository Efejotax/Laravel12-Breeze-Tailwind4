@extends('app.layouts.template')

@section('titulo', 'Total de APIs Externas Disponibles')

@section('main-content')

    <div class="container mx-auto py-10">

        <h1 class="text-4xl font-bold text-center mb-10">
            Selecciona una API
        </h1>

        <div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-6">

            {{-- Tarjetas - Pokémon API --}}
            <a href="{{route('pokemon.index')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Pokémon API method index</h2>
                <p class="text-gray-600">Consulta información de Pokémon en la vista Blade.</p>
            </a>
            <a href="{{route('pokemon.invoke')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Pokémon API method invoke</h2>
                <p class="text-gray-600">Consulta información de Pokémon en formato JSON.</p>
            </a>

            {{-- Tarjetas - Star Wars API --}}
            <a href="{{route('planetas.index')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Star Wars API method index</h2>
                <p class="text-gray-600">Personajes, naves y planetas en la vista Blade.</p>
            </a>
            <a href="{{route('starwars.invoke')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Star Wars API method invoke</h2>
                <p class="text-gray-600">Planetas de Star Wars en formato JSON.</p>
            </a>

            {{-- Tarjetas  - Rick & Morty API --}}
            <a href="{{route('rickandmorty.index')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Rick & Morty API method index</h2>
                <p class="text-gray-600">Personajes de Rick & Morty en la vista Blade</p>
            </a>
            <a href="{{route('rickandmorty.invoke')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Rick & Morty API method invoke</h2>
                <p class="text-gray-600">Personajes de Rick & Morty en formato JSON</p>
            </a>

            {{-- Tarjetas - Harry Potter API --}}
            <a href="{{route('harrypotter.invoke')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Harry Potter API method invoke</h2>
                <p class="text-gray-600">Personajes de Harry Potter en formato JSON</p>
            </a>
            <a href="{{route('harrypotter.index')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Harry Potter API method index</h2>
                <p class="text-gray-600">Personajes de Harry Potter en la vista Blade</p>
            </a>

            {{-- Tarjetas - Películas API --}}
            <a href="{{route('movies.index')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Películas API method index</h2>
                <p class="text-gray-600">Información sobre cine en la vista Blade.</p>
            </a>
            <a href="{{route('movies.invoke')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Películas API method invoke</h2>
                <p class="text-gray-600">Información sobre Películas en formato JSON.</p>
            </a>

            {{-- Tarjetas - Los Simpsom API --}}
           <a href="{{route('thesimpsoms.index')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Los Simpsom API method index</h2>
                <p class="text-gray-600">Información sobre Los Simpsom en la vista Blade.</p>
            </a>
            <a href="{{route('thesimpsoms.invoke')}}" class="block bg-white shadow-md rounded-xl p-6 hover:shadow-xl transition">
                <h2 class="text-xl font-semibold mb-2">Los Simpsoms API method invoke</h2>
                <p class="text-gray-600">Información sobre Los Simpsoms en formato JSON.</p>
            </a>


        </div>

    </div>

@endsection

@section('scripts-js')
@endsection
