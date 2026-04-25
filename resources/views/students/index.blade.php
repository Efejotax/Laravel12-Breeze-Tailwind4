@extends('app.layouts.template')
@section('titulo', 'Students CRUD Index')

@section('main-content')

    <div class="max-w-6xl mx-auto mt-10">

        <div class="flex justify-between items-center mb-6">
            <h1 class="text-2xl font-bold text-gray-900">Listado de estudiantes</h1>

            <a href="{{ route('students.create') }}"
               class="px-4 py-2 bg-blue-600 text-white rounded hover:bg-blue-700">
                + Nuevo estudiante
            </a>
        </div>

        {{-- Tabla --}}
        <div class="bg-white shadow rounded-lg overflow-hidden">
            <table class="min-w-full text-left">
                <thead class="bg-gray-100 text-gray-900">
                <tr>
                    <th class="px-4 py-2">ID</th>
                    <th class="px-4 py-2">Nombre</th>
                    <th class="px-4 py-2">Teléfono</th>
                    <th class="px-4 py-2">Dirección</th>
                    <th class="px-4 py-2">Email</th>
                    <th class="px-4 py-2">Curso</th>
                    <th class="px-4 py-2 text-center">Acciones</th>
                </tr>
                </thead>

                <tbody>
                @forelse ($students as $student)
                    <tr class="border-b">
                        <td class="px-4 py-2">{{ $student->id }}</td>
                        <td class="px-4 py-2">{{ $student->name }}</td>
                        <td class="px-4 py-2">{{ $student->phone }}</td>
                        <td class="px-4 py-2">{{ $student->address }}</td>
                        <td class="px-4 py-2">{{ $student->email }}</td>
                        <td class="px-4 py-2">{{ $student->curso }}</td>

                        <td class="px-4 py-2 text-center">
                            <div class="flex justify-center gap-2">

                                {{-- Editar --}}
                                <a href="{{ route('students.edit', $student->id) }}"
                                   class="px-3 py-1 bg-yellow-500 text-white rounded hover:bg-yellow-600">
                                    Editar
                                </a>

                                {{-- Eliminar --}}
                                {{--<form action="{{ route('students.destroy', $student->id) }}"
                                      method="POST"
                                      onsubmit="return confirm('¿Seguro que deseas eliminar este estudiante?')">
                                    @csrf
                                    @method('DELETE')

                                    <button class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700">
                                        Eliminar
                                    </button>
                                </form>--}}
                                <form action="{{ route('students.destroy', $student->id) }}"
                                      method="POST"
                                      class="delete-form">
                                    @csrf
                                    @method('DELETE')

                                    <button type="button"
                                            class="px-3 py-1 bg-red-600 text-white rounded hover:bg-red-700 delete-btn">
                                        Eliminar
                                    </button>
                                </form>


                            </div>
                        </td>
                    </tr>
                @empty
                    <tr>
                        <td colspan="7" class="px-4 py-4 text-center text-gray-500">
                            No hay estudiantes registrados.
                        </td>
                    </tr>
                @endforelse
                </tbody>
            </table>
        </div>

        {{-- Paginación --}}
        <div class="mt-4">
            {{ $students->links() }}
        </div>

    </div>
@section('scripts-js')
    <script src="https://cdn.jsdelivr.net/npm/sweetalert2@11"></script>
@endsection


    <script>
        document.querySelectorAll('.delete-btn').forEach(button => {
            button.addEventListener('click', function (e) {
                let form = this.closest('form');

                Swal.fire({
                    title: '¿Eliminar estudiante?',
                    text: "Esta acción no se puede deshacer",
                    icon: 'warning',
                    showCancelButton: true,
                    confirmButtonColor: '#d33',
                    cancelButtonColor: '#3085d6',
                    confirmButtonText: 'Sí, eliminar',
                    cancelButtonText: 'Cancelar'
                }).then((result) => {
                    if (result.isConfirmed) {
                        form.submit();
                    }
                });
            });
        });
    </script>

@endsection
