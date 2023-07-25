<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\berandaController;
use App\Http\Controllers\daftarController;
use App\Http\Controllers\homepageController;
use App\Http\Controllers\indexController;
use App\Http\Controllers\loginController;
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
Route::resource('/', indexController::class);
Route::resource('beranda', berandaController::class);
Route::resource('daftar', daftarController::class);
Route::resource('homepage', homepageController::class);
Route::get('welcome', function () {
    return view('welcome');
});


Route::get('login', [loginController::class, 'index']);
Route::post('login', [loginController::class, 'store']);
