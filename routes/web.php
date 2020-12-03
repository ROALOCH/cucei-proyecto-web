<?php

use App\Http\Controllers\TodoController;
use App\Http\Controllers\UserController;
use Illuminate\Http\Request;
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

Route::get('/todos', [TodoController::class, 'index'])->name('todo.index');

Route::get('/todos/create', [TodoController::class, 'create']);

Route::post('/todos/create', [TodoController::class, 'store']);

Route::get('/todos/{todo}/edit', [TodoController::class, 'edit']);

Route::patch('/todos/{todo}/update', [TodoController::class, 'update'])->name('todo.update');

Route::put('/todos/{todo}/complete', [TodoController::class, 'complete'])->name('todo.complete');

Route::put('/todos/{todo}/incomplete', [TodoController::class, 'incomplete'])->name('todo.incomplete');
