<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class MoviesController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        $response = Http::get("https://api.imdbapi.dev/titles");

        if (! $response->successful()) {
            abort(500, 'Error al obtener las Películas');
        }

        $data = $response->json();
        $movies = $data['titles'] ?? [];

        return view('movies.index', [
            'movies' => $movies
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
        // Llamada a la API externa
//        $response = Http::get("https://imdbapi.dev/api/v1/title/{$id}");
        $response = Http::get("https://imdbapi.dev/api/v1/titles/{$id}");


        // Si la API falla
        if ($response->failed()) {
            abort(404, "No se pudo obtener la información de la película.");
        }

        // Convertir a JSON
        $movie = $response->json();

        // Enviar a la vista
        return view('movies.show', compact('movie'));
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
