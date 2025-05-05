<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\TodoController;
use Rap2hpoutre\LaravelLogViewer\LogViewerController;

Route::get('/', [TodoController::class, 'index'])->name('home');
Route::get('/home', static function () {
    return view('welcome');
})->name('welcome');

Route::resource('todos', TodoController::class);

Route::get('logs', [LogViewerController::class, 'index']);