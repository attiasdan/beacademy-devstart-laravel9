<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    UserController,
    ViaCepController
};

Route::get('/users', [UserController::class, 'index'])->name('users.index');
Route::get('/users/{id}', [UserController::class, 'show'])->name('users.show');

//VIA CEP WEB SERVICE
Route::get('/viacep', [ViaCepController::class, 'index'])->name('viacep.index');
Route::post('/viacep', [ViaCepController::class, 'index'])->name('viacep.index.post');
Route::get('/viacep/{cep}', [ViaCepController::class, 'show'])->name('viacep.show');

// Route::get('/', function () {
//     return view('welcome');
// });

// Route::get('/hello-world', function () {
//     echo 'Hello World!';
// });

// Route::get('/users/{nome}', function($nome) {
//     echo $nome;
// });