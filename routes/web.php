<?php

use App\Http\Controllers\CursoController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/greeting', function () {
    return 'Hello, World!';
});

// Cursos
Route::get("/index-curso", [CursoController::class, "index"])->name("cursos.index");