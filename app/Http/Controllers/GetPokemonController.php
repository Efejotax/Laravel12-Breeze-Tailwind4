<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Http;


class GetPokemonController extends Controller
{
    /**
     * Handle the incoming request.
     */
    public function __invoke(Request $request)
    {
        // API ennpoint: https://pokeapi.co/api/v2/
        // Comando: php artisan make:controller GetPokemonController --invokable
        //return ['pokemon' => 'Pikachu'];

        // sin vista, solo pinta el JSON
        // Llamada a la API externa
        $response = Http::get('https://pokeapi.co/api/v2/pokemon');
        // Convertir a JSON
        $data = $response->json();
        // Retornar solo la lista de pokemons
        return $data['results'];

        // para generar una vista: pero mejor ponemos esto en el PokemonController
        /*$response = Http::get('https://pokeapi.co/api/v2/pokemon');
        $pokemons = $response->json()['results'];*/

    }
}
