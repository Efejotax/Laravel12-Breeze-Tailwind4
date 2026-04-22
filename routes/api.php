<?php

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Route;
//use App\Http\Controllers\GetPokemonController;
//use App\Http\Controllers\GetStarWarsController;

Route::middleware('auth:sanctum')->get('/user', function (Request $request) {
    return $request->user();
});


// Rutas API externas:

/*Route::get('/pokemons', 'App\Http\Controllers\PokemonController@index');
Route::get('/pokemons/{pokemon}', 'App\Http\Controllers\PokemonController@show');*/

use App\Http\Controllers\GetPokemonController;
// La ruta API de Pokémon vinculada a controller con method invoke:
// Ruta: http://localhost:8000/api/pokemon-invoke
Route::get('/pokemon/invoke', GetPokemonController::class)->name('pokemon.invoke');

use App\Http\Controllers\GetStarWarsController;
// La ruta API de StarWars vinculada a controller con method invoke:
// Ruta: http://localhost:8000/api/starwars/planets/invoke
Route::get('/starwars/planets/invoke', GetStarWarsController::class)->name('starwars.invoke');

use App\Http\Controllers\GetMoviesController;
// La ruta API de Movies IMD API vinculada a controller con method invoke:
// Ruta: http://localhost:8000/api/movies
Route::get('/movies', GetMoviesController::class)->name('movies.invoke');
//https://api.imdbapi.dev/titles







// Ruta para pruebas API
/*use Illuminate\Support\Facades\Route;
Route::get('/test-api', function () {
    return 'API funcionando';
});*/
