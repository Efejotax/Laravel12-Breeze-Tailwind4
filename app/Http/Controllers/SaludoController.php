<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    // metodos de Resource
    public function index(){
        return view('saludos.index');
        //return "<h1>Saludos desde metod index() return html</h1>";
    }
    public function dia(){
        return view('saludos.dia');
        //return "<h1>Saludos desde metod dia() return html</h1>";
    }
    public function tarde(){
        return view('saludos.tarde');
        //return "<h1>Saludos desde metod tarde() return html</h1>";
    }
    public function noche(){
        return view('saludos.noche');
        //return "<h1>Saludos desde metod noche() return html</h1>";
    }

    public function create(){
        //return view('saludos.create');
        return "<h1>Crear saludos</h1>";
    }
    public function store(Request $request){
        //return view('saludos.store');
        return "<h1>almacenar saludos</h1>";
    }
    public function show($id){
        //return view('saludos.show');
        return "<h1>mostrar saludos</h1>";
    }
    public function edit($id){
        //return view('saludos.edit');
        return "<h1>editar saludos</h1>";
    }
    public function update(Request $request, $id){
        //return view('saludos.update');
        return "<h1>actualizar saludos</h1>";
    }
    public function destroy($id){
        //return view('saludos.destroy');
        return "<h1>eliminar saludos</h1>";
    }



}
