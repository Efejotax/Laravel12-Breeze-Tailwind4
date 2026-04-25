<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetRickAndMortyController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // API endpoint: https://rickandmortyapi.com/api
        // Comando: php artisan make:controller GetRickAndMortyController --invokable

        // sin vista, solo pinta el JSON
        // Llamada a la API externa
        $response = Http::get('https://rickandmortyapi.com/api/character');
        // Convertir a JSON
        $data = $response->json();
        // Retornar solo una lista de resultados
        return $data['results'];

        // para generar una vista: pero mejor ponemos esto en el RickAndMortyController
        /*$response = Http::get('https://rickandmortyapi.com/api/character');
        $planets = $response->json()['results'];*/
    }
}
