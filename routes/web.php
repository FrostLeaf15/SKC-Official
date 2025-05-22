<?php

use Illuminate\Support\Facades\Route;
use App\Http\Controllers\{
    DashboardController,
    GaleriController,
    PendaftaranController,
    ProfileController,
    StudentController,
    GelombangSatuController,
    GelombangDuaController,
};

// ====================
// ROUTE HALAMAN UTAMA
// ====================
Route::view('/', 'skc-official', ['title' => 'skc-official']);
Route::view('/about', 'welcome');
Route::view('/galeri', 'galeri')->name('galeri.index');
Route::view('/informasi', 'informasi', ['title' => 'informasi']);
Route::view('/ppdb', 'ppdb');

// ====================
// ROUTE INFORMASI JURUSAN
// ====================
Route::view('/informasi/askep', 'informasi.askep', [
    'namajurusan' => 'Asisten Keperawatan',
    'logo' => 'LOGO_ASKEP.png',
    'kompetensi' => 'Asisten Keperawatan merupakan... (ringkas atau tetapkan sesuai kebutuhan)'
]);

Route::view('/informasi/farmasi', 'informasi.farmasi', [
    'namajurusan' => 'Farmasi Klinis dan Komunitas',
    'logo' => 'LOGO_FARMASI.png',
    'kompetensi' => 'Farmasi merupakan kompetensi...'
]);

Route::view('/informasi/tlm', 'informasi.tlm', [
    'namajurusan' => 'Teknologi Laboratorium Medik',
    'logo' => 'LOGO_TLM.png',
    'kompetensi' => 'Teknologi Laboratorium Medik merupakan...'
]);

// ====================
// ROUTE DASHBOARD
// ====================
Route::middleware(['auth', 'verified'])->group(function () {
    Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');
    Route::view('/dashboard/profileguru', 'dashboard.profileguru')->name('dashboard.profileguru');
    Route::view('/dashboard/uploads', 'dashboard.uploads')->name('dashboard.uploads');

    // ====================
    // ROUTE GELOMBANG SATU
    // ====================
    Route::resource('gelombangsatu', GelombangSatuController::class)->except(['show']);
    Route::get('/dashboard/gelombangsatu', [GelombangSatuController::class, 'index'])->name('dashboard.gelombangsatu');

    // ====================
    // ROUTE GELOMBANG DUA
    // ====================
    Route::resource('gelombangdua', GelombangDuaController::class)->except(['show']);
    Route::get('/dashboard/gelombangdua', [GelombangDuaController::class, 'index'])->name('dashboard.gelombangdua');
});

// ====================
// ROUTE PROFILE USER
// ====================
Route::middleware('auth')->group(function () {
    Route::get('/profile', [ProfileController::class, 'edit'])->name('profile.edit');
    Route::patch('/profile', [ProfileController::class, 'update'])->name('profile.update');
    Route::delete('/profile', [ProfileController::class, 'destroy'])->name('profile.destroy');
});

// ====================
// ROUTE GALERI
// ====================
Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');

// ====================
// ROUTE STUDENT
// ====================
Route::resource('student', StudentController::class)->except(['store']);
Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');
Route::get('/students', [StudentController::class, 'index'])->name('students.index');
Route::delete('/students/{id}', [StudentController::class, 'destroy'])->name('students.destroy');
Route::get('/payment', [StudentController::class, 'showPayment'])->name('payment.show');

// ====================
// ROUTE PENDAFTARAN
// ====================
Route::get('/pendaftaran', [PendaftaranController::class, 'index'])->name('pendaftaran.index');
Route::post('/pendaftaran', [PendaftaranController::class, 'store'])->name('pendaftaran.store');

// ====================
// ROUTE AUTENTIKASI
// ====================
require __DIR__ . '/auth.php';
