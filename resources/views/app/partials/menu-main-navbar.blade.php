<ul class="flex space-x-6 text-lg">
    <li class="text-red-400"><a href="/" class="hover:text-red-400 transition">Index</a></li>
    {{--<li class="text-red-400"><a href="/index" class="hover:text-red-400 transition">Index2</a></li>
    <li class="text-red-400"><a href="/inicio" class="hover:text-red-400 transition">Inicio</a></li>
    <li class="text-red-400"><a href="/home" class="hover:text-red-400 transition">home</a></li>--}}
    <li class="text-red-400"><a href="{{route('index2')}}" class="hover:text-red-400 transition">Index2</a></li>
    <li class="text-red-400"><a href="{{route('inicio')}}" class="hover:text-red-400 transition">Inicio</a></li>
    <li class="text-red-400"><a href="{{route('home')}}" class="hover:text-red-400 transition">home</a></li>

    <li><a href="{{route('empresa')}}" class="hover:text-red-400 transition">Empresa</a></li>
    {{--<li><a href="/empresa" class="hover:text-red-400 transition">Empresa</a></li>--}}

    <li><a href="{{route('servicios')}}" class="hover:text-red-400 transition">Servicios</a></li>
    {{--<li><a href="/servicios" class="hover:text-red-400 transition">Servicios</a></li>--}}
    <li><a href="{{route('productos')}}" class="hover:text-red-400 transition">Productos</a></li>
    {{--<li><a href="/productos" class="hover:text-red-400 transition">Productos</a></li>--}}

    <li><a href="{{route('contacto')}}" class="hover:text-red-400 transition">Contacto</a></li>
    {{--<li><a href="/contacto" class="hover:text-red-400 transition">Contacto</a></li>--}}

    <li class="text-slate-400"><a href="{{route('rutas')}}" class="hover:text-red-400 transition">Rutas</a></li>
    {{--<li class="text-slate-400"><a href="/rutas" class="hover:text-red-400 transition">Rutas</a></li>--}}
    <li class="text-slate-400"><a href="{{route('crud')}}" class="hover:text-red-400 transition">Crud</a></li>
    {{--<li class="text-slate-400"><a href="/crud" class="hover:text-red-400 transition">Crud</a></li>--}}
    <li class="text-slate-400"><a href="{{route('saludos')}}" class="hover:text-red-400 transition">Saludos</a></li>
    {{--<li class="text-slate-400"><a href="/saludos" class="hover:text-red-400 transition">Saludos</a></li>--}}
    <li class="text-blue-400"><a href="{{route('orm-crud')}}" class="hover:text-red-400 transition">CRUD</a></li>
    {{--<li class="text-slate-400"><a href="/orm-crud" class="hover:text-red-400 transition">CRUD</a></li>--}}
</ul>
