<?php

use App\Http\Controllers\AgendaLaporanController;
use App\Http\Controllers\Daftar_KegiatanController;
use App\Http\Controllers\DashboarController;
use App\Http\Controllers\KegiatanController;
use App\Http\Controllers\LapKegiatanController;
use App\Http\Controllers\LapBulananController;
use App\Http\Controllers\PenggunaController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;

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

// Route::get('/', function () {
//     return view('welcome');
// });
Route::get('/', function () {
    Auth::logout();
    return redirect('/login');
})->name('logout');

Route::middleware([
    'auth:sanctum',
    config('jetstream.auth_session'),
    'verified',
])->group(function () {
    Route::resource('dashboard', DashboarController::class);
    Route::resource('laporan', LapBulananController::class);
    Route::resource('laporan', AgendaLaporanController::class);
    Route::resource('kegiatan', KegiatanController::class);
    Route::resource('pengguna', PenggunaController::class);
    Route::resource('Daftar', Daftar_KegiatanController::class);
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');
});
