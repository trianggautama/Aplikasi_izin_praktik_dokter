<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\ReportController;
use App\Http\Controllers\SuratKuasaController;
use App\Http\Controllers\SuratRekomendasiController;
use App\Http\Controllers\UserController;
use Illuminate\Support\Facades\Route;

Route::prefix('auth')->name('auth.')->group(function () {
    Route::get('/login', [AuthController::class, 'login'])->name('login');
    Route::post('/login', [LoginController::class, 'login'])->name('loginPost');
    Route::get('/register', [AuthController::class, 'register'])->name('register');
    Route::post('/register', [AuthController::class, 'store_register'])->name('store');
    Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
});

Route::middleware(['adminCS'])->group(function () {

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/beranda', [MainController::class, 'adminBeranda'])->name('beranda');

        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::post('/', [UserController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [UserController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [UserController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [UserController::class, 'destroy'])->name('delete');
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
            Route::get('/filter', [PermohonanController::class, 'filter'])->name('filter');
            Route::post('/', [PermohonanController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [PermohonanController::class, 'detail'])->name('detail');
            Route::get('/verifikasi/{id}', [PermohonanController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/edit/{id}', [PermohonanController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanController::class, 'delete'])->name('delete');
        });

        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
        });
    });
});

Route::middleware(['pemohon'])->group(function () {

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

        Route::prefix('pemohon')->name('surat-kuasa.')->group(function () {
            Route::get('/', [SuratKuasaController::class, 'index'])->name('index');
            Route::post('/store', [SuratKuasaController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [SuratKuasaController::class, 'detail'])->name('detail');
            Route::get('/edit/{id}', [SuratKuasaController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [SuratKuasaController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [SuratKuasaController::class, 'delete'])->name('delete');
        });

        Route::prefix('pemohon')->name('surat-rekomendasi.')->group(function () {
            Route::get('/', [SuratRekomendasiController::class, 'index'])->name('index');
            Route::post('/store', [SuratRekomendasiController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [SuratRekomendasiController::class, 'detail'])->name('detail');
            Route::get('/edit/{id}', [SuratRekomendasiController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [SuratRekomendasiController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [SuratRekomendasiController::class, 'delete'])->name('delete');

        });
        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
        });
    });

});

Route::middleware(['kepala-dinas'])->group(function () {

    Route::prefix('kepala-dinas')->name('kadis.')->group(function () {
        Route::get('/beranda', [MainController::class, 'kadisBeranda'])->name('beranda');

        Route::prefix('permohonan')->name('permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'admin_index'])->name('index');
            Route::get('/detail/{id}', [PermohonanController::class, 'detail'])->name('detail');
            Route::get('/verifikasi/{id}', [PermohonanController::class, 'verifikasi'])->name('verifikasi');
        });

        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
        });
    });
});

Route::middleware(['sekretaris'])->group(function () {

    Route::prefix('sekretaris')->name('sekretaris.')->group(function () {
        Route::get('/beranda', [MainController::class, 'sekretarisBeranda'])->name('beranda');

        Route::prefix('permohonan')->name('permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'admin_index'])->name('index');
            Route::get('/detail/{id}', [PermohonanController::class, 'detail'])->name('detail');
            Route::get('/verifikasi/{id}', [PermohonanController::class, 'verifikasi'])->name('verifikasi');
        });

        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
        });
    });

});

// Route::middleware(['pemohon'])->group(function () {
//     Route::prefix('kabid')->name('kabid.')->group(function () {
//         Route::get('/beranda', [MainController::class, 'kabidBeranda'])->name('beranda');
//     });
// });

Route::middleware(['kabid'])->group(function () {

    Route::prefix('kabid')->name('kabid.')->group(function () {
        Route::get('/beranda', [MainController::class, 'kabidBeranda'])->name('beranda');

        Route::prefix('permohonan')->name('permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'admin_index'])->name('index');
            Route::get('/detail/{id}', [PermohonanController::class, 'detail'])->name('detail');
            Route::get('/verifikasi/{id}', [PermohonanController::class, 'verifikasi'])->name('verifikasi');
        });

        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
        });
    });
});

Route::middleware(['kasi-pju'])->group(function () {

    Route::prefix('kasi-pju')->name('kasi_pju.')->group(function () {
        Route::get('/beranda', [MainController::class, 'kasiPjuBeranda'])->name('beranda');
        Route::prefix('permohonan')->name('permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'admin_index'])->name('index');
            Route::get('/detail/{id}', [PermohonanController::class, 'detail'])->name('detail');
            Route::get('/verifikasi/{id}', [PermohonanController::class, 'verifikasi'])->name('verifikasi');
        });

        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
        });
    });
});

Route::middleware(['kasi'])->group(function () {

    Route::prefix('petugas_proses')->name('petugas_proses.')->group(function () {
        Route::get('/beranda', [MainController::class, 'PetugasProsesBeranda'])->name('beranda');
        Route::prefix('permohonan')->name('permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'admin_index'])->name('index');
            Route::get('/detail/{id}', [PermohonanController::class, 'detail'])->name('detail');
            Route::get('/verifikasi/{id}', [PermohonanController::class, 'verifikasi'])->name('verifikasi');
        });

        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
        });
    });

});

Route::prefix('report')->name('report.')->group(function () {
    Route::get('/riwayat', [ReportController::class, 'riwayat_permohonan'])->name('riwayat_permohonan');
    Route::get('/', [ReportController::class, 'pemohon'])->name('pemohon');
    Route::post('/', [ReportController::class, 'permohonan'])->name('permohonan');
    Route::get('/sip/{id}', [ReportController::class, 'sip'])->name('sip'); 
    Route::get('/surat_rekomendasi/{id}', [ReportController::class, 'surat_rekomendasi'])->name('surat_rekomendasi'); 
    Route::get('/tanda_terima/{id}', [ReportController::class, 'tanda_terima'])->name('tanda_terima'); 
});

Route::get('/', function () {
    return view('welcome');
});
