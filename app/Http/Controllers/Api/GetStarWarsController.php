<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetStarWarsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // API endpoint: https://www.swapi.tech/api/
        // Comando: php artisan make:controller GetStarWarsController --invokable

        // sin vista, solo pinta el JSON
        // Llamada a la API externa
        $response = Http::get('https://www.swapi.tech/api/planets');
        // Convertir a JSON
        $data = $response->json();
        // Retornar solo una lista de resultados
        return $data['results'];

        // para generar una vista: pero mejor ponemos esto en el StarWarsController
        /*$response = Http::get('https://www.swapi.tech/api/planets');
        $planets = $response->json()['results'];*/
    }
}
