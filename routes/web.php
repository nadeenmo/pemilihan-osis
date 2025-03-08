<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\KandidatController;
use App\Http\Controllers\KodeAksesController;
use App\Http\Controllers\SuaraController;
use App\Http\Controllers\loginController;
use App\Models\PemilihModel;
use Illuminate\Support\Facades\Route;

// Halaman Utama
Route::get('/', function () {
    return view('welcome');
})->name('home');

// Dashboard (Harus Login & Verifikasi)
Route::get('/dashboard', function () {
    return view('admin.dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Grouping Middleware Auth
Route::middleware('auth')->group(function () {
    // Profile
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');

    // Admin Routes
    Route::middleware('admin')->group(function () {
        Route::resource('/admin', AdminController::class);
    });

    // Pemilih Routes
        Route::resource('/pemilih', PemilihController::class);
        Route::get('/pemilih',[PemilihController::class,'index'])->name(('admin.data-pemilih'));
    });

    // Kandidat Routes
    Route::resource('/kandidat', KandidatController::class);
    Route::get('/kandidat',[KandidatController::class,'index'])->name('data_kandidat.index');
    Route::get('/kandidat/{id}/edit', [KandidatController::class, 'edit'])->name('kandidat.edit');
    Route::put('/kandidat/{id}', [KandidatController::class, 'update'])->name('kandidat.update');

    // Akses Routes
        Route::resource('/akses', KodeAksesController::class);
        Route::get('/akses',[KodeAksesController::class,'index'])->name(('kode_akses'));

    // Suara Routes (Voting)
    Route::get('/suara', [SuaraController::class, 'index'])->name('hasil_suara.index');
    Route::post('/suara', [SuaraController::class, 'store'])->name('hasil_suara.store');


//
//Auth Routes (Login, Logout, Register)
// Route::prefix('/login')->group(function () {
//     Route::get('/', [loginController::class, 'index'])->name('login.index');
//     Route::post('/login/admin', [loginController::class, 'loginAdmin'])->name('login.admin');
//     Route::post('/login/user', [loginController::class, 'loginUser '])->name('login.user');
//     Route::get('/admin/dashboard', [AdminController::class, 'index'])->name('admin.dashboard')->middleware('login');
//     Route::get('/user/dashboard', [PemilihController::class, 'index'])->name('user.dashboard')->middleware('login');

//
// Auth Routes (Login, Logout, Register)
require __DIR__.'/auth.php';