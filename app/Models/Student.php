<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Student extends Model
{
    use HasFactory;

    // Jika nama tabel tidak mengikuti konvensi penamaan Laravel (misalnya 'students')
    protected $table = 'students';

    // Tentukan kolom yang bisa diisi
    protected $fillable = [
    'nama',
    'nik',
    'jurusan',
    'tempat_lahir',
    'tanggal_lahir',
    'alamat',
    'kelamin',
    'nisn',
    'sekolahAsal',
    'namaAyah',
    'pkrjnAyah',
    'namaIbu',
    'pkrjnIbu',
    'nmrkonfirmasi'
    ];  // Sesuaikan dengan kolom di tabel
}