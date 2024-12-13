<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruController;
use Illuminate\Support\Facades\Route;

// ** Route Halaman Utama **
Route::get('/', function () {
    // Menampilkan halaman utama (skc-official.blade.php)
    return view('skc-official', [
        "title" => "skc-official"
    ]);
});

// ** Route Halaman Tentang (About) **
Route::get('/about', function () {
    // Menampilkan halaman "About" (welcome.blade.php)
    return view('welcome');
});

// ** Route Halaman Informasi **
Route::get('/informasi', function () {
    // Menampilkan halaman informasi
    return view('informasi', [
        "tittle" => "informasi"
    ]);
});

// ** Route Halaman PPDB (Penerimaan Peserta Didik Baru) **
Route::get('/ppdb', function () {
    // Menampilkan halaman utama PPDB
    return view('ppdb');
});

Route::get('/informasi/asper', function () {
    // Menampilkan halaman Informasi untuk program ASPER
    return view('informasi/asper', [
        "namajurusan" => "Asisten Keperawatan",
        "logo" => "LOGO_ASKEP.png"
    ]);
});

Route::get('/informasi/farmasi', function () {
    // Menampilkan halaman Informasi untuk program Farmasi
    return view('informasi/farmasi', [
        "namajurusan" => "Farmasi Klinis dan Komunitas",
        "logo" => "LOGO_FARMASI.png"
    ]);
});

Route::get('/informasi/tlm', function () {
    // Menampilkan halaman Informasi untuk program TLM (Teknologi Laboratorium Medik)
    return view('informasi/tlm', [
        "namajurusan" => "Teknologi Labroratorium Medik",
        "logo" => "LOGO_TLM.png"
    ]);
});

// ** Route Halaman Dashboard **
Route::get('/dashboard', function () {
    // Menampilkan halaman dashboard
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Menghubungkan DashboardController dengan halaman dashboard
Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');

// ** Route Halaman Dashboard **
Route::get('/dashboard/profileguru', function () {
    // Menampilkan halaman dashboard
    return view('dashboard/profileguru');
})->middleware(['auth', 'verified'])->name('dashboard/profileguru');

// ** Route untuk Profile Guru **
Route::get('/dashboard/guru', [GuruController::class, 'index'])->name('guru.index'); // Tampilkan data
Route::post('/dashboard/guru', [GuruController::class, 'store'])->name('guru.store'); // Simpan data

// ** Route Resource untuk Student **
Route::resource('student', StudentController::class);

// ** Route untuk Menyimpan Data Student (POST) **
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

// ** Route untuk Menghapus Data Student **
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');


Route::get('/payment', [StudentController::class, 'showPayment'])->name('payment.show');

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
