<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;

Route::get('/', [TodoController::class, 'index'])->name('home');
Route::get('/home', static function () {
    return view('welcome');
})->name('welcome');

Route::resource('todos', TodoController::class);
