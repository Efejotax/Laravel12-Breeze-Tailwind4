@extends('app.layouts.template')

@section('titulo', $movie['primaryTitle'] ?? 'Detalle de Película')

@section('main-content')
    <div class="container mx-auto py-8">

        <a href="{{ route('movies.index') }}" class="text-blue-600 underline mb-4 inline-block">
            ← Volver al listado
        </a>

        <div class="bg-white p-6 rounded shadow">

            {{-- Título --}}
            <h1 class="text-3xl font-bold mb-4">
                {{ $movie['primaryTitle'] }}
            </h1>

            {{-- Imagen --}}
            @if(isset($movie['primaryImage']['url']))
                <img
                    src="{{ $movie['primaryImage']['url'] }}"
                    alt="{{ $movie['primaryTitle'] }}"
                    class="w-64 rounded mb-6"
                >
            @endif

            {{-- Información básica --}}
            <p><strong>Año:</strong> {{ $movie['startYear'] ?? 'N/A' }}</p>
            <p><strong>Tipo:</strong> {{ $movie['titleType'] ?? 'N/A' }}</p>
            <p><strong>Duración:</strong> {{ $movie['runtimeMinutes'] ?? 'N/A' }} min</p>

            {{-- Sinopsis --}}
            @if(isset($movie['plot']['plotText']))
                <div class="mt-4">
                    <h2 class="text-xl font-semibold mb-2">Sinopsis</h2>
                    <p>{{ $movie['plot']['plotText'] }}</p>
                </div>
            @endif

        </div>

    </div>
@endsection
