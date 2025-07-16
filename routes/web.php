<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// User publik bisa kirim kerjasama tanpa login
Route::post('/kerjasama-store', [App\Http\Controllers\KerjasamaController::class, 'store'])->name('kerjasama.store');

// Admin harus login untuk CRUD
Route::middleware('auth')->group(function () {
    Route::resource('kerjasama', App\Http\Controllers\KerjasamaController::class)->except(['store']);
    Route::get('/kerjasama-export-pdf', [App\Http\Controllers\KerjasamaController::class, 'exportPdf'])->name('kerjasama.export-pdf');
});


require __DIR__.'/auth.php';
