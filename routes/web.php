<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;

Route::get('/', function () {
    return view('home');
});


Route::get('/register', [RegisterController::class, 'create'])->name('registeruser.index');
Route::get('/login', [SessionController::class, 'create'])->name('login.index');

