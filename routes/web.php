<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;


// Redirección del Dashboard a la raíz:
/*Route::get('/dashboard', function () {
    return redirect('/');
});*/
// Redirección del Dashboard a una ruta determinada:
/*Route::get('/dashboard', function () {
    return redirect()->route('home');
});*/


// DEFINIMOS LA RUTA RAÍZ - (Index / Home / Inicio):
// INDEX --> página principal Raiz con URL: '/'
Route::get('/', function () {
    return view('app.front.index');
})->name('index');

// Probando que se pueden generar más rutas de inicio:

// INDEX2 --> pero con URL: '/index'
Route::get('/index', function () {
    return view('app.front.index');
})->name('index2');

// HOME --> enlace en el logo
Route::view('/home', 'app.front.home')->name('home');

// INICIO --> enlace en menú
Route::view('/inicio', 'app.front.inicio')->name('inicio');

// Varias formas de definir la ruta sin Controller por method get y view:
// Como la ruta index general no vamos a usarla, la comentamos.
/*Route::get('/', function () {
    return view('index');
});*/
/*Route::get('/', function () {
    return view('app.front.index');
})->name('index');
Route::view('/', 'index')->name('index');*/
// HOME --> enlace en el logo
/*Route::view('/home', 'app/front/home')->name('home');
Route::get('/', function () {
    return view('app/front/home');
})->name('inicio');*/
// INICIO --> enlace en menu
/*Route::view('/inicio', 'app.front.inicio')->name('inicio');
Route::get('/', function () {
    return view('app/front/inicio');
})->name('inicio');*/


// RUTAS PÁGINAS INFO ESTÁTICAS Y SIN LOGICA .- por get y por view
/*Route::get('/empresa', function () {
    return view('app/front/empresa');
});*/
Route::get('/contacto', function () {
    return view('app/front/contacto');
});
// Páginas estáticas de pruebas:
Route::view('/contacto', 'app/front/contacto')->name('contacto');
Route::view('/empresa', 'app/front/empresa')->name('empresa');
Route::view('/servicios', 'app/front/servicios')->name('servicios');
Route::view('/productos', 'app/front/productos')->name('productos');
Route::view('orm-crud', 'app/front.orm-crud')->name('orm-crud');

// SALUDO CONTROLLER
use App\Http\Controllers\SaludoController;
//Route::view('/saludos', 'saludos');
/*Route::get('/saludos', function () {
    return view('/saludos');
} );*/

// Rutas máxima simplicidad:
Route::view('/saludo', 'saludo')->name('saludo');
Route::view('/ruta', 'ruta')->name('ruta');

// Ruta a rutas del menú main: envía a página simple para probar rutas de saludos de prueba
Route::view('/crud', '/crud')->name('crud');
Route::view('/rutas', '/rutas')->name('rutas');
Route::view('/saludos', '/saludos')->name('saludos');
// Rutas simples que llevan a una vista con template: dia , tarde y noche.
//Route::view('/rutas/saludos/dia', '/rutas/saludos.dia')->name('rutas.saludos.dia');
Route::view('saludos/dia', 'saludos.dia')->name('saludos.dia');
Route::view('saludos/tarde', 'saludos.tarde')->name('saludos.tarde');
Route::view('saludos/noche', 'saludos.noche')->name('saludos.noche');
// Rutas simples que llevan a una vista con template: representan los métodos CRUD.
Route::view('saludos/listar', 'saludos.index')->name('saludos.listar');
Route::view('saludos/crear', 'saludos.create')->name('saludos.crear');
Route::view('saludos/almacenar', 'saludos.store')->name('saludos.almacenar');
Route::view('saludos/mostrar', 'saludos.show')->name('saludos.mostrar');
Route::view('saludos/editar', 'saludos.edit')->name('saludos.editar');
Route::view('saludos/actualizar', 'saludos.update')->name('saludos.actualizar');
Route::view('saludos/eliminar', 'saludos.destroy')->name('saludos.eliminar');
Route::view('saludos/holamundo', 'saludos.holamundo')->name('saludos.holamundo');

// Rutas con Controlador.
// Devuelve ruta concreta y lanza el correspondiente Method del SaludoController:
// que ofrece una vista o un string html
/*Route::get('/saludos/dia', [SaludoController::class, 'dia']);
Route::get('/saludos/tarde', [SaludoController::class, 'tarde']);
Route::get('/saludos/noche', [SaludoController::class, 'noche']);*/


