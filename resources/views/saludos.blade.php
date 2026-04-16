@extends('app.layouts.template')
@section('titulo', 'Página de Rutas Saludos')

{{--injección o llamada al contenido main que definimos en el template general--}}
@section('main-content')

    <!-- MAIN CONTENT-->

    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
        <div class="max-w-4xl w-full">
            <h1 class="text-5xl font-bold mb-6 text-center bg-amber-300 p-6">Todos los Saludos</h1>

            {{--Mini ruta: saludo--}}
            <div class="text-center mb-6">
                <a href="{{ route('saludo') }}"
                   class="text-blue-600 font-semibold underline hover:text-blue-800">
                    Ir a Mini Ruta: Saludo
                </a>
            </div>
            {{--Si NO tienes una ruta definida llamada ruta
            Puedes usar directamente la URL:--}}
            {{-- <a href="/saludo" class="text-blue-600 font-semibold underline hover:text-blue-800">
                 Ir a Mini Ruta: Saludo
             </a>--}}

            <h2 class="text-3xl font-bold mb-6 text-center bg-blue-200 p-3">Saludos Horarios y CRUD</h2>

            {{-- Tarjetas Cards 2 filas de 5 cols y responsive a 2 y a una col  --}}
            <!-- TARJETAS DE SALUDOS y MÉTODOS CRUD -->
            {{--FILA 1--}}
            @include('app.partials.saludos-total-card')


        </div>
    </div>
@endsection

