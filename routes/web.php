<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// ** Route Halaman Utama **
Route::get('/', function () {
    // Menampilkan halaman utama (skc-official.blade.php)
    return view('skc-official');
});

// ** Route Halaman Tentang (About) **
Route::get('/about', function () {
    // Menampilkan halaman "About" (welcome.blade.php)
    return view('welcome');
});

// ** Route Halaman Informasi **
Route::get('/informasi', function () {
    // Menampilkan halaman informasi
    return view('informasi');
});

// ** Route Halaman PPDB (Penerimaan Peserta Didik Baru) **
Route::get('/ppdb', function () {
    // Menampilkan halaman utama PPDB
    return view('ppdb');
});

Route::get('/ppdb/asper', function () {
    // Menampilkan halaman PPDB untuk program ASPER
    return view('ppdb/asper');
});

Route::get('/ppdb/farmasi', function () {
    // Menampilkan halaman PPDB untuk program Farmasi
    return view('ppdb/farmasi');
});

Route::get('/ppdb/tlm', function () {
    // Menampilkan halaman PPDB untuk program TLM (Teknologi Laboratorium Medik)
    return view('ppdb/tlm');
});

// ** Route Halaman Dashboard **
Route::get('/dashboard', function () {
    // Menampilkan halaman dashboard
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Menghubungkan DashboardController dengan halaman dashboard
Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');

// ** Route Resource untuk Student **
Route::resource('student', StudentController::class);

// ** Route untuk Menyimpan Data Student (POST) **
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

// ** Route untuk Manajemen Profil Pengguna **
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    // Menampilkan halaman edit profil pengguna

    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    // Memperbarui data profil pengguna

    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
    // Menghapus akun pengguna
});

// ** Route untuk Halaman dan Proses Pendaftaran **
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
// Menampilkan halaman formulir pendaftaran

Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');
// Menyimpan data pendaftaran (proses POST)

// ** Include Auth Routes **
require __DIR__ . '/auth.php';
