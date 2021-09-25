<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\MainController;
use App\Http\Controllers\NotifikasiController;
use App\Http\Controllers\PangkatController;
use App\Http\Controllers\PegawaiController;
use App\Http\Controllers\PemohonController;
use App\Http\Controllers\PermohonanBidanController;
use App\Http\Controllers\PermohonanController;
use App\Http\Controllers\PermohonanFarmasiController;
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

        // Route::prefix('pendidikan')->name('pendidikan.')->group(function () {
        //     Route::get('/', [PendidikanController::class, 'index'])->name('index');
        //     Route::post('/', [PendidikanController::class, 'store'])->name('store');
        //     Route::get('/edit/{id}', [PendidikanController::class, 'edit'])->name('edit');
        //     Route::put('/edit/{id}', [PendidikanController::class, 'update'])->name('update');
        //     Route::get('/delete/{id}', [PendidikanController::class, 'destroy'])->name('delete');
        // });

        Route::prefix('pegawai')->name('pegawai.')->group(function () {
            Route::get('/', [PegawaiController::class, 'index'])->name('index');
            Route::post('/', [PegawaiController::class, 'store'])->name('store');
            Route::get('/show/{id}', [PegawaiController::class, 'show'])->name('show');
            Route::get('/edit/{id}', [PegawaiController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PegawaiController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PegawaiController::class, 'destroy'])->name('delete');
        });

        Route::prefix('pangkat')->name('pangkat.')->group(function () {
            Route::get('/', [PangkatController::class, 'index'])->name('index');
            Route::post('/', [PangkatController::class, 'store'])->name('store');
            Route::get('/edit/{id}', [PangkatController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PangkatController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PangkatController::class, 'destroy'])->name('delete');
        });

        Route::prefix('user')->name('user.')->group(function () {
            Route::get('/', [UserController::class, 'index'])->name('index');
            Route::post('/', [UserController::class, 'store'])->name('store');
            Route::get('/show/{id}', [UserController::class, 'show'])->name('show');
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
            Route::get('/riwayat_izin_farmasi', [PermohonanFarmasiController::class, 'riwayat'])->name('farmasi');
            Route::get('/riwayat_izin_bidan', [PermohonanController::class, 'riwayat'])->name('bidan');
        });

        Route::prefix('permohonan_farmasi')->name('permohonan_farmasi.')->group(function () {
            Route::get('/', [PermohonanFarmasiController::class, 'admin_index'])->name('index');
            Route::get('/filter', [PermohonanFarmasiController::class, 'filter'])->name('filter');
            Route::get('/add', [PermohonanFarmasiController::class, 'add'])->name('add');
            Route::post('/add', [PermohonanFarmasiController::class, 'store'])->name('store');
            Route::get('/verifikasi/{id}', [PermohonanFarmasiController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanFarmasiController::class, 'detail'])->name('detail');
            Route::get('/edit/{id}', [PermohonanFarmasiController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanFarmasiController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanFarmasiController::class, 'delete'])->name('delete');
            Route::get('/riwayat', [PermohonanFarmasiController::class, 'riwayat'])->name('riwayat');
        });

        Route::prefix('permohonan_bidan')->name('permohonan_bidan.')->group(function () {
            Route::get('/', [PermohonanBidanController::class, 'admin_index'])->name('index');
            Route::get('/filter', [PermohonanBidanController::class, 'filter'])->name('filter');
            Route::get('/add', [PermohonanBidanController::class, 'add'])->name('add');
            Route::post('/add', [PermohonanBidanController::class, 'store'])->name('store');
            Route::get('/verifikasi/{id}', [PermohonanBidanController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanBidanController::class, 'detail'])->name('detail');
            Route::get('/edit/{id}', [PermohonanBidanController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanBidanController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanBidanController::class, 'delete'])->name('delete');
            Route::get('/riwayat', [PermohonanBidanController::class, 'riwayat'])->name('riwayat');
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
            Route::get('/detail-notifikasi/{id}/{inbox_id}', [PermohonanController::class, 'detail'])->name('detailNotifikasi');
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

        Route::prefix('permohonan_farmasi')->name('permohonan_farmasi.')->group(function () {
            Route::get('/', [PermohonanFarmasiController::class, 'pemohon_index'])->name('index');
            Route::get('/add', [PermohonanFarmasiController::class, 'add'])->name('add');
            Route::post('/add', [PermohonanFarmasiController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [PermohonanFarmasiController::class, 'detail'])->name('detail');
            Route::get('/detail-notifikasi/{id}/{inbox_id}', [PermohonanFarmasiController::class, 'detail'])->name('detailNotifikasi');
            Route::get('/edit/{id}', [PermohonanFarmasiController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanFarmasiController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanFarmasiController::class, 'delete'])->name('delete');
            Route::get('/riwayat', [PermohonanFarmasiController::class, 'riwayat'])->name('riwayat');
        });
        Route::prefix('permohonan_bidan')->name('permohonan_bidan.')->group(function () {
            Route::get('/', [PermohonanBidanController::class, 'pemohon_index'])->name('index');
            Route::get('/add', [PermohonanBidanController::class, 'add'])->name('add');
            Route::post('/add', [PermohonanBidanController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [PermohonanBidanController::class, 'detail'])->name('detail');
            Route::get('/detail-notifikasi/{id}/{inbox_id}', [PermohonanBidanController::class, 'detail'])->name('detailNotifikasi');
            Route::get('/edit/{id}', [PermohonanBidanController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanBidanController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanBidanController::class, 'delete'])->name('delete');
            Route::get('/riwayat', [PermohonanBidanController::class, 'riwayat'])->name('riwayat');
        });

        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
            Route::get('/riwayat_izin_farmasi', [PermohonanFarmasiController::class, 'riwayat'])->name('farmasi');
            Route::get('/riwayat_izin_bidan', [PermohonanBidanController::class, 'riwayat'])->name('bidan');
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
            Route::get('/riwayat_izin_farrmasi', [PermohonanFarmasiController::class, 'riwayat'])->name('farmasi');
            Route::get('/riwayat_izin_bidan', [PermohonanBidanController::class, 'riwayat'])->name('bidan');
        });

        Route::prefix('permohonan_farmasi')->name('permohonan_farmasi.')->group(function () {
            Route::get('/', [PermohonanFarmasiController::class, 'admin_index'])->name('index');
            Route::get('/add', [PermohonanFarmasiController::class, 'add'])->name('add');
            Route::post('/add', [PermohonanFarmasiController::class, 'store'])->name('store');
            Route::get('/verifikasi/{id}', [PermohonanFarmasiController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanFarmasiController::class, 'detail'])->name('detail');
            Route::get('/edit/{id}', [PermohonanFarmasiController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanFarmasiController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanFarmasiController::class, 'delete'])->name('delete');
            Route::get('/riwayat', [PermohonanFarmasiController::class, 'riwayat'])->name('riwayat');
        });

        Route::prefix('permohonan_bidan')->name('permohonan_bidan.')->group(function () {
            Route::get('/', [PermohonanBidanController::class, 'admin_index'])->name('index');
            Route::get('/filter', [PermohonanBidanController::class, 'filter'])->name('filter');
            Route::get('/verifikasi/{id}', [PermohonanBidanController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanBidanController::class, 'detail'])->name('detail');
            Route::get('/riwayat', [PermohonanBidanController::class, 'riwayat'])->name('riwayat');
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
            Route::get('/riwayat_izin_farrmasi', [PermohonanFarmasiController::class, 'riwayat'])->name('farmasi');
            Route::get('/riwayat_izin_bidan', [PermohonanBidanController::class, 'riwayat'])->name('bidan');
        });

        Route::prefix('permohonan_farmasi')->name('permohonan_farmasi.')->group(function () {
            Route::get('/', [PermohonanFarmasiController::class, 'admin_index'])->name('index');
            Route::get('/add', [PermohonanFarmasiController::class, 'add'])->name('add');
            Route::post('/add', [PermohonanFarmasiController::class, 'store'])->name('store');
            Route::get('/verifikasi/{id}', [PermohonanFarmasiController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanFarmasiController::class, 'detail'])->name('detail');
            Route::get('/edit/{id}', [PermohonanFarmasiController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanFarmasiController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanFarmasiController::class, 'delete'])->name('delete');
            Route::get('/riwayat', [PermohonanFarmasiController::class, 'riwayat'])->name('riwayat');
        });

        Route::prefix('permohonan_bidan')->name('permohonan_bidan.')->group(function () {
            Route::get('/', [PermohonanBidanController::class, 'admin_index'])->name('index');
            Route::get('/filter', [PermohonanBidanController::class, 'filter'])->name('filter');
            Route::get('/verifikasi/{id}', [PermohonanBidanController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanBidanController::class, 'detail'])->name('detail');
            Route::get('/riwayat', [PermohonanBidanController::class, 'riwayat'])->name('riwayat');
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

        Route::prefix('permohonan_farmasi')->name('permohonan_farmasi.')->group(function () {
            Route::get('/', [PermohonanFarmasiController::class, 'admin_index'])->name('index');
            Route::get('/add', [PermohonanFarmasiController::class, 'add'])->name('add');
            Route::post('/add', [PermohonanFarmasiController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [PermohonanFarmasiController::class, 'detail'])->name('detail');
            Route::get('/edit/{id}', [PermohonanFarmasiController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanFarmasiController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanFarmasiController::class, 'delete'])->name('delete');
            Route::get('/riwayat', [PermohonanFarmasiController::class, 'riwayat'])->name('riwayat');
            Route::get('/verifikasi/{id}', [PermohonanFarmasiController::class, 'verifikasi'])->name('verifikasi');

        });

        Route::prefix('permohonan_bidan')->name('permohonan_bidan.')->group(function () {
            Route::get('/', [PermohonanBidanController::class, 'admin_index'])->name('index');
            Route::get('/filter', [PermohonanBidanController::class, 'filter'])->name('filter');
            Route::get('/verifikasi/{id}', [PermohonanBidanController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanBidanController::class, 'detail'])->name('detail');
            Route::get('/riwayat', [PermohonanBidanController::class, 'riwayat'])->name('riwayat');
        });

        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
            Route::get('/riwayat_izin_farmasi', [PermohonanFarmasiController::class, 'riwayat'])->name('farmasi');
            Route::get('/riwayat_izin_bidan', [PermohonanBidanController::class, 'riwayat'])->name('bidan');
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

        Route::prefix('permohonan_farmasi')->name('permohonan_farmasi.')->group(function () {
            Route::get('/', [PermohonanFarmasiController::class, 'admin_index'])->name('index');
            Route::get('/add', [PermohonanFarmasiController::class, 'add'])->name('add');
            Route::post('/add', [PermohonanFarmasiController::class, 'store'])->name('store');
            Route::get('/verifikasi/{id}', [PermohonanFarmasiController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanFarmasiController::class, 'detail'])->name('detail');
            Route::get('/edit/{id}', [PermohonanFarmasiController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanFarmasiController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanFarmasiController::class, 'delete'])->name('delete');
            Route::get('/riwayat', [PermohonanFarmasiController::class, 'riwayat'])->name('riwayat');
        });

        Route::prefix('permohonan_bidan')->name('permohonan_bidan.')->group(function () {
            Route::get('/', [PermohonanBidanController::class, 'admin_index'])->name('index');
            Route::get('/filter', [PermohonanBidanController::class, 'filter'])->name('filter');
            Route::get('/verifikasi/{id}', [PermohonanBidanController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanBidanController::class, 'detail'])->name('detail');
            Route::get('/riwayat', [PermohonanBidanController::class, 'riwayat'])->name('riwayat');
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

        Route::prefix('permohonan_farmasi')->name('permohonan_farmasi.')->group(function () {
            Route::get('/', [PermohonanFarmasiController::class, 'admin_index'])->name('index');
            Route::get('/add', [PermohonanFarmasiController::class, 'add'])->name('add');
            Route::post('/add', [PermohonanFarmasiController::class, 'store'])->name('store');
            Route::get('/detail/{id}', [PermohonanFarmasiController::class, 'detail'])->name('detail');
            Route::get('/verifikasi/{id}', [PermohonanFarmasiController::class, 'verifikasi'])->name('verifikasi');

            Route::get('/edit/{id}', [PermohonanFarmasiController::class, 'edit'])->name('edit');
            Route::put('/edit/{id}', [PermohonanFarmasiController::class, 'update'])->name('update');
            Route::get('/delete/{id}', [PermohonanFarmasiController::class, 'delete'])->name('delete');
            Route::get('/riwayat', [PermohonanFarmasiController::class, 'riwayat'])->name('riwayat');
        });

        Route::prefix('permohonan_bidan')->name('permohonan_bidan.')->group(function () {
            Route::get('/', [PermohonanBidanController::class, 'admin_index'])->name('index');
            Route::get('/filter', [PermohonanBidanController::class, 'filter'])->name('filter');
            Route::get('/verifikasi/{id}', [PermohonanBidanController::class, 'verifikasi'])->name('verifikasi');
            Route::get('/detail/{id}', [PermohonanBidanController::class, 'detail'])->name('detail');
            Route::get('/riwayat', [PermohonanBidanController::class, 'riwayat'])->name('riwayat');
        });

        Route::prefix('riwayat-permohonan')->name('riwayat_permohonan.')->group(function () {
            Route::get('/', [PermohonanController::class, 'riwayat'])->name('index');
        });
    });

});

Route::prefix('notifikasi')->name('notifikasi.')->group(function () {
    Route::get('/', [NotifikasiController::class, 'index'])->name('index');
    Route::get('/destroy/{id}', [NotifikasiController::class, 'destroy'])->name('destroy');
});

Route::prefix('report')->name('report.')->group(function () {
    Route::get('/riwayat', [ReportController::class, 'riwayat_permohonan'])->name('riwayat_permohonan');
    Route::get('/user', [ReportController::class, 'user'])->name('user');
    Route::get('/pegawai', [ReportController::class, 'pegawai'])->name('pegawai');
    Route::get('/', [ReportController::class, 'pemohon'])->name('pemohon');
    Route::post('/', [ReportController::class, 'permohonan'])->name('permohonan');
    Route::get('/sip/{id}', [ReportController::class, 'sip'])->name('sip');
    Route::get('/surat_rekomendasi/{id}', [ReportController::class, 'surat_rekomendasi'])->name('surat_rekomendasi');
    Route::get('/tanda_terima/{id}', [ReportController::class, 'tanda_terima'])->name('tanda_terima');
    Route::get('/riwayat_dokumen/{id}', [ReportController::class, 'riwayat_dokumen'])->name('riwayat_dokumen');
    Route::get('/surat_izin/{id}', [ReportController::class, 'surat_izin'])->name('surat_izin');

    Route::post('/permohonan_farmasi', [ReportController::class, 'permohonan_farmasi'])->name('permohonan_farmasi');
    Route::get('/riwayat_permohonan_farmasi', [ReportController::class, 'riwayat_permohonan_farmasi'])->name('riwayat_permohonan_farmasi');
    Route::get('/tanda_terima_farmasi/{id}', [ReportController::class, 'tanda_terima_farmasi'])->name('tanda_terima_farmasi');
    Route::get('/riwayat_dokumen_farmasi/{id}', [ReportController::class, 'riwayat_dokumen_farmasi'])->name('riwayat_dokumen_farmasi');
    Route::get('/surat_izin_farmasi/{id}', [ReportController::class, 'surat_izin_farmasi'])->name('surat_izin_farmasi');
    Route::get('/sip_farmasi/{id}', [ReportController::class, 'sip_farmasi'])->name('sip_farmasi');

    Route::post('/permohonan_bidan', [ReportController::class, 'permohonan_bidan'])->name('permohonan_bidan');
    Route::get('/riwayat_permohonan_bidan', [ReportController::class, 'riwayat_permohonan_bidan'])->name('riwayat_permohonan_bidan');
    Route::get('/tanda_terima_bidan/{id}', [ReportController::class, 'tanda_terima_bidan'])->name('tanda_terima_bidan');
    Route::get('/riwayat_dokumen_bidan/{id}', [ReportController::class, 'riwayat_dokumen_bidan'])->name('riwayat_dokumen_bidan');
    Route::get('/surat_izin_bidan/{id}', [ReportController::class, 'surat_izin_bidan'])->name('surat_izin_bidan');
    Route::get('/sip_bidan/{id}', [ReportController::class, 'sip_bidan'])->name('sip_bidan');

});

Route::prefix('permohonan')->name('permohonanAll.')->group(function () {
    Route::put('izin-dokter/verifikasi/{id}', [PermohonanController::class, 'verifikasi'])->name('verifikasi');
    Route::put('izin-bidan/verifikasi/{id}', [PermohonanBidanController::class, 'verifikasi'])->name('verifikasiBidan');
    Route::put('izin-farmasi/verifikasi/{id}', [PermohonanFarmasiController::class, 'verifikasi'])->name('verifikasiFarmasi');
});

Route::get('/', function () {
    return view('welcome');
});
