<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\CousesController;

Route::get('/', function () {
    return view('welcome');
});

//Cursos
// metodos get,post,put delete
Route::get('/index-course', [CousesController::class, 'index'])->name('couses.index');

