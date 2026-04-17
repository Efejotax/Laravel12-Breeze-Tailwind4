<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mt-10">

    <!-- CARD 10 - Saludo CRUD HolaMundo -->
    <a href="/saludos/holamundo" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/hello-world.png') }}" class="w-full h-32 object-contain bg-white p-2" alt="Saludo HolaMundo">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Mundo</h3>
            <h4>prueba general</h4>
        </div>
    </a>

    <!-- CARD 1 Saludos día-->
    <a href="/saludos/dia" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludos.jpg') }}" class="w-full h-32 object-contain bg-white p-2" alt="Saludo día">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Buenos Días</h3>
            <h4>Saludo día</h4>
        </div>
    </a>

    <!-- CARD 2 Saludos tarde -->
    <a href="/saludos/tarde" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludos.jpg') }}" class="w-full h-32 object-contain bg-white p-2" alt="Saludo tarde">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Buenos Tardes</h3>
            <h4>Saludo tarde</h4>
        </div>
    </a>

    <!-- CARD 3 - Saludos noche -->
    <a href="/saludos/noche" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/saludos.jpg') }}" class="w-full h-32 object-contain bg-white p-2" alt="Saludo noche">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Buenas Noches</h3>
            <h4>Saludo noche</h4>
        </div>
    </a>

    <!-- CARD 4 - Saludo CRUD Listar (index) -->
    <a href="/saludos/listar" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/crud.png') }}" class="w-full h-32 object-contain bg-white p-2" alt="Saludo CRUD index">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola listar</h3>
            <h4>Método Index</h4>
        </div>
    </a>

</div>

{{--FILA 2--}}
<div class="grid grid-cols-1 sm:grid-cols-2 lg:grid-cols-5 gap-6 mt-10">

    <!-- CARD 5 - Saludo CRUD Crear (create)-->
    <a href="saludos/crear" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/crud.png') }}" class="w-full h-32 object-contain bg-white p-2" alt="saludo CRUD create">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Crear</h3>
            <h4>Método Create</h4>
        </div>
    </a>

    <!-- CARD 6 - Saludo CRUD Almacenar (store)-->
    <a href="saludos/almacenar" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/crud.png') }}" class="w-full h-32 object-contain bg-white p-2" alt="Saludo CRUD store ">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Almacenar</h3>
            <h4>Método Store</h4>
        </div>
    </a>

    <!-- CARD 7 - Saludo CRUD Mostrar (show) -->
    <a href="/saludos/mostrar" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/crud.png') }}" class="w-full h-32 object-contain bg-white p-2" alt="Saludo CRUD show">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Mostrar</h3>
            <h4>Método Show</h4>
        </div>
    </a>

    <!-- CARD 8 - Saludo CRUD Actualizar (update) -->
    <a href="/saludos/actualizar" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/crud.png') }}" class="w-full h-32 object-contain bg-white p-2" alt="Saludo CRUD Update">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Actualizar</h3>
            <h4>Método Update (PUT) y (PATCH)</h4>
        </div>
    </a>

    <!-- CARD 9 - Saludo CRUD Borrar (destroy) -->
    <a href="/saludos/eliminar" class="bg-white shadow-md rounded-lg overflow-hidden hover:scale-105 transition">
        <img src="{{ asset('assets/img/crud.png') }}" class="w-full h-32 object-contain bg-white p-2" alt="Saludo CRUD Eliminar">
        <div class="p-4 text-center">
            <h3 class="text-xl font-bold">Hola Eliminar</h3>
            <h4>Método Destroy (DELETE)</h4>
        </div>
    </a>





</div>
