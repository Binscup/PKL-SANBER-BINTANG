<?php

use App\Http\Controllers\admin;
use App\Http\Controllers\adminController;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\socialController;
use App\Http\Controllers\karyawanController;
use App\Http\Controllers\KeluargaController;
use App\Http\Controllers\PekerjaanController;
use App\Http\Controllers\PortofolioController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\SertifikasiController;

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

Route::get('/', function () {
    return view('welcome');
});

Route::get(uri: '/auth/redirect', action: [socialController::class, 'redirect'])->name(name: 'google.redirect');
Route::get(uri: '/google/redirect', action: [socialController::class, 'googleCallback'])->name(name: 'google.callback');

Route::group(['middleware' => 'admin'], function () {
    Route::resource('/user-management   ', adminController::class);

});

Route::resource('/karyawan', karyawanController::class);
Route::get('/profile', [karyawanController::class, 'profile']);
Route::resource('/keluarga', KeluargaController::class);
Route::resource('/pendidikan', PortofolioController::class);
Route::resource('/pekerjaan', PekerjaanController::class);
Route::resource('/sertifikasi', SertifikasiController::class);

Auth::routes();

Route::get('/', [App\Http\Controllers\HomeController::class, 'index'])->name('home');
Route::get('/home', [App\Http\Controllers\HomeController::class, 'home'])->name('home');
