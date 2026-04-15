@extends('app.layouts.template')
@section('titulo', 'Página de Rutas Saludos y CRUD pruebas')

{{--injección o llamada al contenido main que definimos en el template general--}}
@section('main-content')

<!-- MAIN CONTENT-->

<div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
    <div class="max-w-4xl w-full">
        <h1 class="text-6xl font-bold mb-6 text-center bg-amber-300 p-6">Prueba Rutas CRUD</h1>

        <h2 class="text-3xl font-bold mb-6 text-center bg-pink-200 p-3">Saludos CRUD sin Controller</h2>



        <h2 class="text-3xl font-bold mb-6 text-center bg-blue-200 p-3">Saludos CRUD + Hola Mundo</h2>

        {{-- Menú Botones Rutas 2 --}}
        @include('app/partials/saludos-botones-crud')

    </div>
</div>
@endsection
