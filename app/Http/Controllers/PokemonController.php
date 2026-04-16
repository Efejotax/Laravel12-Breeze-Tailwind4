<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controller de tipo --API: No Create y No Edit.
//  Dispone de 5 Acciones o Methods: (index, store, show, update, destroy)
class PokemonController extends Controller
{
    /**
     * Display a listing of the resource. Acción: Listar mostrar todos los recursos
     */
    public function index()
    {
        //
    }

    /**
     * Store a newly created resource in storage. Acción: Almacenar Guardar
     * Requiere implementar la Clase Request: StorePokemonRequest
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource. Acción: Mostrar un recurso
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage. Acción: Actualizar
     *  Requiere implementar la Clase Request: UpdatePokemonRequest
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage. Acción: Eliminar
     */
    public function destroy(string $id)
    {
        //
    }
}
