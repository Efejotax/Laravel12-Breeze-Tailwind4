@extends('app.layouts.template')

@section('titulo', 'Contacto')

@section('main-content')
    <div class="min-h-screen flex flex-col items-center justify-center bg-gray-100 px-4">

        <!-- Título -->
        <h1 class="text-4xl font-bold text-gray-800 mb-8">
            Contacto
        </h1>

        <!-- Formulario -->
        <form action="#" method="POST" class="bg-white p-6 rounded-lg shadow-md w-full max-w-md space-y-4">
            @csrf

            <!-- Nombre -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Nombre</label>
                <input type="text" name="nombre"
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                       required>
            </div>

            <!-- Email -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Email</label>
                <input type="email" name="email"
                       class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                       required>
            </div>

            <!-- Asunto -->
            <div>
                <label class="block text-gray-700 font-semibold mb-1">Asunto</label>
                <textarea name="asunto" rows="3"
                          class="w-full border border-gray-300 rounded-lg px-3 py-2 focus:ring focus:ring-blue-300"
                          required></textarea>
            </div>

            <!-- Botón -->
            <div class="text-center">
                <button type="submit"
                        class="bg-blue-600 text-white px-6 py-2 rounded-lg hover:bg-blue-700 transition">
                    Enviar
                </button>
            </div>

        </form>

    </div>
@endsection

