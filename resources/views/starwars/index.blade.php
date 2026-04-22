@extends('app.layouts.template')
@section('titulo', 'StarWars API Index')
@section('main-content')

    <div class="container mx-auto py-8">
        <h1 class="text-3xl font-bold mb-6">Lista de Planetas de Star Wars</h1>

        <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
            @foreach ($planetas as $planeta)
                <div class="p-4 border rounded shadow bg-white hover:shadow-lg transition">
                    <h2 class="text-lg font-semibold capitalize">
                        {{ $planeta['name'] }}
                    </h2>

                    <a href="{{ route('planeta.show', $planeta['uid']) }}"
                       class="text-blue-600 text-sm underline">
                        Ver detalle
                    </a>
                </div>
            @endforeach
        </div>

        {{-- PAGINACIÓN --}}
        <div class="mt-8 flex justify-center gap-4">
            @if ($previous)
                <a href="{{ route('planetas.index', ['page' => $previous]) }}"
                   class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">
                    Anterior
                </a>
            @endif

            @if ($next)
                <a href="{{ route('planetas.index', ['page' => $next]) }}"
                   class="px-4 py-2 bg-gray-800 text-white rounded hover:bg-gray-700">
                    Siguiente
                </a>
            @endif
        </div>

    </div>@endsection
