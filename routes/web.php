<?php

use App\Http\Middleware\LoginAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\PasienController;

//AUTH
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('masuk');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//ADMIN

Route::middleware('auth', 'LoginAuth:admin')->group(function () {

    //PAGES

    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    
});

//DOKTER

Route::middleware('auth', 'LoginAuth:admin,dokter')->group(function () {

    //PAGES

    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

});

//PASIEN

Route::middleware([LoginAuth::class . ':pasien'])->group(function () {

    //PAGES

    Route::get('/pasien', [PasienController::class, 'pasien'])->name('pasien');

});
