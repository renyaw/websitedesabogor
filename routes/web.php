<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\berandaMasyController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;

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

// Masyarakat
Route::resource('beranda', berandaController::class);
Route::resource('berandaMasy', berandaMasyController::class)->middleware(['auth', 'isMasyarakat']);
Route::resource('formBBM', formBBMController::class)->middleware(['auth', 'isMasyarakat']);


// Perangkat




