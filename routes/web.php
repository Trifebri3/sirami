<?php

use App\Http\Controllers\Admin\DashboardController as AdminDashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\Public\GalleryController;
use App\Http\Controllers\Public\HomeController;
use App\Http\Controllers\Public\LampiranController;
use App\Http\Controllers\Public\PageController;
use Illuminate\Support\Facades\Route;

// Public (Frontend) Navigation Routes
Route::get('/', [HomeController::class, 'index'])->name('home');
Route::get('/mengapa-sirami', [PageController::class, 'mengapaSirami'])->name('mengapa.sirami');
Route::get('/solusi', [PageController::class, 'solusi'])->name('solusi');
Route::get('/riset-bukti', [PageController::class, 'risetBukti'])->name('riset.bukti');
Route::get('/pilot-project', [PageController::class, 'pilotProject'])->name('pilot.project');
Route::get('/dampak', [PageController::class, 'dampak'])->name('dampak');
Route::get('/tim-mitra', [PageController::class, 'timMitra'])->name('tim.mitra');
Route::get('/dukung-implementasi', [PageController::class, 'dukungImplementasi'])->name('dukung.implementasi');
Route::get('/pusat-dokumen', [LampiranController::class, 'index'])->name('pusat.dokumen');
Route::get('/bukti-referensi', [LampiranController::class, 'buktiReferensi'])->name('bukti.referensi');
Route::get('/lampiran', [LampiranController::class, 'index'])->name('lampiran'); // Alias
Route::get('/jurnal-perkembangan', [PageController::class, 'jurnalPerkembangan'])->name('jurnal.perkembangan');
Route::get('/galeri', [GalleryController::class, 'index'])->name('public.galeri');

// Admin (Backend) Routes
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');

    Route::prefix('admin')->name('admin.')->group(function () {
        Route::get('/dashboard', [AdminDashboardController::class, 'index'])->name('dashboard');
    });
});

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';
