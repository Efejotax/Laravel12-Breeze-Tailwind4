@extends('app.layouts.template')
@section('titulo', 'IMDB Movies API Index')
@section('main-content')

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Lista de Películas</h1>

        {{-- UNA SOLA FILA DE 6 TARJETAS --}}
        <div class="grid grid-cols-6 gap-4">
            @foreach ($movies as $movie)
                <div class="p-4 border rounded shadow bg-white hover:shadow-lg transition">

                    {{-- Título --}}
                    <h2 class="text-lg font-semibold capitalize">
                        {{ $movie['primaryTitle'] }}
                    </h2>

                    {{-- Imagen si existe --}}
                    @if(isset($movie['primaryImage']['url']))
                        <img
                            src="{{ $movie['primaryImage']['url'] }}"
                            alt="{{ $movie['primaryTitle'] }}"
                            class="w-full h-auto mt-2 rounded"
                        >
                    @endif

                    {{-- Enlace al detalle --}}
                    <a href="{{ route('movies.show', $movie['id']) }}"
                       class="text-blue-600 text-sm underline block mt-2">
                        Ver detalle
                    </a>

                </div>
            @endforeach
        </div>

        {{-- PAGINACIÓN --}}
        <div class="mt-8 flex justify-center gap-4">
            @if ($previous)
                <a href="{{ route('movies.index', ['page' => $previous]) }}"
                   class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">
                    Anterior
                </a>
            @endif

            @if ($next)
                <a href="{{ route('movies.index', ['page' => $next]) }}"
                   class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">
                    Siguiente
                </a>
            @endif
        </div>

    </div>
@endsection

