@extends('app.layouts.template')
@section('titulo', 'Helloworld con Controller')
@section('main-content')
    <div class="flex justify-center text-center">
        <h1 style="font-size: 4rem">Hello World</h1>
    </div>
    <div class="flex justify-center text-center">
        <h2>Bienvenido $user</h2>
    </div>
@endsection
