<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mt-10">

    <!-- CARD 1 Saludos día-->
    <a href="/saludos/dia" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo1-dia.png') }}" class="w-full h-32 object-cover" alt="Saludo día">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Buenos Días</h3>
            <h4>Saludo día</h4>
        </div>
    </a>

    <!-- CARD 2 Saludos tarde -->
    <a href="/saludos/tarde" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo2-tarde.png') }}" class="w-full h-32 object-cover" alt="Saludo tarde">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Buenos Tardes</h3>
            <h4>Saludo tarde</h4>
        </div>
    </a>

    <!-- CARD 3 - Saludos noche -->
    <a href="/saludos/noche" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo3-noche.png') }}" class="w-full h-32 object-cover" alt="Saludo noche">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Buenas Noches</h3>
            <h4>Saludo noche</h4>
        </div>
    </a>

    <!-- CARD 4 - saludos Listar (index) -->
    <a href="/saludos/index" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo4-index.png') }}" class="w-full h-32 object-cover" alt="Saludo CRUD index">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola listar</h3>
            <h4>Método Index</h4>
        </div>
    </a>

    <!-- CARD 5 - Saludo Crear (create)-->
    <a href="saludos/crear" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo5-create.png') }}" class="w-full h-32 object-cover" alt="saludo CRUD create">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Crear</h3>
            <h4>Método Create</h4>
        </div>
    </a>

</div>

{{--FILA 2--}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mt-10">

    <!-- CARD 6 - Saludo Almacenar (store)-->
    <a href="saludos/almacenar" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo6-store.png') }}" class="w-full h-32 object-cover" alt="Saludo CRUD store ">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Almacenar</h3>
            <h4>Método Store</h4>
        </div>
    </a>

    <!-- CARD 7 - Saludo Mostrar (show) -->
    <a href="/saludos/mostrar" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo7-show.png') }}" class="w-full h-32 object-cover" alt="Saludo CRUD show">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Mostrar</h3>
            <h4>Método Show</h4>
        </div>
    </a>

    <!-- CARD 8 - Saludo Actualizar (update) -->
    <a href="/saludos/tarde" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo8-update.png') }}" class="w-full h-32 object-cover" alt="Saludo CRUD update">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Actualizar</h3>
            <h4>Método Update</h4>
        </div>
    </a>

    <!-- CARD 9 - Saludo Borrar (destroy) -->
    <a href="/saludos/borrar" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo9-eliminar.png') }}" class="w-full h-32 object-cover" alt="Saludo CRUD eliminar">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Eliminar</h3>
            <h4>Método Destroy</h4>
        </div>
    </a>

    <!-- CARD 10 - Saludo HolaMundo -->
    <a href="/crud" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludo10-holamundo.png') }}" class="w-full h-32 object-cover" alt="Saludo HolaMundo">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Mundo</h3>
            <h4>prueba general</h4>
        </div>
    </a>

</div>
