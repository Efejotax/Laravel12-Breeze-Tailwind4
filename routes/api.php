<?php

use App\Http\Controllers\Api\GetHarryPotterController;
use App\Http\Controllers\Api\GetMoviesController;
use App\Http\Controllers\Api\GetPokemonController;
use App\Http\Controllers\Api\GetRickAndMortyController;
use App\Http\Controllers\Api\GetStarWarsController;
use App\Http\Controllers\Api\GetTheSimpsomsController;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;

//use App\Http\Controllers\GetPokemonController;
//use App\Http\Controllers\GetStarWarsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Todas las Rutas API Externas de mi App:

/*Route::get('/pokemons', 'App\Http\Controllers\PokemonController@index');
Route::get('/pokemons/{pokemon}', 'App\Http\Controllers\PokemonController@show');*/

// La ruta API de Pokémon vinculada al get-controller con method invoke:
// Ruta: http://localhost:8000/api/pokemon-invoke
Route::get('/pokemon/invoke', GetPokemonController::class)->name('pokemon.invoke');
//https://pokeapi.co/api/v2/

// La ruta API de StarWars vinculada al get-controller con method invoke:
// Ruta: http://localhost:8000/api/starwars/planets/invoke
Route::get('/starwars/planets/invoke', GetStarWarsController::class)->name('starwars.invoke');
//http://swapi.info/api/planets

// La ruta API de Movies IMD API vinculada al get-controller con method invoke:
// Ruta: http://localhost:8000/api/movies
Route::get('/movies', GetMoviesController::class)->name('movies.invoke');
//https://api.imdbapi.dev/titles

// La ruta API de Movies IMD API vinculada al get-controller con method invoke:
// Ruta: http://localhost:8000/api/rickandmorty/character/
Route::get('/ryckandmorty/character', GetRickAndMortyController::class)->name('rickandmorty.invoke');
//https://rickandmortyapi.com/api/character/

// La ruta API de Harry Potter API vinculada al get-controller con method invoke:
// Ruta: https://hp-api.onrender.com/api/characters
Route::get('/harrypotter/character', GetHarryPotterController::class)->name('harrypotter.invoke');
//https://hp-api.onrender.com/api/characters

// La ruta API de The Simpsoms API vinculada al get-controller con method invoke:
// Ruta: https://thesimpsonsapi.com/api/characters
Route::get('/thesimpsoms/character', GetTheSimpsomsController::class)->name('thesimpsoms.invoke');
//https://thesimpsonsapi.com/api/characters/1



// Ruta para pruebas API
/*use Illuminate\Support\Facades\Route;
Route::get('/test-api', function () {
    return 'API funcionando';
});*/
