<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\berandaMasyController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
use App\Http\Controllers\dashPerangkatController;
use App\Http\Controllers\daftarPemohonController;
use App\Http\Controllers\profileController;
use App\Http\Controllers\editProfileController;
use App\Http\Controllers\verifBBMController;
use App\Http\Controllers\riwayatController;

use App\Http\Middleware\isPerangkat;
use App\Http\Middleware\isMasyarakat;
/*
|--------------------------------------------------------------------------
| Web Routes
|--------------------------------------------------------------------------
|
| Here is where you can register web routes for your application. These
| routes are loaded by the RouteServiceProvider within a group which
| contains the "web" middleware group. Now create something great!
|
*/

// Guest
Route::resource('/', indexController::class);
Route::resource('homepage', homepageController::class);

// Auth
Route::resource('daftar', daftarController::class);
Route::get('login', [loginController::class, 'index']);
Route::post('login', [loginController::class, 'store']);
Route::post('logout', [loginController::class, 'logout']);

// Masyarakat
Route::resource('beranda', berandaController::class);
Route::resource('berandaMasy', berandaMasyController::class)->middleware(['auth', 'isMasyarakat']);
Route::resource('profile', profileController::class)->middleware(['auth', 'isMasyarakat']);
Route::resource('editProfile', editProfileController::class)->middleware(['auth', 'isMasyarakat']);
Route::resource('riwayat', riwayatController::class)->middleware(['auth', 'isMasyarakat']);


// Perangkat
Route::resource('dashPerangkat', dashPerangkatController::class)->middleware(['auth', 'isPerangkat']);
Route::resource('daftarPemohon', daftarPemohonController::class)->middleware(['auth', 'isPerangkat']);
Route::resource('verifBBM', verifBBMController::class)->middleware(['auth', 'isPerangkat']);
Route::get('verifBBM/diterima/{id}', [verifBBMController::class, 'diterima'])->middleware(['auth', 'isPerangkat']);
Route::get('verifBBM/ditolak/{id}', [verifBBMController::class, 'ditolak'])->middleware(['auth', 'isPerangkat']);
Route::get('verifBBM/kembali/{id}', [verifBBMController::class, 'kembali'])->middleware(['auth', 'isPerangkat']);



