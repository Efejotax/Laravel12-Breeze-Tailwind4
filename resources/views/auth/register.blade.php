{{--<x-guest-layout>--}}
@extends('app.layouts.template')

@section('titulo', 'Register page')

@section('main-content')

    <div class="min-h-screen flex items-center justify-center bg-gray-100 py-12">
        <div class="w-full max-w-md bg-white shadow-md rounded-lg p-8">

            <form method="POST" action="{{ route('register') }}">
                @csrf

                <!-- Name -->
                <div>
                    <p>Name</p>
                    <x-input-label for="name" :value="__('Name')" />
                    <x-text-input id="name" class="block mt-1 w-full"
                                  type="text" name="name"
                                  :value="old('name')" required autofocus autocomplete="name" />
                    <x-input-error :messages="$errors->get('name')" class="mt-2" />
                </div>

                <!-- Email Address -->
                <div class="mt-4">
                    <p>Email Address</p>
                    <x-input-label for="email" :value="__('Email')" />
                    <x-text-input id="email" class="block mt-1 w-full"
                                  type="email" name="email"
                                  :value="old('email')" required autocomplete="username" />
                    <x-input-error :messages="$errors->get('email')" class="mt-2" />
                </div>

                <!-- Password -->
                <div class="mt-4">
                    <p>Password</p>
                    <x-input-label for="password" :value="__('Password')" />
                    <x-text-input id="password" class="block mt-1 w-full"
                                  type="password" name="password"
                                  required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password')" class="mt-2" />
                </div>

                <!-- Confirm Password -->
                <div class="mt-4">
                    <p>Confirm Password</p>
                    <x-input-label for="password_confirmation" :value="__('Confirm Password')" />
                    <x-text-input id="password_confirmation" class="block mt-1 w-full"
                                  type="password" name="password_confirmation"
                                  required autocomplete="new-password" />
                    <x-input-error :messages="$errors->get('password_confirmation')" class="mt-2" />
                </div>

                <!-- Buttons -->
                <div class="flex items-center justify-between mt-6">
                    <a class="underline text-sm text-gray-600 hover:text-gray-900"
                       href="{{ route('login') }}">
                        {{ __('Already registered?') }}
                    </a>

                    {{--<x-primary-button class="ms-4">
                        {{ __('Register') }}
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
