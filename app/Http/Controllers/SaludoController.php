<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class SaludoController extends Controller
{
    // metodos de Resource
    public function index(){
        //return view('saludo');
        return "<h1>Hola saludo método index</h1>";
    }
    public function create(){
        //return view('saludo.create');
        return "<h1>Crear saludo</h1>";
    }
    public function store(Request $request){
        //return view('saludo.store');
        return "<h1>almacenar saludo</h1>";
    }
    public function show($id){
        //return view('saludo.show');
        return "<h1>mostrar saludo</h1>";
    }
    public function edit($id){
        //return view('saludo.edit');
        return "<h1>editar saludo</h1>";
    }
    public function update(Request $request, $id){
        //return view('saludo.update');
        return "<h1>actualizar saludo</h1>";
    }
    public function destroy($id){
        //return view('saludo.destroy');
        return "<h1>eliminar saludo</h1>";
    }



}
