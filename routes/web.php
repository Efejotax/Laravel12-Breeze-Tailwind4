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

// SALUDO CONTROLLER
use App\Http\Controllers\SaludoController;
//Route::view('/saludos', 'saludos');
/*Route::get('/saludos', function () {
    return view('/saludos');
} );*/

// Rutas con Controlador.
// Devuelve ruta concreta y lanza el Method
// que ofrece una vista o un string html
Route::get('/saludos/dia', [SaludoController::class, 'dia']);
Route::get('/saludos/tarde', [SaludoController::class, 'tarde']);
Route::get('/saludos/noche', [SaludoController::class, 'noche']);

// Rutas de tipo Resource:
Route::get('/listar', [SaludoController::class, 'index']);
Route::get('/crear', [SaludoController::class, 'create']);
Route::post('/almacenar', [SaludoController::class, 'store']);
Route::get('/mostrar', [SaludoController::class, 'show']);
Route::get('/editar', [SaludoController::class, 'edit']);
Route::put('/actualizar', [SaludoController::class, 'update']);
//Route::patch('/actualizar', [SaludoController::class, 'update']);
Route::delete('/destruir', [SaludoController::class, 'destroy']);


// Rutas con Method view() parámetos: URL y path del template
//Route::view('/saludos/', 'saludo.index');
//Route::view('/saludos/dia', 'saludos.dia');
//Route::view('/saludos/tarde', 'saludos.tarde');
//Route::view('/saludos/noche', 'saludos.noche');

//  Rutas con Method get y return Method view()
/*
Route::get('/saludos', function () {
    return view('index');
});
Route::get('/saludos/dia', function () {
    return view('saludos.dia');
});
Route::get('/saludos/tarde', function () {
    return view('saludos.tarde');
});
Route::get('/saludos/noche', function () {
    return view('saludos.noche');
});
*/

// Ruta con función anómima que devuelve html
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
    return view('saludos/holamundo', ['nombre' => $nombre]);
    //return "<h1>Hola {$nombre}</h1>";
} );
// Ruta parametrizada con 2 argumentos y el 2º es opcional,
// aunque si no la ponemos en la URL como param de un error
Route::get('/hola/{nombre}/{apellido?}', function ($nombre, $apellido=null) {
    return view('saludos/holamundo', ['nombre' => $nombre, 'apellido' => $apellido]);
    //return "<h1>Hola {$nombre} {$apellido}</h1>";
} );

/*Route::get('/saludos/holamundo', function () {
    return view('saludos.holamundo');
});
Route::view('saludos/holamundo', 'saludos.holamundo');*/


// PRODUCT CONTROLLER
use App\Http\Controllers\ProductController;
Route::get('/listar', [SaludoController::class, 'index']);
Route::get('/crear', [SaludoController::class, 'create']);
Route::post('/almacenar', [SaludoController::class, 'store']);
Route::get('/mostrar', [SaludoController::class, 'show']);
Route::get('/editar', [SaludoController::class, 'edit']);
Route::put('/actualizar', [SaludoController::class, 'update']);
//Route::patch('/actualizar', [SaludoController::class, 'update']);
Route::delete('/destruir', [SaludoController::class, 'destroy']);














// Rutas creadasautomáticamente cuando instalamos Breeze para la autenticación //
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
