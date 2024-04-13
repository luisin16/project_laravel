<?php

use Illuminate\Support\Facades\Route;
use Illuminate\Support\Facades\DB;
use App\Http\Controllers\RegisterController;
use App\Http\Controllers\SessionController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProductController;

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

Route::get('/dashboard', [DashboardController::class, 'index'])
    ->name('dashboard');

Route::delete('/dashboard/users/{id}', [DashboardController::class, 'destroy'])
    ->name('users.destroy');

Route::get('/dashboard/users/{id}/edit', [DashboardController::class, 'edit'])
    ->name('users.edit');
    
Route::put('/dashboard/users/{id}', [DashboardController::class, 'update'])
    ->name('users.update');

Route::get('/products', [ProductController::class, 'index'])->name('products.index');


Route::get('/logout', [SessionController::class, 'destroy'])

->name('login.destroy');

