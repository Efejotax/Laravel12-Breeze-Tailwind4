@extends('app.layouts.template')

@section('titulo', 'Página Inicio')
{{--@section('estilos-css')--}}

@section('main-content')
    <!-- MAIN CONTENT-->
    <main class="max-w-7xl mx-auto py-10 px-4">

        <!-- TÍTULO -->
        <div class="py-6 mb-10 text-center bg-red-600 rounded-lg shadow">
            <h1 class="text-white text-3xl font-bold">Bienvenido a Index</h1>
        </div>

        <div class="py-6 mb-10 text-center bg-gray-400 rounded-lg shadow">
            <!-- Imagen centrada -->
            <div class="flex justify-center mt-4">
                <img src="{{ asset('/assets/img/laravel-inicio.jpg') }}"
                     alt="Imagen de inicio"
                     class="max-w-xs w-full h-auto rounded-lg shadow-md">
            </div>
        </div>


        <!-- GRID DE CARDS -->
        @include('app.partials.cards-home-page')


    </main>
@endsection()


@section('scripts')
    {{-- aquí irían los scripts necesarios para cada página, si procede --}}
@endsection
