<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    // Métodos para manejar rutas concretas
    public function dia(){
        return view('saludos.dia');
        //return "<h1>Saludos desde Method dia() return html</h1>";
    }
    public function goodMorning(){
        return "<h1>Good Morning</h1>";
    }
    public function tarde(){
        return view('saludos.tarde');
        //return "<h1>Saludos desde Method tarde() return html</h1>";
    }
    public function goodAfternoon(){
        return "<h1>Good Afternoon</h1>";
    }
    public function noche(){
        return view('saludos.noche');
        //return "<h1>Saludos desde Method noche() return html</h1>";
    }
    public function goodNight(){
        return "<h1>Good Night</h1>";
    }
    public function helloWorld2(){
        return view('helloworld');
        //return "<h1>Saludos desde el Method holamundo() return html</h1>";
    }

    // Pasando parámetros a través del method del Controller. 2 formas:
    // forma 1. Pasar parámetros usando un array asociativo:
    public function holamundo2(){
        $user = "Pedro";
        return "'Saludos HolaMundo 2 $user', ['texto' => $user]";
    }
    public function holamundo3(){
        $user = "Pedro";
        return view('helloworld', ['texto' => $user]);
    }
    // forma 2. Pasar parámetros usando el method compact():
    public function holamundo4(){
        $texto = "HolaHola";
        return "Saludos HolaMundo 4', compact('texto')";
    }
    public function holamundo5(){
        $texto = "HolaHola";
        return view('saludos.holamundo', compact('texto'));
    }

    // Opción 1: Usar HEREDOC (permite variables)
    public function helloWorldHeredoc(){
        //return "<h1>Hello Wordl</h1>";
        $user= 'Pedro';
        $back = back()->getTargetUrl();
        $backUrl = url()->previous();
        $toIndex = url('/'); // manda a la página raíz index
        return <<<HTML
        <!--@extends('app.layout.template')-->
         <div style="padding:2px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <h1 style="font-size: 4rem">Hello World</h1>
        </div>
        <div style="padding:2px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <h2 style="font-size: 4rem">From Heredoc</h2>
        </div>
        <div style="padding:20px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <h2>Bienvenido <span style="color: yellow">$user</span></h2>
        </div>
        <!--BOTONES VOLVER ATRAS Y VOLVER A INDEX-->
         <div style="padding:20px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <a href="$backUrl"
               style="background:#3490dc; padding:10px 20px; border-radius:6px; color:white; text-decoration:none; font-weight:bold;">
                ← Volver atrás
            </a>
        </div>
        <div style="padding:20px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <a href="$toIndex"
               style="background:#3490dc; padding:10px 20px; border-radius:6px; color:white; text-decoration:none; font-weight:bold;">
                ← Volver a index
            </a>
        </div>
        <div style="padding:20px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <a href="$back"
               style="background:#3490dc; padding:10px 20px; border-radius:6px; color:white; text-decoration:none; font-weight:bold;">
                ← Volver hacia atrás
            </a>
        </div>

        HTML;
    }
    // Opción 2: Usar NOWDOC (no interpola variables)
    public function helloWorldNowdoc(){
        //return "<h1>Hello Wordl</h1>";
        $user= 'Pedro';
        $back = back()->getTargetUrl();
        $backUrl = url()->previous();
        $toIndex = url('/'); // manda a la página raíz index
        return <<<'HTML'
        <!--@extends('app.layout.template')-->
        <div style="padding:2px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <h1 style="font-size: 4rem">Hello World</h1>
        </div>
        <div style="padding:2px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <h2 style="font-size: 4rem">From Nowdoc</h2>
        </div>
        <div style="padding:20px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <h2>Bienvenido <span style="color: yellow">$user</span></h2>
        </div>
        <!--BOTONES VOLVER ATRAS Y VOLVER A INDEX-->
        <div style="padding:20px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <a href="$backUrl"
               style="background:#3490dc; padding:10px 20px; border-radius:6px; color:white; text-decoration:none; font-weight:bold;">
                ← Volver atrás
            </a>
        </div>
        <div style="padding:20px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <a href="$toIndex"
               style="background:#3490dc; padding:10px 20px; border-radius:6px; color:white; text-decoration:none; font-weight:bold;">
                ← Volver a index
            </a>
        </div>
        <div style="padding:20px; background:#222; color:#fff; display:flex; justify-content:center; align-items:center;">
            <a href="$back"
               style="background:#3490dc; padding:10px 20px; border-radius:6px; color:white; text-decoration:none; font-weight:bold;">
                ← Volver hacia atrás
            </a>
        </div>
        HTML;
    }

    // Methods de tipo Resource: ()
    // los de tipo Api son iguales, excepto que no tiene los methods create y edit
    public function index(){
        return view('saludos.index');
        //return "<h1>Saludos desde metod index() return html</h1>";
    }
    public function create(){
        //return view('saludos.create');
        return "<h1>Crear saludos / Method index()</h1>";
    }
    public function store(Request $request){
        //return view('saludos.store');
        return "<h1>almacenar saludos / Method store()</h1>";
    }
    public function show($id){
        //return view('saludos.show');
        return "<h1>mostrar saludos / Method show()</h1>";
    }
    public function edit($id){
        //return view('saludos.edit');
        return "<h1>editar saludos / Method edit()</h1>";
    }
    public function update(Request $request, $id){
        //return view('saludos.update');
        return "<h1>actualizar saludos / Method update()</h1>";
    }
    public function destroy($id){
        //return view('saludos.destroy');
        return "<h1>eliminar saludos / Method destroy()</h1>";
    }



}
