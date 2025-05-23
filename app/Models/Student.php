<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Jika nama tabel tidak mengikuti konvensi penamaan Laravel (misalnya 'students')
    protected $table = 'student';

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
    'nama',
    'jurusan',
    'jurusan_2',
    'tempat_lahir',
    'tanggal_lahir',
    'alamat',
    'kelamin',
    'nisn',
    'sekolahAsal',
    'nmorngtuawali',
    'nmrkonfirmasi',
    'rekomendasi'
    ];  // Sesuaikan dengan kolom di tabel
}
