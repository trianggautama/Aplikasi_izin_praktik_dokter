<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [PemohonController::class, 'register_store'])->name('store');
});

Route::prefix('admin')->name('admin.')->group(function () {
    Route::get('/beranda', [MainController::class, 'adminBeranda'])->name('beranda');

    Route::prefix('user')->name('user.')->group(function () {
        Route::get('/', [UserController::class, 'index'])->name('index');
        Route::post('/', [UserController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [UserController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [UserController::class, 'delete'])->name('delete');
    });

    Route::prefix('pemohon')->name('pemohon.')->group(function () {
        Route::get('/', [PemohonController::class, 'index'])->name('index');
        Route::post('/', [PemohonController::class, 'store'])->name('store');
        Route::get('/edit/{id}', [PemohonController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [PemohonController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PemohonController::class, 'delete'])->name('delete');
    });

    Route::prefix('permohonan')->name('permohonan.')->group(function () {
        Route::get('/', [PermohonanController::class, 'admin_index'])->name('index');
        Route::post('/', [PermohonanController::class, 'store'])->name('store');
        Route::get('/detail/{id}', [PermohonanController::class, 'admin_detail'])->name('detail');
        Route::get('/edit/{id}', [PermohonanController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [PermohonanController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PermohonanController::class, 'delete'])->name('delete');
    });
});

Route::prefix('pemohon')->name('pemohon.')->group(function () {
    Route::get('/beranda', [MainController::class, 'pemohonBeranda'])->name('beranda');

    Route::prefix('permohonan')->name('permohonan.')->group(function () {
        Route::get('/', [PermohonanController::class, 'pemohon_index'])->name('index');
        Route::get('/add', [PermohonanController::class, 'add'])->name('add');
        Route::post('/add', [PermohonanController::class, 'store'])->name('store');
        Route::get('/detail/{id}', [PermohonanController::class, 'detail'])->name('detail');
        Route::get('/edit/{id}', [PermohonanController::class, 'edit'])->name('edit');
        Route::put('/edit/{id}', [PermohonanController::class, 'update'])->name('update');
        Route::get('/delete/{id}', [PermohonanController::class, 'delete'])->name('delete');
    });
});

Route::get('/', function () {
    return view('welcome');
});
