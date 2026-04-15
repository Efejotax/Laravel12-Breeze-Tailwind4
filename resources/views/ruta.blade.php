@extends('app.layouts.template')

@section('main-content')
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100">
        <h1 class="text-4xl font-bold text-gray-800 mb-2">Mini Ruta: Ruta desde Views</h1>
        <p class="text-gray-600">Página de prueba minimalista</p>
        {{--Botón volver atras--}}
        <a href="{{ url()->previous() }}"
           class="px-4 py-2 bg-blue-500 text-white rounded-lg hover:bg-blue-600 transition">
            Volver atrás
        </a>
    </div>

@endsection

