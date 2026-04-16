<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

// Controller de tipo --Resource:
// Dispone de 7 Acciones o Methods: (index, create, store, show, edit, update, destroy)
class ProductController extends Controller
{
    /**
     * Display a listing of the resource. Acción: Listar mostrar todos los recursos
     */
    public function index()
    {
        //
    }

    /**
     * Show the form for creating a new resource. Acción: Crear
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage. Acción: Almacenar Guardar
     * Requiere implementar la Clase Request: StoreProductRequest
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
     * Show the form for editing the specified resource. Acción: Editar
     */
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage. Acción: Actualizar
     *  Requiere implementar la Clase Request: UpdateProductRequest
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
