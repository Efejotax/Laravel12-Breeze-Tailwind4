<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class StarWarsController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(request $request)
    {
        // metodo para una vista simple de planetas de StarWars a partir de este endpoint:
        /*$response = Http::get('https://www.swapi.tech/api/planets/');
        $planets = $response->json()['results'];

        return view('pokemon.index', compact('pokemons'));*/

        // Method de listado con paginación:
        $page = $request->get('page', 1);
        $limit = 10; // Planetas de StarWars por página
        $offset = ($page - 1) * $limit;

        $response = Http::get("https://www.swapi.tech/api/planets/?offset={$offset}&limit={$limit}");

        if (! $response->successful()) {
            abort(500, 'Error al obtener los Planetas');
        }

        $data = $response->json();

        return view('starwars.index', [
            'planetas' => $data['results'],
            'previous' => $page > 1 ? $page - 1 : null,
            'next' => $data['next'] ? $page + 1 : null,
        ]);
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
    public function show($id)
    {
        $response = Http::get("https://www.swapi.tech/api/planets/{$id}");

        if (! $response->successful()) {
            abort(404, 'Planeta no encontrado');
        }

        $planeta = $response->json()['result'];

        return view('starwars.show', compact('planeta'));
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
