{{-- Diseño pantalla grande --}}
<header class="hidden lg:flex flex-row justify-between items-center p-3 h-header bg-gray-300">

    <img class="max-h-full w-30" src="{{ asset('assets/img/logo.png') }}" alt="logo">

    <h1 class="text-3xl xl:text-5xl text-gray-700">{{ __("[ API / ORM / CRUD ]") }}</h1>

    <div class="space-x-2 flex flex-row">

        @guest
            <a href="{{ route('login') }}">
                <button class="btn btn-sm btn-primary">{{ __("Login") }}</button>
            </a>
            <a href="{{ route('register') }}">
                <button class="btn btn-sm btn-primary">{{ __("Register") }}</button>
            </a>
        @endguest

        @auth
            <span class="text-green-800 text-xl">{{ auth()->user()->name }}</span>

            <form action="{{ route('logout') }}" method="POST">
                @csrf
                <button class="btn btn-primary" type="submit">Logout</button>
            </form>
        @endauth

        <form action="{{ route('set_lang') }}" method="POST">
            @csrf
            <select class="w-24" name="lang" id="lang" onchange="this.form.submit()">
                <option disabled>{{ __("Selecciona idioma") }}</option>

                @foreach(config('langs') as $lang => $detail)
                    <option value="{{ $lang }}" {{ $lang == app()->getLocale() ? 'selected' : '' }}>
                        {{ $detail['name'] }} {{ $detail['flag'] }}
                    </option>
                @endforeach
            </select>
        </form>

    </div>

</header>


{{-- Diseño pantalla móvil --}}
<header class="lg:hidden flex flex-row justify-center items-center p-5 space-x-5 bg-gray-300">

    <img class="max-h-full w-25" src="{{ asset('assets/img/logo.png') }}" alt="logo">

    <div class="flex flex-row space-x-3">

        {{-- Selector de idioma --}}
        <div class="relative z-50">
            <input type="checkbox" class="peer sr-only" id="menu_lang">

            <label for="menu_lang">
                <img class="w-6 h-6" src="{{ asset('assets/img/lang.png') }}" alt="lang button">
            </label>

            <label for="menu_lang" class="fixed inset-0 bg-black/40
                opacity-0 pointer-events-none
                peer-checked:opacity-100
                peer-checked:pointer-events-auto
                transition-opacity duration-300">
            </label>

            <form action="{{ route('set_lang') }}" method="POST"
                  class="hidden peer-checked:flex flex-col absolute left-0 top-8 bg-white p-2 z-50">
                @csrf

                @foreach(config('langs') as $lang => $detail)
                    <button type="submit" name="lang" value="{{ $lang }}"
                            class="px-2 py-1 hover:bg-gray-100 rounded text-left">
                        {{ $detail['flag'] }} {{ $detail['name'] }}
                    </button>
                @endforeach

            </form>
        </div>


        {{-- Menú login/register --}}
        @guest
            <div class="relative">
                <input type="checkbox" class="peer sr-only" id="menu_login">

                <label for="menu_login">
                    <img class="w-6 h-6" src="{{ asset('assets/img/burguer.png') }}" alt="burguer button">
                </label>

                <label for="menu_login" class="fixed inset-0 bg-black/40
                    opacity-0 pointer-events-none
                    peer-checked:opacity-100
                    peer-checked:pointer-events-auto
                    transition-opacity duration-300">
                </label>

                <div class="hidden peer-checked:flex flex-col absolute left-8 bg-white p-2 rounded shadow">
                    <a href="{{ route('login') }}">
                        <button class="btn btn-sm btn-primary">{{ __("Login") }}</button>
                    </a>
                    <a href="{{ route('register') }}">
                        <button class="btn btn-sm btn-primary">{{ __("Register") }}</button>
                    </a>
                </div>
            </div>
        @endguest


        {{-- Menú usuario --}}
        @auth
            <div class="relative z-50">

                <input type="checkbox" class="peer hidden" id="menu_user">

                <label for="menu_user"
                       class="flex items-center gap-1 cursor-pointer px-3 py-1 rounded bg-gray-100 hover:bg-gray-200 transition">

                    <span class="text-green-800 font-semibold">
                        {{ auth()->user()->name }}
                    </span>

                    <svg class="w-4 h-4 transition-transform duration-200 peer-checked:rotate-180"
                         fill="none" stroke="currentColor" stroke-width="2"
                         viewBox="0 0 24 24">
                        <path stroke-linecap="round" stroke-linejoin="round"
                              d="M19 9l-7 7-7-7"/>
                    </svg>
                </label>

                <label for="menu_user"
                       class="fixed inset-0 bg-black/30 opacity-0 pointer-events-none
                       peer-checked:opacity-100 peer-checked:pointer-events-auto
                       transition-opacity duration-300">
                </label>

                <div class="hidden peer-checked:flex flex-col absolute right-0 mt-2
                    bg-white shadow-lg rounded p-2 min-w-[120px]">

                    <form action="{{ route('logout') }}" method="POST">
                        @csrf
                        <button type="submit" class="btn btn-sm btn-primary w-full">
                            Logout
                        </button>
                    </form>

                </div>

            </div>
        @endauth

    </div>

</header>
