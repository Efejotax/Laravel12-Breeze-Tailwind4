@extends('app.layouts.template')
@section('titulo', 'Harry Potter API Show')

@section('main-content')

    <div class="container mx-auto py-10">

        {{-- Título --}}
        <h1 class="text-4xl font-bold mb-8 text-center">
            {{ $character['name'] }}
        </h1>

        <div class="max-w-3xl mx-auto bg-white shadow-lg rounded-lg p-6">

            {{-- Imagen --}}
            <div class="flex justify-center mb-6">
                @if (!empty($character['image']))
                    <img
                        src="{{ $character['image'] }}"
                        alt="{{ $character['name'] }}"
                        class="rounded-lg shadow-md w-64 h-64 object-cover"
                    >
                @else
                    <div class="w-64 h-64 bg-gray-200 rounded-lg flex items-center justify-center text-gray-500">
                        Sin imagen
                    </div>
                @endif
            </div>

            {{-- Información del personaje --}}
            <div class="space-y-3 text-lg">

                <p>
                    <strong class="font-semibold">Casa:</strong>
                    {{ $character['house'] ?: 'Desconocida' }}
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
                    <strong class="font-semibold">Actor:</strong>
                    {{ $character['actor'] ?: 'No disponible' }}
                </p>

                <p>
                    <strong class="font-semibold">Fecha de nacimiento:</strong>
                    {{ $character['dateOfBirth'] ?: 'Desconocida' }}
                </p>

                <p>
                    <strong class="font-semibold">Estado:</strong>
                    {{ $character['alive'] ? 'Vivo' : 'Fallecido' }}
                </p>

            </div>

            {{-- Botón volver --}}
            <div class="mt-8 text-center">
                <a href="{{ route('harrypotter.index') }}"
                   class="px-6 py-3 bg-indigo-600 text-white rounded hover:bg-indigo-700">
                    ← Volver al listado
                </a>
            </div>

        </div>

    </div>

@endsection
