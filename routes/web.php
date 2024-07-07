<?php

use App\Models\Rekam;
use App\Models\Antrian;
use App\Models\Fasilitas;
use App\Http\Middleware\LoginAuth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\PagesController;
use App\Http\Controllers\RekamController;
use App\Http\Controllers\DokterController;
use App\Http\Controllers\PasienController;
use App\Http\Controllers\AntrianController;
use App\Http\Controllers\FasilitasController;

//AUTH
Route::get('/', [AuthController::class, 'login'])->name('login');
Route::post('/login', [AuthController::class, 'authenticate'])->name('masuk');
Route::get('/logout', [AuthController::class, 'logout'])->name('logout');

//ADMIN

Route::middleware('auth', 'LoginAuth:admin')->group(function () {

    //USERS
    Route::post('/register', [AuthController::class, 'register'])->name('register');

    //PAGES

    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');
    Route::get('/user', [PagesController::class, 'user'])->name('user');

    //ANTRIAN

    Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian');
    Route::get('/addantrian', [AntrianController::class, 'create'])->name('addantrian');
    Route::post('/createantrian', [AntrianController::class, 'store'])->name('createantrian');
    Route::delete('/deleteantrian/{antrian}', [AntrianController::class, 'destroy'])->name('deleteantrian');

    //DOKTER

    Route::get('/dokter', [DokterController::class, 'index'])->name('dokter');
    Route::get('/adddokter', [DokterController::class, 'create'])->name('adddokter');
    Route::delete('/deletedokter/{dokter}', [DokterController::class, 'destroy'])->name('deletedokter');

    //PASIEN

    Route::get('/pasien', [PasienController::class, 'index'])->name('pasien');
    Route::get('/addpasien', [PasienController::class, 'create'])->name('addpasien');
    Route::delete('/deletepasien/{pasien}', [PasienController::class, 'destroy'])->name('deletepasien');

    //ANTRIAN

    Route::get('/rekammedis', [RekamController::class, 'index'])->name('rekam-medis');

    //FASILITAS

    Route::get('/fasilitas', [FasilitasController::class, 'index'])->name('fasilitas');


    
});

//DOKTER

Route::middleware('auth', 'LoginAuth:admin,dokter')->group(function () {

    //PAGES

    Route::get('/dashboard', [PagesController::class, 'dashboard'])->name('dashboard');

    //ANTRIAN

    Route::get('/antrian', [AntrianController::class, 'index'])->name('antrian');


});

//PASIEN

Route::middleware([LoginAuth::class . ':pasien'])->group(function () {

    //PAGES

    Route::get('/E-Hospital Harapan Bunda', [PagesController::class, 'dashboardpasien'])->name('dashboard-pasien');

});
