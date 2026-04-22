<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
    {
        $page = $request->get('page', 1);
        $limit = 6; // ← 6 tarjetas por página
        $offset = ($page - 1) * $limit;

        $response = Http::get("https://api.imdbapi.dev/titles?offset={$offset}&limit={$limit}");

        if (! $response->successful()) {
            abort(500, 'Error al obtener las Películas');
        }

        $data = $response->json();
        $movies = $data['titles'];

        return view('movies.index', [
            'movies' => $movies,
            'previous' => $page > 1 ? $page - 1 : null,
            'next' => isset($data['next']) ? $page + 1 : null,
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
    public function show(string $id)
    {
        //
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
