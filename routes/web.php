<?php

use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;
use App\Http\Middleware\AdminMiddleware;
use App\Http\Controllers\AuthController;

// Halaman utama
Route::get('/', function () {
    return view('welcome'); 
}); 
 
// Route dashboard utama dengan logic redirect
Route::get('/dashboard', function () {
    if (auth()->user()->role === 'admin') {
        return redirect('/admin/dashboard');
    }
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Autentikasi (hapus jika sudah menggunakan auth.php)
// Route::get('/login', [AuthController::class, 'loginPage'])->name('login');
// Route::post('/login', [AuthController::class, 'authenticate']);
// Route::post('/logout', [AuthController::class, 'logout'])->name('logout');

// Route untuk user biasa (harus login)
Route::middleware(['auth'])->group(function () {
    // HAPUS BARIS INI - karena sudah didefinisikan di atas
    // Route::get('/dashboard', function () {
    //     return view('dashboard');
    // })->name('dashboard');

    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// Route untuk admin (harus login dan memiliki role 'admin')
Route::middleware(['auth', AdminMiddleware::class])->group(function () {
    Route::get('/admin/dashboard', function () {
        return view('admin.dashboard');
    })->name('admin.dashboard'); 
}); 

// Tambahkan ini untuk menampilkan login custom seperti gambar UI kamu
Route::get('/login', function () {
    return view('auth.login');
})->name('login');

require __DIR__.'/auth.php';
