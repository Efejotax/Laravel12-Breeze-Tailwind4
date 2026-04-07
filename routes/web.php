<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\HomeController;


//Path: /views/
/*Route::get('/', function () {
    return view('welcome');
});*/

//Path: /views/home
// funciona sin Controlador
/*Route::get('/', function () {
    return view('home');
});*/
// Métod view() más rápido y directo si lo usamos sin controller
Route::view('/', 'home')->name('home');

//Path: /views/app/front/
/*Route::get('/', function () {
    return view('app/front/home1');
});*/

//Path: /views/app/front/
/*Route::get('/', function () {
    return view('app/front/home2');
});*/

//Path: /views/app/front/
/*Route::get('/', function () {
    return view('app/front/home3');
});*/




//
Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
