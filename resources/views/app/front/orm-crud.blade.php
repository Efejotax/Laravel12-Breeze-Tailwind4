@extends('app.layouts.template')


@section('titulo', 'ORM & CRUD')

@section('main-content')
    <div class="min-h-screen bg-gray-100 py-12 px-6">

        <!-- TÍTULO -->
        <h1 class="text-4xl font-bold text-center text-gray-800 mb-10">
            ORM & CRUD
        </h1>

        @php
            $items = [
                ['nombre' => 'Modelo & Migraciones', 'img' => 'crud.png'],
                ['nombre' => 'Crear Registros (Create)', 'img' => 'crud.png'],
                ['nombre' => 'Listar Registros (Read)', 'img' => 'crud.png'],
                ['nombre' => 'Actualizar Registros (Update)', 'img' => 'crud.png'],
                ['nombre' => 'Eliminar Registros (Delete)', 'img' => 'crud.png'],
                ['nombre' => 'Relaciones & Eloquent', 'img' => 'crud.png'],
            ];
        @endphp

            <!-- GRID DE CARDS -->
        <div class="max-w-6xl mx-auto grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-3 gap-8">

            @foreach ($items as $item)
                <div class="bg-white rounded-lg shadow p-6 text-center">
                    <img src="{{ asset('assets/img/' . $item['img']) }}"
                         class="mx-auto max-w-[140px] h-auto object-contain mb-4"
                         alt="{{ $item['nombre'] }}">

                    <h2 class="text-xl font-semibold mb-2">{{ $item['nombre'] }}</h2>
                    <p class="text-gray-600">
                        Sección dedicada a {{ strtolower($item['nombre']) }} usando Eloquent ORM.
                    </p>
                </div>
            @endforeach

        </div>

    </div>
@endsection
