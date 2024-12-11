<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    // Nama tabel (opsional jika tabelnya "gurus")
    protected $table = 'gurus';

    // Kolom-kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'nama',
        'photo_path'
    ];

    // Kolom timestamp
    public $timestamps = true;
}

