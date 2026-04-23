@extends('app.layouts.template')
@section('titulo', 'Rick & Morty API show')

@section('main-content')

    <div class="container mx-auto py-10">

        {{-- Título --}}
        <h1 class="text-4xl font-bold mb-8 text-center">
            {{ $character['name'] }}
        </h1>

        <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">

            {{-- Imagen --}}
            <div class="flex justify-center mb-6">
                <img
                    src="{{ $character['image'] }}"
                    alt="{{ $character['name'] }}"
                    class="rounded-lg shadow-md w-64 h-64 object-cover"
                >
            </div>

            {{-- Información del personaje --}}
            <div class="space-y-3 text-lg">

                <p>
                    <strong class="font-semibold">Estado:</strong>
                    {{ $character['status'] }}
                </p>

                <p>
                    <strong class="font-semibold">Especie:</strong>
                    {{ $character['species'] }}
                </p>

                <p>
                    <strong class="font-semibold">Género:</strong>
                    {{ $character['gender'] }}
                </p>

                <p>
                    <strong class="font-semibold">Origen:</strong>
                    {{ $character['origin']['name'] }}
                </p>

                <p>
                    <strong class="font-semibold">Ubicación actual:</strong>
                    {{ $character['location']['name'] }}
                </p>

                <p>
                    <strong class="font-semibold">Aparece en:</strong>
                    {{ count($character['episode']) }} episodios
                </p>

            </div>

            {{-- Botón volver --}}
            <div class="mt-8 text-center">
                <a href="{{ route('rickandmorty.index') }}"
                   class="px-6 py-3 bg-blue-600 text-white rounded hover:bg-blue-700">
                    ← Volver al listado
                </a>
            </div>

        </div>

    </div>

@endsection

