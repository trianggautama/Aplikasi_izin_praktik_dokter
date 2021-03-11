<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\MainController;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\UserController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PermohonanController;


Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login'); 
    Route::get('/register', [AuthController::class, 'register'])->name('register'); 
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/beranda', [MainController::class, 'adminBeranda'])->name('beranda'); 

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index'); 
        Route::post('/', [UserController::class, 'store'])->name('store'); 
        Route::get('/edit/{uuid}', [UserController::class, 'edit'])->name('edit'); 
        Route::put('/edit/{uuid}', [UserController::class, 'update'])->name('update'); 
        Route::get('/delete/{uuid}', [UserController::class, 'delete'])->name('delete'); 
    });

    Route::prefix('pemohon')->name('pemohon.')->group(function () {
        Route::get('/', [PemohonController::class, 'index'])->name('index'); 
        Route::post('/', [PemohonController::class, 'store'])->name('store'); 
        Route::get('/edit/{uuid}', [PemohonController::class, 'edit'])->name('edit'); 
        Route::put('/edit/{uuid}', [PemohonController::class, 'update'])->name('update'); 
        Route::get('/delete/{uuid}', [PemohonController::class, 'delete'])->name('delete'); 
    });
});

Route::prefix('pemohon')->name('pemohon.')->group(function () {
    Route::get('/beranda', [MainController::class, 'pemohonBeranda'])->name('beranda'); 

    Route::prefix('permohonan')->name('permohonan.')->group(function () {
        Route::get('/', [PermohonanController::class, 'pemohon_index'])->name('index'); 
        Route::get('/add', [PermohonanController::class, 'add'])->name('add'); 
        Route::post('/add', [PermohonanController::class, 'store'])->name('store'); 
        Route::get('/detail/{uuid}', [PermohonanController::class, 'detail'])->name('detail'); 
        Route::get('/edit/{uuid}', [PermohonanController::class, 'edit'])->name('edit'); 
        Route::put('/edit/{uuid}', [PermohonanController::class, 'update'])->name('update'); 
        Route::get('/delete/{uuid}', [PermohonanController::class, 'delete'])->name('delete'); 
    });
});

Route::get('/', function () {
    return view('welcome');
});
