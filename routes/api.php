<?php

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

use App\Http\Controllers\GetPokemonController;
// La ruta API de Pokémon vinculada al get-controller con method invoke:
// Ruta: http://localhost:8000/api/pokemon-invoke
Route::get('/pokemon/invoke', GetPokemonController::class)->name('pokemon.invoke');
//https://pokeapi.co/api/v2/

use App\Http\Controllers\GetStarWarsController;
// La ruta API de StarWars vinculada al get-controller con method invoke:
// Ruta: http://localhost:8000/api/starwars/planets/invoke
Route::get('/starwars/planets/invoke', GetStarWarsController::class)->name('starwars.invoke');
//http://swapi.info/api/planets

use App\Http\Controllers\GetMoviesController;
// La ruta API de Movies IMD API vinculada al get-controller con method invoke:
// Ruta: http://localhost:8000/api/movies
Route::get('/movies', GetMoviesController::class)->name('movies.invoke');
//https://api.imdbapi.dev/titles

use App\Http\Controllers\GetRickAndMortyController;
// La ruta API de Movies IMD API vinculada al get-controller con method invoke:
// Ruta: http://localhost:8000/api/rickandmorty/character/
Route::get('/ryckandmorty/character', GetRickAndMortyController::class)->name('rickandmorty.invoke');
//https://rickandmortyapi.com/api/character/

use App\Http\Controllers\GetHarryPotterController;
// La ruta API de Harry Potter API vinculada al get-controller con method invoke:
// Ruta: https://hp-api.onrender.com/api/characters
Route::get('/harrypotter/character', GetHarryPotterController::class)->name('harrypotter.invoke');
//https://hp-api.onrender.com/api/characters

use App\Http\Controllers\GetTheSimpsomsController;
// La ruta API de The Simpsoms API vinculada al get-controller con method invoke:
// Ruta: https://thesimpsonsapi.com/api/characters
Route::get('/thesimpsoms/character', GetTheSimpsomsController::class)->name('thesimpsoms.invoke');
//https://thesimpsonsapi.com/api/characters/1



// Ruta para pruebas API
/*use Illuminate\Support\Facades\Route;
Route::get('/test-api', function () {
    return 'API funcionando';
});*/
