@extends('app.layouts.template')

@section('contenido')
    <h1 class="text-6xl font-bold mb-6 text-center bg-amber-300 p-6">Buenas tardes / método tarde() / return view()</h1>
    <h2 class="text-3xl font-bold mb-6 text-center bg-blue-200">Saludo por la tarde</h2>
    <h3 class="text-3xl font-bold mb-6 text-center bg-blue-200">Saludos desde método tarde()</h3>

    {{-- Menú estilizado --}}
    <div class="flex justify-center my-8">
        <ul class="flex space-x-6 text-lg font-semibold">
            <li>
                <a href="/saludos/dia"
                   class="px-6 py-2 bg-yellow-400 text-black rounded-lg shadow hover:bg-yellow-500 transition">
                    Día
                </a>
            </li>

            <li>
                <a href="/saludos/tarde"
                   class="px-6 py-2 bg-orange-500 text-black  rounded-lg shadow hover:bg-orange-600 transition">
                    Tarde
                </a>
            </li>

            <li>
                <a href="/saludos/noche"
                   class="px-6 py-2 bg-red-700 text-black  rounded-lg shadow hover:bg-red-800 transition">
                    Noche
                </a>
            </li>
        </ul>
    </div>

    <img src="{{asset('assets/img/tarde.jpg')}}"
         alt="foto tarde"
         class="mx-auto w-[800px] h-[450px] object-cover rounded-lg shadow">

@endsection
