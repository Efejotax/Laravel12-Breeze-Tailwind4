@extends('app.layouts.template')

@section('titulo', 'Students CRUD Edit')

@section('main-content')

    <div class="max-w-3xl mx-auto mt-10 bg-white shadow rounded-lg p-8">

        <h1 class="text-3xl font-bold text-gray-800 mb-6">
            Editar estudiante
        </h1>

        {{-- Mostrar errores de validación --}}
        @if ($errors->any())
            <div class="mb-6 p-4 bg-red-100 text-red-700 rounded">
                <ul class="list-disc pl-6">
                    @foreach ($errors->all() as $error)
                        <li>{{ $error }}</li>
                    @endforeach
                </ul>
            </div>
        @endif

        {{-- FORMULARIO --}}
        <form action="{{ route('students.update', $student->id) }}" method="POST" class="space-y-6">
            @csrf
            @method('PUT')

            {{-- Nombre --}}
            <div>
                <label for="name" class="block text-gray-700 font-semibold mb-1">
                    Nombre del estudiante
                </label>

                <input type="text"
                       name="name"
                       id="name"
                       value="{{ old('name', $student->name) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300"
                       placeholder="Introduce el nombre">

                @error('name')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Teléfono --}}
            <div>
                <label for="phone" class="block text-gray-700 font-semibold mb-1">
                    Teléfono
                </label>

                <input type="text"
                       name="phone"
                       id="phone"
                       value="{{ old('phone', $student->phone) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300"
                       placeholder="Introduce el teléfono">

                @error('phone')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Dirección --}}
            <div>
                <label for="address" class="block text-gray-700 font-semibold mb-1">
                    Dirección
                </label>

                <input type="text"
                       name="address"
                       id="address"
                       value="{{ old('address', $student->address) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300"
                       placeholder="Introduce la dirección">

                @error('address')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Email --}}
            <div>
                <label for="email" class="block text-gray-700 font-semibold mb-1">
                    Email
                </label>

                <input type="email"
                       name="email"
                       id="email"
                       value="{{ old('email', $student->email) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300"
                       placeholder="Introduce el email">

                @error('email')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Curso --}}
            <div>
                <label for="curso" class="block text-gray-700 font-semibold mb-1">
                    Curso
                </label>

                <input type="text"
                       name="curso"
                       id="curso"
                       value="{{ old('curso', $student->curso) }}"
                       class="w-full border border-gray-300 rounded px-4 py-2 focus:ring focus:ring-blue-300"
                       placeholder="Introduce el curso">

                @error('curso')
                <p class="text-red-600 text-sm mt-1">{{ $message }}</p>
                @enderror
            </div>

            {{-- Botones --}}
            <div class="flex justify-between items-center mt-6">

                <a href="{{ route('students.index') }}"
                   class="px-4 py-2 bg-gray-500 text-white rounded hover:bg-gray-600">
                    Volver
                </a>

                <button type="submit"
                        class="px-6 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                    Actualizar estudiante
                </button>

            </div>

        </form>

    </div>

@endsection
