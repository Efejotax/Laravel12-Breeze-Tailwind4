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
    public function tarde(){
        return view('saludos.tarde');
        //return "<h1>Saludos desde Method tarde() return html</h1>";
    }
    public function noche(){
        return view('saludos.noche');
        //return "<h1>Saludos desde Method noche() return html</h1>";
    }
    public function holamundo(){
        //return view('saludos.holamundo');
        return "<h1>Saludos desde el Method holamundo() return html</h1>";
    }
    // Methods de tipo Resource: ()
    // los de tipo Api son iguales excepto los methods create y edit

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
