{{--@extends('app.layouts.template')--}}
    <x-layout.web>
        @section('titulo', 'Pokemon')
        @section('main-content')
        <div class="container mx-auto py-8">
            <h1 class="text-3xl font-bold mb-6">Lista de Pokémon</h1>

            <div class="grid grid-cols-2 md:grid-cols-4 lg:grid-cols-6 gap-4">
                @foreach ($pokemons as $pokemon)
                    <div class="p-4 border rounded shadow bg-white hover:shadow-lg transition">
                        <h2 class="text-lg font-semibold capitalize">
                            {{ $pokemon['name'] }}
                        </h2>

                        {{-- Enlace al detalle del Pokémon en la API oficial --}}
                        <a href="{{ $pokemon['url'] }}"
                           target="_blank"
                           class="text-blue-600 text-sm underline">
                            Ver detalles
                        </a>
                    </div>
                @endforeach
            </div>
        </div>
        @endsection

      {{--{{ $slot  }}--}}

    </x-layout.web>


