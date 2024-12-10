<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class Guru extends Model
{
    // Kolom-kolom yang dapat diisi melalui mass assignment
    protected $fillable = [
        'nama',
        'photo_path'
    ];
}
