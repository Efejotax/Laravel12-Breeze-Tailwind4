<div x-data="{ open: false }" class="relative inline-block text-left">
    <button
        @click="open = !open"
        class="inline-flex items-center px-4 py-2 bg-gray-200 rounded-md text-gray-900"
    >
        {{ strtoupper(app()->getLocale()) }}
        <svg class="w-4 h-4 ml-2 text-gray-900" fill="none" stroke="currentColor" viewBox="0 0 24 24">
            <path stroke-linecap="round" stroke-linejoin="round" stroke-width="2"
                  d="M19 9l-7 7-7-7"/>
        </svg>
    </button>

    <div
        x-show="open"
        @click.outside="open = false"
        x-transition
        class="absolute right-0 z-50 mt-2 w-32 bg-white border rounded shadow text-gray-900"
    >
        <a href="{{ route('lang.switch', 'es') }}"
           class="block px-4 py-2 hover:bg-gray-100 text-gray-900">
            Español
        </a>

        <a href="{{ route('lang.switch', 'en') }}"
           class="block px-4 py-2 hover:bg-gray-100 text-gray-900">
            English
        </a>
    </div>
</div>
