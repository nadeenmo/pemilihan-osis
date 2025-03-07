<?php

use App\Http\Controllers\ProfileController;
use App\Http\Controllers\AdminController;
use App\Http\Controllers\PemilihController;
use App\Http\Controllers\KandidatController;
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
    return view('admin.index');
})->middleware(['login', 'verified'])->name('dashboard');

// Grouping Middleware Auth
Route::middleware('login')->group(function () {
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
    

    // Kandidat Routes
    Route::resource('/kandidat', KandidatController::class);
    Route::get('/kandidat',[KandidatController::class,'index'])->name('admin.data-kandidat');
    Route::get('/kandidat/{id}/edit', [KandidatController::class, 'edit'])->name('kandidat.edit');
    Route::put('/kandidat/{id}', [KandidatController::class, 'update'])->name('kandidat.update');


    // Suara Routes (Voting)
    Route::get('/vote', [SuaraController::class, 'index'])->name('vote.index');
    Route::post('/vote', [SuaraController::class, 'store'])->name('vote.store');
});

// Auth Routes (Login, Logout, Register)
Route::prefix('/login')->group(function () {
    Route::get('/', [loginController::class, 'index'])->name('login.index');
});
