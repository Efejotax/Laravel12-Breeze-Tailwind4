<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// RUTA RAIZ
/*Route::get('/', function () {
    return view('index');
});*/
Route::get('/', function () {
    return view('app/front/home');
});

// SALUDOS
use App\Http\Controllers\SaludoController;
//Route::view('/saludos', 'saludos');
/*Route::get('/saludos', function () {
    return view('/saludos');
} );*/

// Ruta con Controlador devualve metodo index
Route::get('/saludos', [SaludoController::class, 'index']);
Route::get('/saludos/dia', [SaludoController::class, 'dia']);
Route::get('/saludos/tarde', [SaludoController::class, 'tarde']);
Route::get('/saludos/noche', [SaludoController::class, 'noche']);

// Ruta con función anómima devuelve html
/*Route::get('/saludos', function () {
    return "<h1>Saludos cordiales</h1>";
} );*/
// Ruta con función anómima devuelve html
/*Route::get('/saludos/dia', function () {
    return "<h1>Buenos días</h1>";
} );*/
// Ruta con función anómima devuelve html
/*Route::get('/saludos/tarde', function () {
        return "<h1>Buenas tardes</h1>";
} );*/
// Ruta con función anómima devuelve html
/*Route::get('/saludos/noche', function () {
    return "<h1>Buenas noches</h1>";
} );*/

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
