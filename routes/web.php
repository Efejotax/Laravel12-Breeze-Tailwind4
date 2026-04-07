<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// RUTA RAIZ
Route::get('/', function () {
    return view('app/front/home');
});

// SALUDOS
use App\Http\Controllers\SaludoController;
//Route::view('/saludo', 'saludo');
/*Route::get('/saludo', function () {
    return view('/saludo');
} );*/

// Ruta con Controlador devualve metodo index
//Route::get('/saludo', [SaludoController::class, 'index']);

// Ruta con función anómima devuelve html
Route::get('/saludoss', function () {
    return "<h1>Saludos</h1>";
} );
// Ruta con función anómima devuelve html
Route::get('/saludo/dia', function () {
    return "<h1>Buenos días</h1>";
} );
// Ruta con función anómima devuelve html
Route::get('/saludo/tarde', function () {
        return "<h1>Buenas tardes</h1>";
} );
// Ruta con función anómima devuelve html
Route::get('/saludo/noche', function () {
    return "<h1>Buenas noches</h1>";
} );

// Ruta parametrizada con un argumento
Route::get('/hola/{nombre}', function ($nombre) {
    return "<h1>Hola {$nombre}</h1>";
} );
// Ruta parametrizada con 2 argumentos y el 2º es opcional
Route::get('/hola/{nombre}/{apellido?}', function ($nombre, $apellido=null) {
    return "<h1>Hola {$nombre} {$apellido}</h1>";
} );



// Rutas creadas por Breeze para la autenticación
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
