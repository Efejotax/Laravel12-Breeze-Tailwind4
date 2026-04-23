<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetMoviesController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // API endpoint: https://api.imdbapi.dev/titles
        // Comando: php artisan make:controller GetMoviesController --invokable
        /*return ['title' => '{uid}'];
        return ['title' => '{id}'];
        return ['title' => '{name}'];*/

        // sin vista, solo pinta el JSON
        // Llamada a la API externa
        $response = Http::get('https://api.imdbapi.dev/titles');
        // Convertir a JSON
        $data = $response->json();
        // Retornar solo la lista de Movies
        return $data;

        // para generar una vista: pero mejor ponemos esto en el MovieController
        /*$response = Http::get('https://api.imdbapi.dev/titles');
        $titles = $response->json()['results'];*/
        //dd($data);
    }
}
