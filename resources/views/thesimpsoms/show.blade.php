
@extends('app.layouts.template')
@section('titulo', 'The Simpsons API - Detalle')

@section('main-content')

    <div class="container mx-auto py-10">

        <a href="{{ url('/thesimpsoms/character') }}"
           class="inline-block mb-6 px-4 py-2 bg-gray-200 rounded hover:bg-gray-300">
            ← Volver
        </a>

        <div class="bg-white shadow rounded-lg p-6 max-w-xl mx-auto">

            {{-- Imagen --}}
            <div class="flex justify-center mb-6">
                <img src="{{ $character['image'] }}"
                     alt="{{ $character['name'] }}"
                     class="w-64 h-64 object-cover rounded-lg">
            </div>

            {{-- Nombre --}}
            <h1 class="text-3xl font-bold text-center mb-4">
                {{ $character['name'] }}
            </h1>

            {{-- Datos --}}
            <div class="space-y-2 text-gray-700">

                <p><strong>Frase:</strong> {{ $character['quote'] }}</p>
                <p><strong>Género:</strong> {{ $character['gender'] }}</p>
                <p><strong>Ocupación:</strong> {{ $character['occupation'] }}</p>
                <p><strong>Estado:</strong> {{ $character['status'] }}</p>
                <p><strong>Edad:</strong> {{ $character['age'] }}</p>
                <p><strong>Fecha de nacimiento:</strong> {{ $character['birthdate'] }}</p>

            </div>

        </div>

    </div>

@endsection
