<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;

class GetTheSimpsomsController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // Llamada a la API externa
        $response = Http::get('https://thesimpsonsapi.com/api/characters');

        // Verificar si la petición fue exitosa
        if (! $response->successful()) {
            return response()->json([
                'error' => 'No se pudo obtener la API de Los Simpsons'
            ], 500);
        }

        // La API devuelve un array plano, NO "results"
        $characters = $response->json();

        // Retornar el JSON tal cual
        return response()->json($characters);
    }

}
