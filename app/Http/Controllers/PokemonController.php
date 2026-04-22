<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

// Controller de tipo --API: No Create y No Edit.
//  Dispone de 5 Acciones o Methods: (index, store, show, update, destroy)
class PokemonController extends Controller
{
    /**
     * Display a listing of the resource. Acción: Listar mostrar todos los recursos
     */
    public function index(Request $request)
    {
        // metodo para una vista simple de Pokemons a partir de este endpoint:
        /*$response = Http::get('https://pokeapi.co/api/v2/pokemon');
        $pokemons = $response->json()['results'];

        return view('pokemon.index', compact('pokemons'));*/

        // Method de listado con paginación:
        $page = $request->get('page', 1);
        $limit = 24; // Pokémon por página
        $offset = ($page - 1) * $limit;

        $response = Http::get("https://pokeapi.co/api/v2/pokemon?offset={$offset}&limit={$limit}");

        if (! $response->successful()) {
            abort(500, 'Error al obtener los Pokémon');
        }

        $data = $response->json();

        return view('pokemon.index', [
            'pokemons' => $data['results'],
            'previous' => $page > 1 ? $page - 1 : null,
            'next' => $data['next'] ? $page + 1 : null,
        ]);
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
        $response = Http::get("https://pokeapi.co/api/v2/pokemon/{$id}");

        if (! $response->successful()) {
            abort(404, 'Pokémon no encontrado');
        }

        $pokemon = $response->json();

        return view('pokemon.show', compact('pokemon'));
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
