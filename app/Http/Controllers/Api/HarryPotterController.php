<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// $response = Http::get("http://url{$id}")

class HarryPotterController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1. Hacemos petición GET a la API
        $response = Http::get('https://hp-api.onrender.com/api/characters');

        // 2. Verificamos si la petición tiene éxito
        if ($response->successful()) {

            // 3. Convertir la respuesta JSON a un array
            $characters = $response->json(); // ← AQUÍ está el cambio

            // 4. Retornar la vista con los personajes
            return view('harrypotter.index', compact('characters'));
        }

        // En caso de error
        return view('harrypotter.index', ['characters' => []]);
    }


    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        //
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        // 1. Obtener todos los personajes
        $response = Http::get('https://hp-api.onrender.com/api/characters');

        if (! $response->successful()) {
            abort(500, 'Error al obtener los personajes');
        }

        $characters = $response->json();

        // 2. Verificar que el índice exista
        if (! isset($characters[$id])) {
            abort(404, 'Personaje no encontrado');
        }

        // 3. Obtener el personaje por índice
        $character = $characters[$id];

        // 4. Enviar a la vista
        return view('harrypotter.show', compact('character'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}
