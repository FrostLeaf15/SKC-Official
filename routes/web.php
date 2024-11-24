<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;   
use App\Http\Controllers\ProfileController;
use Illuminate\Support\Facades\Route;

// Route::get('/', function () {
//     return view('welcome');
// });

Route::get('/dashboard', function () {
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

Route::get('/dashboard', [StudentController::class, 'index'])->name('dashboard');

// mengambil data dari student
Route::resource('student', StudentController::class);

Route::post('/student/store', [StudentController::class, 'store'])->name('student.store');

Route::middleware('auth')->group(function () {
    Route::get('/profile',
    [ProfileController::class,
    'edit'])->name('profile.edit');
    
    Route::patch('/profile',
    [ProfileController::class,
    'update'])->name('profile.update');
    
    Route::delete('/profile',
    [ProfileController::class,
    'destroy'])->name('profile.destroy');
});

require __DIR__.'/auth.php';



// rute halaman website
// Route untuk menyimpan data (POST)
Route::post('/pendaftaran', [
    PendaftaranController::class,
    'store'])->name('pendaftaran.store');

// Route untuk menampilkan form pendaftaran (GET)
Route::get('/pendaftaran', [
    PendaftaranController::class,
    'index'])->name('pendaftaran.index');
    
Route::get('/', function () {
    return view('skc-official');
});

// Route::get('/skc-official', function () {
//     return view('skc-official');
// });

Route::get('/about', function () {
    return view('welcome');
});

Route::get('/ppdb', function () {
    return view('ppdb');
});

Route::get('/ppdb/asper', function () {
    return view('ppdb/asper');
});

Route::get('/ppdb/farmasi', function () {
    return view('ppdb/farmasi');
});

Route::get('/ppdb/tlm', function () {
    return view('ppdb/tlm');
});

Route::get('/informasi', function () {
    return view('informasi');
});