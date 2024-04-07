<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home');
});


Route::get('/register', [RegisterController::class, 'create'])
->name('registeruser.index');


Route::post('/register', [RegisterController::class, 'store'])
->name('registeruser.store');

Route::get('/login', [SessionController::class, 'create'])
->name('login.index');

Route::post('/login', [SessionController::class, 'store'])
->name('login.store');

Route::get('/logout', [SessionController::class, 'destroy'])

->name('login.destroy');

