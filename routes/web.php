<?php

use App\Http\Controllers\PendaftaranController;
use App\Http\Controllers\StudentController;
use App\Http\Controllers\DashboardController;
use App\Http\Controllers\ProfileController;
use App\Http\Controllers\GuruController;
use App\Http\Controllers\StudentGel1Controller;
use App\Http\Controllers\CollageController;
use App\Models\Student;
use App\Http\Controllers\GaleriController;
use Illuminate\Support\Facades\Route;
use SebastianBergmann\CodeCoverage\Report\Html\Dashboard;

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

Route::get('/galeri', function () {
    // Menampilkan halaman utama (skc-official.blade.php)
    return view('galeri');
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

Route::get('/informasi/askep', function () {
    // Menampilkan halaman Informasi untuk program ASPER
    return view('informasi/askep', [
        "namajurusan" => "Asisten Keperawatan",
        "logo" => "LOGO_ASKEP.png",
        "kompetensi" => "Asisten Keperawatan merupakan suatu kompetensi keahlian yang menghasilkan tenaga ahli di bidang kesehatan dalam asistensi keperawatan yang terampil dan kompeten, khususnya pemenuhan kebutuhan dasar manusia merawat kesehatan mental dan sik."
    ]);
});

Route::get('/informasi/farmasi', function () {
    // Menampilkan halaman Informasi untuk program Farmasi
    return view('informasi/farmasi', [
        "namajurusan" => "Farmasi Klinis dan Komunitas",
        "logo" => "LOGO_FARMASI.png",
        "kompetensi" => "Farmasi merupakan kompetensi keahlian yang mempelajari segala hal tentang obat. Mulai dari bahan kimia yang ada didalamnya, proses pembuatan obat, proses pengemasan obat, fungsi dan kegunaan obat, sampai cara distribusi dan pengelolaan stok obat."
    ]);
});

Route::get('/informasi/tlm', function () {
    // Menampilkan halaman Informasi untuk program TLM (Teknologi Laboratorium Medik)
    return view('informasi/tlm', [
        "namajurusan" => "Teknologi Labroratorium Medik",
        "logo" => "LOGO_TLM.png",
        "kompetensi" => "Teknologi Laboratorium Medik merupakan kompetensi keahlian yang akan berkecimpung di dunia kesehatan untuk melaksanakan pelayanan pemeriksaan, pengukuran, penetapan dan pengujian terhadap bahan yang berasal dari manusia untuk penentuan jenis penyakit dan penyebab penyakit. Keunggulan dari kompetensi keahlian Teknologi Laboratorium Medik yaitu dalam penyerapan lulusan. Lulusan Teknologi Laboratorium Medik SMK Kesehatan Cianjur akan sangat mudah mendapatkan pekerjaan, mengingat masih kurangnnya SDM dibidang Teknologi Laboratorium Medik/Analis Kesehatan."
    ]);
});

// ** Route Halaman Dashboard **
Route::get('/dashboard', function () {
    // Menampilkan halaman dashboard
    return view('dashboard');
})->middleware(['auth', 'verified'])->name('dashboard');

// Menghubungkan DashboardController dengan halaman dashboard
Route::get('/dashboard', [DashboardController::class, 'index'])->name('dashboard');

// ** Route Halaman Dashboard **
Route::get('/dashboard/profileguru', function () {
    // Menampilkan halaman dashboard
    return view('dashboard/profileguru');
})->middleware(['auth', 'verified'])->name('dashboard/profileguru');

Route::get('/dashboard/daftarsiswa', [StudentGel1Controller::class, 'index']);

// ** Route untuk Profile Guru **
Route::get('/dashboard/guru', [GuruController::class, 'index'])->name('guru.index'); // Tampilkan data
Route::post('/dashboard/guru', [GuruController::class, 'store'])->name('guru.store'); // Simpan data

Route::get('/dashboard/uploads', function () {
    // Menampilkan halaman upload gambar
    return view('dashboard/uploads');
})->middleware(['auth', 'verified'])->name('dashboard/uploads');

Route::get('/galeri', [GaleriController::class, 'index'])->name('galeri.index');
Route::get('/galeri/create', [GaleriController::class, 'create'])->name('galeri.create');
Route::post('/galeri', [GaleriController::class, 'store'])->name('galeri.store');

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

Route::get('/collage/create', [CollageController::class, 'create'])->name('collage.create');
Route::post('/collage', [CollageController::class, 'store'])->name('collage.store');
Route::get('/collage', [CollageController::class, 'index'])->name('collage.index');

// ** Include Auth Routes **
require __DIR__ . '/auth.php';
