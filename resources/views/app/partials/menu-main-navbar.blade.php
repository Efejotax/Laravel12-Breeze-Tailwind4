<nav class="w-full bg-white border-b relative">
    <div class="max-w-[1585px] mx-auto px-4 bg-gray-900">
        <div class="flex justify-between items-center h-16">

            <!-- BOTÓN HAMBURGUESA (solo <=1050px) -->
            <button id="menu-btn"
                    class="hidden max-[1050px]:block text-3xl text-white cursor-pointer">
                ☰
            </button>

            <!-- MENÚ DESKTOP (solo >1050px) -->
            <ul class="flex space-x-6 text-lg max-[1050px]:hidden">
                <li class="relative group">
                    <button class="text-red-400 hover:text-red-600 flex items-center gap-1 cursor-pointer">
                        Inicio
                        <span class="text-sm">▼</span>
                    </button>

                    <ul class="absolute left-0 mt-2 w-40 bg-white shadow-lg rounded-md border hidden group-hover:block z-50">
                        <li><a href="/" class="block px-4 py-2 text-red-400 hover:bg-gray-100 hover:text-red-600">Index</a></li>
                        <li><a href="{{route('index2')}}" class="block px-4 py-2 text-red-400 hover:bg-gray-100 hover:text-red-600">Index2</a></li>
                        <li><a href="{{route('inicio')}}" class="block px-4 py-2 text-red-400 hover:bg-gray-100 hover:text-red-600">Inicio</a></li>
                        <li><a href="{{route('home')}}" class="block px-4 py-2 text-red-400 hover:bg-gray-100 hover:text-red-600">Home</a></li>
                    </ul>
                </li>

                <li><a href="{{route('empresa')}}" class="hover:text-red-600">Empresa</a></li>
                <li><a href="{{route('servicios')}}" class="hover:text-red-600">Servicios</a></li>
                <li><a href="{{route('productos')}}" class="hover:text-red-600">Productos</a></li>
                <li><a href="{{route('contacto')}}" class="hover:text-red-600">Contacto</a></li>
                <li><a href="{{route('rutas')}}" class="text-slate-400 hover:text-red-600">Rutas</a></li>
                <li><a href="{{route('crud')}}" class="text-slate-400 hover:text-red-600">Crud</a></li>
                <li><a href="{{route('saludos')}}" class="text-slate-400 hover:text-red-600">Saludos</a></li>
                <li><a href="{{route('orm-crud')}}" class="text-blue-400 hover:text-red-600">CRUD</a></li>
            </ul>
        </div>
    </div>
</nav>

<!-- MENÚ MÓVIL (oculto SIEMPRE hasta click) -->
<ul id="mobile-menu"
    class="hidden fixed left-0 right-0 top-16
           bg-gray-900 text-lg
           px-8 py-8
           grid grid-cols-2 gap-x-12 gap-y-6
           max-h-[80vh] overflow-y-auto
           z-50">

    <li><a href="/" class="block text-red-400 hover:text-red-600">Index</a></li>
    <li><a href="{{route('index2')}}" class="block text-red-400 hover:text-red-600">Index2</a></li>

    <li><a href="{{route('inicio')}}" class="block text-red-400 hover:text-red-600">Inicio</a></li>
    <li><a href="{{route('home')}}" class="block text-red-400 hover:text-red-600">Home</a></li>

    <li><a href="{{route('empresa')}}" class="block hover:text-red-600">Empresa</a></li>
    <li><a href="{{route('servicios')}}" class="block hover:text-red-600">Servicios</a></li>

    <li><a href="{{route('productos')}}" class="block hover:text-red-600">Productos</a></li>
    <li><a href="{{route('contacto')}}" class="block hover:text-red-600">Contacto</a></li>

    <li><a href="{{route('rutas')}}" class="block text-slate-400 hover:text-red-600">Rutas</a></li>
    <li><a href="{{route('crud')}}" class="block text-slate-400 hover:text-red-600">Crud</a></li>

    <li><a href="{{route('saludos')}}" class="block text-slate-400 hover:text-red-600">Saludos</a></li>
    <li><a href="{{route('orm-crud')}}" class="block text-blue-400 hover:text-red-600">CRUD</a></li>
</ul>

<script>
    const btn = document.getElementById("menu-btn");
    const menu = document.getElementById("mobile-menu");

    btn.addEventListener("click", () => {
        menu.classList.toggle("hidden");
    });
</script>
