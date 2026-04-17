@extends('app.layouts.template')
@section('titulo', 'Página de Rutas Saludos y CRUD pruebas')

{{--@section('estilos-css')  // forma incorrecta !!!
    <link rel="stylesheet" href="{{asset('/css/style.css')}}">
@endsection--}}

{{--Forma acorrecta--}}
@section('css-extra')
    @vite(['resources/css/rutas.css'])
@endsection

{{--Forma correcta pero menos limpia--}}
{{--@vite(['resources/css/rutas.css'])--}}

{{--injección o llamada al contenido main que definimos en el template general--}}
@section('main-content')

    <!-- MAIN CONTENT-->

    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
        <div class="max-w-4xl w-full">
            <h1 class="text-5xl font-bold mb-6 text-center bg-amber-300 p-6">Total Rutas de Prueba</h1>

            {{--Mini ruta--}}
            <div class="text-center mb-6">
                <a href="{{ route('ruta') }}"
                   class="text-blue-600 font-semibold underline hover:text-blue-800">
                    Ir a Mini Ruta: Ruta
                </a>
            </div>
            {{--Si NO tienes una ruta definida llamada ruta
            Puedes usar directamente la URL:--}}
           {{-- <a href="/ruta" class="text-blue-600 font-semibold underline hover:text-blue-800">
                Ir a Mini Ruta: Ruta
            </a>--}}

            <h2 class="text-3xl font-bold mb-6 text-center bg-blue-200 p-3">Saludos Horarios</h2>

            @include('app.partials.saludos-botones-hora')

            <h2 class="text-3xl font-bold mb-6 text-center bg-blue-200 p-3">Saludos Acciones y verbos HTTP </h2>

            @include('app.partials.saludos-botones-rutas')

        </div>
    </div>
@endsection