// Saludos con CONTROLLER
// Rutas saludo de pruebas con Controlador
// y retorna un method con una vista, un texto, un elemento Html o un Heredoc/Nowdoc
Route::get('/saludos/good-morning', [SaludoController::class, 'goodMorning'])->name('goodMorning');
Route::get('/saludos/good-afternoon', [SaludoController::class, 'goodAfternoon'])->name('goodAfternoon');
Route::get('/saludos/good-night', [SaludoController::class, 'goodNight'])->name('goodNight');

// Rutas saludo de pruebas con Controlador
// y retorna un method con una vista, un texto, un elemento Html o un Heredoc/Nowdoc
//Route::get('/saludos/hello-world', [SaludoController::class, 'helloWorldNowdoc'])->name('helloworld');
Route::get('/saludos/hello-world', [SaludoController::class, 'helloWorldHeredoc'])->name('helloworld');


// Rutas de tipo Resource con Controller y Method:
Route::get('/listar', [SaludoController::class, 'index']);
Route::get('/crear', [SaludoController::class, 'create']);
Route::post('/almacenar', [SaludoController::class, 'store']);
Route::get('/mostrar', [SaludoController::class, 'show']);
Route::get('/editar', [SaludoController::class, 'edit']);
Route::put('/actualizar', [SaludoController::class, 'update']);
//Route::patch('/actualizar', [SaludoController::class, 'update']);
Route::delete('/eliminar', [SaludoController::class, 'destroy']);


// Rutas con Method view() parámetos: URL y path del template
//Route::view('/saludos/', 'saludo.index');
//Route::view('/saludos/dia', 'saludos.dia');
/*Route::get('/saludos/dia', function () {
    return view('saludos/dia');
})->name('saludos.dia');*/
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

// Ruta parametrizada con un argumento.
// Usando array asociativo y method compact()
Route::get('/hola/{nombre}', function ($nombre) {
    return view('saludos/holamundo', ['nombre' => $nombre]);
    //return "<h1>Hola {$nombre}</h1>";
} );
Route::get('/hola/{nombre}', function ($nombre) {
    return view('saludos/holamundo', compact('nombre'));
    //return "<h1>Hola {$nombre}</h1>";
} );
// Ruta parametrizada con 2 argumentos y el 2º es opcional,
// aunque si no la ponemos en la URL como param de un error.
// Usando array asociativo y method compact()
Route::get('/hola/{nombre}/{apellido?}', function ($nombre, $apellido=null) {
    return view('saludos/holamundo', ['nombre' => $nombre, 'apellido' => $apellido]);
    //return "<h1>Hola {$nombre} {$apellido}</h1>";
} );
Route::get('/hola/{nombre}/{apellido?}', function ($nombre, $apellido=null) {
    return view('saludos/holamundo', compact('nombre', 'apellido'));
    //return "<h1>Hola {$nombre} {$apellido}</h1>";
} );

/*Route::get('/saludos/holamundo', function () {
    return view('saludos.holamundo');
});
Route::view('saludos/holamundo', 'saludos.holamundo');*/

//Route::get('/saludo{i}', [SaludoController::class, 'show'])->name('saludo{i}');

// Rutas en bucle con variables:
/*foreach (range(1, 20) as $i) {
    Route::get('/saludo'.$i, function () use ($i) {
        return "Hola desde saludo $i";
    })->name('saludo'.$i);
}*/
/*foreach (range(1, 20) as $i) {
    Route::get('/saludo'.$i, function () use ($i) {
       return view('saludo/saludo', ['nombre' => $i]);
    })->name('saludo'.$i);
}*/
/*foreach (range(1, 20) as $i) {
    Route::get('/rutas'.$i, function () use ($i) {
       return view('rutas', ['rutas' => $i]);
    })->name('rutas'.$i);
}*/



// PRODUCT CONTROLLER
use App\Http\Controllers\ProductController;
Route::get('/listar', [ProductController::class, 'index']);
Route::get('/crear', [ProductController::class, 'create']);
Route::post('/almacenar', [ProductController::class, 'store']);
Route::get('/mostrar', [ProductController::class, 'show']);
Route::get('/editar', [ProductController::class, 'edit']);
Route::put('/actualizar', [ProductController::class, 'update']);
//Route::patch('/actualizar', [ProductController::class, 'update']);
Route::delete('/eliminar', [ProductController::class, 'destroy']);





// RUTAS AUTH:
// Rutas creadasautomáticamente cuando instalamos Breeze para la autenticación //
//*****************************************************************************//
// Ruta del dashboard cuando hacemos login:
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Rutas middleware en grupo asociadas a los métodos edit, update y destroy:
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});
require __DIR__.'/auth.php';
//***************************************************************************************************************//
