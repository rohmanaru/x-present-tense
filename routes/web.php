<?php

use App\Http\Controllers\AuthController;
use App\Http\Controllers\ConfigureController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\internController;
use App\Http\Controllers\LoginController;
use App\Http\Controllers\PresensiController;
use App\Http\Controllers\StrukturOrganisasiController;
use App\Http\Controllers\UnitController;
use App\Http\Controllers\UnitDetailController;
use App\Http\Controllers\TestController;
use Illuminate\Support\Facades\Route;
use PhpParser\Node\Expr\PostDec;


/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider and all of them will
| be assigned to the "web" middleware group. Make something great!
|
*/

Route::middleware(['guest'])->group(function () {
    Route::get('/', [LoginController::class, 'index'])->name('login');
    Route::post('/postlogin', [AuthController::class, 'postlogin'])->name('post-login');

    Route::post('/postlogin-admin', [AuthController::class, 'postloginadmin'])->name('post-admin');
});

Route::middleware(['auth'])->group(function () {
    Route::middleware('userAccess:Admin')->group(function () {
        Route::get('/dashboard-admin', [DashboardController::class, 'dashboardadmin']);
        Route::get('/logout-admin', [LoginController::class, 'logout'])->name('logout-admin');
        Route::get('/intern', [internController::class, 'index']);
        Route::post('/intern/store', [internController::class, 'store']);
        Route::get('/intern/{id}/edit', [internController::class, 'edit']);
        Route::post('/intern/{id}', [internController::class, 'update'])->name('intern.update');
        Route::get('/intern/{id}/delete', [internController::class, 'destroy']);
        Route::get('/presensi/monitoring', [PresensiController::class, 'monitoring']);
        Route::post('/getpresensi', [PresensiController::class, 'getpresensi']);
        Route::post('/showmap', [PresensiController::class, 'showmap']);
        Route::get('/presensi/laporan', [PresensiController::class, 'laporan']);
        Route::post('/presensi/cetaklaporan', [PresensiController::class, 'cetaklaporan']);
        Route::get('/presensi/rekap', [PresensiController::class, 'rekap']);
        Route::post('/presensi/cetakrekap', [PresensiController::class, 'cetakrekap']);
        Route::get('/configure/officesite', [ConfigureController::class, 'index']);
        Route::post('/configure/updatelocation', [ConfigureController::class, 'update']);
        Route::get('/presensi/izinsakit', [PresensiController::class, 'izinsakit']);
        Route::post('/presensi/approveizinsakit', [PresensiController::class, 'approveizinsakit']);
        Route::get('/presensi/{id}/batalizinsakit', [PresensiController::class, 'batalizinsakit']);
        // Route::post('/configure/store',[ConfigureController::class,'store']);
    });

    Route::middleware('userAccess:Intern')->group(function () {
        Route::get('/dashboard', [DashboardController::class, 'InternDashboard'])->name('intern.dashboard');
        Route::get('/logout', [LoginController::class, 'logout'])->name('logout');


        Route::get('/presensi/create', [PresensiController::class, 'index']);
        Route::post('/presensi/store', [PresensiController::class, 'store']);

        Route::get('/editprofile', [PresensiController::class, 'edit'])->name('profile')->name('intern.profile-edit');
        Route::post('/presensi/{nik}/updateprofile', [PresensiController::class, 'update']);

        Route::get('/presensi/history', [PresensiController::class, 'history']);
        Route::post('/gethistory', [PresensiController::class, 'gethistory']);


        Route::get('/presensi/izin', [PresensiController::class, 'izin']);
        Route::get('/presensi/izin/form', [PresensiController::class, 'buatizin'])->name('intern.absensi-form');
        Route::post('/presensi/izin/form/store', [PresensiController::class, 'storeizin'])->name('intern.absensi-form.store');

        Route::get('/struktur-organisasi', [StrukturOrganisasiController::class, 'index'])->name('intern.struktur-organisasi');

        Route::get('/unit', [UnitController::class, 'index'])->name('intern.unit');

        Route::get('/show/{name}', [UnitDetailController::class, 'show'])->name('intern.show');

    });
});
