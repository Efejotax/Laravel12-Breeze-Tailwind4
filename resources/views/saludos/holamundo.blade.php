{{--<h1 class="flex justify-center">Saludos Hola Mundo {{$nombre}} {{$apellido}}/ metod holamundo() / return view()</h1>
<h2>Saludos Hola Mundo</h2>
<h3>Saludos desde método holamundo()</h3>--}}

@extends('app.layouts.template')
@section('titulo', 'Página de Rutas Saludos CRUD - HolaMundo')
@section('contenido')

    <!-- MAIN CONTENT-->

    <div class="min-h-screen bg-gray-100 flex items-center justify-center p-6">
        <div class="max-w-4xl w-full">
            <h1 class="text-6xl font-bold mb-6 text-center bg-amber-300 p-6">Rutas de Prueba</h1>

            <h2 class="text-3xl font-bold mb-6 text-center bg-pink-200 p-3">Hola Mundo</h2>

            <h2 class="text-3xl font-bold mb-6 text-center bg-blue-200 p-3">Saludos CRUD + Hola Mundo</h2>

            {{-- Menú Rutas 2 --}}
            <div class="flex justify-center my-8">
                <ul class="grid grid-cols-2 sm:grid-cols-3 md:grid-cols-4 gap-4 text-lg font-semibold">

                    <li>
                        <a href="/saludos/listar"
                           class="block text-center px-6 py-3 bg-cyan-300 text-black rounded-lg shadow hover:bg-cyan-400 transition">
                            Listar
                        </a>
                    </li>

                    <li>
                        <a href="/saludos/crear"
                           class="block text-center px-6 py-3 bg-teal-300 text-black rounded-lg shadow hover:bg-teal-400 transition">
                            Crear
                        </a>
                    </li>

                    <li>
                        <a href="/saludos/almacenar"
                           class="block text-center px-6 py-3 bg-sky-300 text-black rounded-lg shadow hover:bg-sky-400 transition">
                            Almacenar
                        </a>
                    </li>

                    <li>
                        <a href="/saludos/mostrar"
                           class="block text-center px-6 py-3 bg-emerald-300 text-black rounded-lg shadow hover:bg-emerald-400 transition">
                            Mostrar
                        </a>
                    </li>

                    <li>
                        <a href="/saludos/editar"
                           class="block text-center px-6 py-3 bg-blue-300 text-black rounded-lg shadow hover:bg-blue-400 transition">
                            Editar
                        </a>
                    </li>

                    <li>
                        <a href="/saludos/actualizar"
                           class="block text-center px-6 py-3 bg-green-300 text-black rounded-lg shadow hover:bg-green-400 transition">
                            Actualizar
                        </a>
                    </li>

                    <li>
                        <a href="/saludos/borrar"
                           class="block text-center px-6 py-3 bg-indigo-300 text-black rounded-lg shadow hover:bg-indigo-400 transition">
                            Borrar
                        </a>
                    </li>

                    <li>
                        <a href="/saludos/holamundo"
                           class="block text-center px-6 py-3 bg-gray-300 text-black rounded-lg shadow hover:bg-gray-400 transition">
                            Hola Mundo
                        </a>
                    </li>

                </ul>
            </div>

        </div>
    </div>
@endsection

