{{--<x-guest-layout>--}} {{--Comentamos la plantilla de B--}}
@extends('app.layouts.template')

@section('titulo', 'Login page')

@section('main-content')

    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">

            <!-- Session Status -->
            <x-auth-session-status class="mb-4" :status="session('status')" />

            <form method="POST" action="{{ route('login') }}">
                @csrf

                <!-- Email Address -->
                <div>
                    <p>Email Address</p>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full"
                                  type="email" name="email"
                                  :value="old('email')" required autofocus autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <p>Password</p>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password" name="password"
                                  required autocomplete="current-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Remember Me -->
                <div class="block mt-4">
                    <label for="remember_me" class="inline-flex items-center">
                        <input id="remember_me" type="checkbox"
                               class="rounded border-gray-300 text-indigo-600 shadow-sm focus:ring-indigo-500"
                               name="remember">
                        <span class="ms-2 text-sm text-gray-600">{{ __('Remember me') }}</span>
                    </label>
                </div>

                <!-- Buttons -->
                <div class="flex items-center justify-between mt-6">

                    @if (Route::has('password.request'))
                        <a class="underline text-sm text-gray-600 hover:text-gray-900"
                           href="{{ route('password.request') }}">
                            {{ __('Forgot your password?') }}
                        </a>
                    @endif

                   {{-- <x-primary-button>
                        {{ __('Log in') }}
                    </x-primary-button>--}}
                        <button
                            type="submit"
                            class="ms-3 bg-blue-500 hover:bg-blue-700 text-white font-semibold px-4 py-2 rounded cursor-pointer transition">
                            {{ __('Log in') }}
                        </button>


                </div>
            </form>

        </div>
    </div>

@endsection

{{--</x-guest-layout>--}}
