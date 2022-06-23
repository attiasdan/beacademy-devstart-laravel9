<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\UserController;

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello-world', function () {
//     echo 'Hello World!';
// });

// Route::get('/users/{nome}', function($nome) {
//     echo $nome;
// });