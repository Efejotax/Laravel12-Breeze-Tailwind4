<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetHarryPotterController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Llamada a la API externa
        $response = Http::get('https://hp-api.onrender.com/api/characters');

        // Verificar éxito
        if (! $response->successful()) {
            return response()->json(['error' => 'No se pudo obtener la API'], 500);
        }

        // La API devuelve un array plano, NO "results"
        $data = $response->json();

        // Retornar directamente el JSON
        return $data;


        //  La API de Harry Potter NO tiene un índice results.
        // API endpoint: https://hp-api.onrender.com/api/
        // Comando: php artisan make:controller GetHarryPotterController --invokable

        // sin vista, solo pinta el JSON en una ruta de tipo API
        // Llamada a la API externa --> EndPoint:
    /*    $response = Http::get('https://hp-api.onrender.com/api/characters');
        // Convertir de JSON a un array de PHP
        $data = $response->json();
        // Retornar solo una lista de resultados
        return $data['results'];*/

        // para generar una vista: pero mejor ponemos esto en el HarryPotterController
        /*$response = Http::get('https://hp-api.onrender.com/api/characters');
        $characters = $response->json()['results'];*/
    }
}
