<?php

use App\Http\Controllers\JadwalController;
use Illuminate\Support\Facades\Route;
use App\Http\Controllers\AuthController;
use App\Http\Controllers\StaffController;
use App\Http\Controllers\DosenController;
use App\Http\Controllers\MatkulController;
use App\Http\Controllers\KelasController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\RuanganController;

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

Route::get('/login', [AuthController::class, 'showLoginForm'])->name('login');
Route::post('/login', [AuthController::class, 'login']);

Route::middleware(['auth'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
});

Route::post('/logout', [AuthController::class, 'logout'])->name('logout');
Route::resource('/staff', StaffController::class);
Route::resource('/dosen', DosenController::class);
Route::resource('/matkul', MatkulController::class);
Route::resource('/kelas', KelasController::class);
Route::resource('/ruangan', RuanganController::class);
Route::resource('/jadwal', JadwalController::class);