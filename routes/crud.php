<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\StudentController;
//use App\Http\Controllers\TeacherController;
//use App\Http\Controllers\ProjectController;
//use App\Http\Controllers\ProductController;

// Rutas CRUD de tipo resource:
//Route::resource('students', StudentController::class);
//Route::resource('teachers', TeacherController::class);
//Route::resource('Projects, ProjectController::class);
//Route::resource('Products, ProductController::class);


// Students:
//Route::get('/students.index', [StudentController::class, 'index'])->name('students.index');
//Route::get('/students/create', [StudentController::class, 'create'])->name('students.create');

Route::resource('students', StudentController::class);
