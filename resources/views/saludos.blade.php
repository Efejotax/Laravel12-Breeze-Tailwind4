@extends('app.layouts.template')
@section('titulo', 'Página de Rutas Saludos')

{{--injección o llamada al contenido main que definimos en el template general--}}
@section('main-content')

    <!-- MAIN CONTENT-->

    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
        <div class="max-w-4xl w-full">
            <h1 class="text-6xl font-bold mb-6 text-center bg-amber-300 p-6">Total Rutas de Saludos</h1>

            <h2 class="text-3xl font-bold mb-6 text-center bg-blue-200 p-3">Saludos Horarios y CRUD</h2>

            {{-- Tarjetas Cards 2 filas de 5 cols y responsive a 2 y a una col  --}}
            <!-- TARJETAS DE SALUDOS y MÉTODOS CRUD -->
            {{--FILA 1--}}
            @include('app.partials.saludos-total-card')


        </div>
    </div>
@endsection

