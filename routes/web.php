<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;


Route::get('/', function () {
    return view('home');
});

Route::get('/home', [App\Http\Controllers\HomeController::class, 'index'])->name('home');

// USERS

Route::get('/user', [UserController::class, 'index']);

Route::post('/upload', [UserController::class, 'uploadAvatar']);

Auth::routes();


// TODOS

Route::middleware('auth')->group(function () {

    Route::resource('/todo', TodoController::class);

    Route::put('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');

    Route::put('/todos/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');
});
