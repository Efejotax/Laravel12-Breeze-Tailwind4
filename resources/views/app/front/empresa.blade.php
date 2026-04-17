{{--@extends('app.layouts.template')--}}
@extends(auth()->check() ? 'app.layouts.template-back' : 'app.layouts.template')


@section('titulo', 'Página de Empresa')

@section('main-content')
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-6 py-12">

        <!-- Encabezados -->
        <h1 class="text-4xl font-bold text-gray-800 mb-4 text-center">
            Nuestra Empresa
        </h1>

        <h2 class="text-2xl font-semibold text-gray-600 mb-8 text-center">
            Compromiso, Innovación y Cercanía
        </h2>

        <!-- Párrafos -->
        <p class="max-w-2xl text-center text-gray-700 mb-4">
            Somos una empresa dedicada a ofrecer soluciones tecnológicas modernas, eficientes y adaptadas a las necesidades reales de nuestros clientes.
            Nuestro objetivo es facilitar procesos, mejorar experiencias y aportar valor en cada proyecto.
        </p>

        <p class="max-w-2xl text-center text-gray-700 mb-10">
            Creemos en la innovación constante, el trabajo en equipo y la transparencia.
            Cada día trabajamos para construir relaciones sólidas y duraderas basadas en la confianza y la calidad.
        </p>

        <!-- Imágenes centradas -->
        <div class="flex flex-col items-center space-y-6">
            <img src="{{ asset('assets/img/empresa-laravel.jpg') }}"
                 alt="Imagen empresa 1"
                 class="max-w-md w-full rounded-lg shadow">
        </div>

    </div>
@endsection

