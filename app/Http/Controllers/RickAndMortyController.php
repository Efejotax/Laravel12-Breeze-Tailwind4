<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;
class RickAndMortyController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        // 1. Hacemos petición GET a la API
        $response = Http::get('https://rickandmortyapi.com/api/character');

        // 2. verificamos si la petición tiene éxito:
        if ($response->successful()) {
            // 3. convertir la respuesta de Json a un array:
            $data = $response->json();
            $characters = $data['results']; // Los personajes están en el índice results
            // 4. Retornar la vista con los personajes:
            return view('rickandmorty.index', compact('characters'));
        }
        // En caso de error, manejarlo (por ejemplo, devolver una vista vacía)
        return view('rickandmorty.index', ['characters' => []]);
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
        // 1. Realizar la petición API externa:
        $response = Http::get("https://rickandmortyapi.com/api/character/{$id}");

        // 2. Verificar si la petición fue exitosa (status 200)
        if ($response->successful()) {
            $character = $response->json();  // convertir la respuesta JSON a un array de PHP
            return view('rickandmorty.show', compact('character'));
        }
        // 3. Manejar errores (ej: personaje no encontrado)
        abort(404, 'Personaje no encontrado');
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
