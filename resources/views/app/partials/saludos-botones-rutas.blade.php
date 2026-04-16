{{-- FILA 1: 3 columnas (Listar, Crear, Almacenar) --}}
<div class="flex justify-center my-8">
    <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-3 gap-4 text-lg font-semibold">

        <li>
            <a href="/saludos/listar"
               class="block text-center px-6 py-3 bg-cyan-300 text-black rounded-lg shadow hover:bg-cyan-400 transition">
                <p>Listar<br>(GET)</p>
            </a>
        </li>

        <li>
            <a href="/saludos/crear"
               class="block text-center px-6 py-3 bg-teal-300 text-black rounded-lg shadow hover:bg-teal-400 transition">
                <p>Crear<br>(POST)</p>
            </a>
        </li>

        <li>
            <a href="/saludos/almacenar"
               class="block text-center px-6 py-3 bg-sky-300 text-black rounded-lg shadow hover:bg-sky-400 transition">
                <p></p>Almacenar<br>(POST)</p>
            </a>
        </li>

    </ul>
</div>


{{-- FILA 2: 4 columnas (Mostrar, Editar, Actualizar, Eliminar) --}}
<div class="flex justify-center my-8">
    <ul class="grid grid-cols-1 sm:grid-cols-2 md:grid-cols-4 gap-4 text-lg font-semibold">

        <li>
            <a href="/saludos/mostrar"
               class="block text-center px-6 py-3 bg-emerald-300 text-black rounded-lg shadow hover:bg-emerald-400 transition">
                <p>Mostrar<br>(GET)</p>
            </a>
        </li>

        <li>
            <a href="/saludos/editar"
               class="block text-center px-6 py-3 bg-blue-300 text-black rounded-lg shadow hover:bg-blue-400 transition">
                <p>Editar<br>(PUT/PATCH)</p>
            </a>
        </li>

        <li>
            <a href="/saludos/actualizar"
               class="block text-center px-6 py-3 bg-green-300 text-black rounded-lg shadow hover:bg-green-400 transition">
                <p>Actualizar<br>(PUT/PATCH)</p>
            </a>
        </li>

        <li>
            <a href="/saludos/eliminar"
               class="block text-center px-6 py-3 bg-indigo-300 text-black rounded-lg shadow hover:bg-indigo-400 transition">
                <p>Eliminar<br>(DELETE)</p>
            </a>
        </li>

    </ul>
</div>
