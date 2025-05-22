<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;

class GelombangDua extends Model
{
    protected $table = 'gelombangdua';
    protected $fillable = [
        'nama',
        'jurusan',
        'jurusan_2',
        'nisn',
        'tempat_lahir',
        'tanggal_lahir',
        'alamat',
        'kelamin',
        'sekolahAsal',
        'nmorngtuawali',
        'nmrkonfirmasi',
        'rekomendasi'
    ];
    protected $casts = [
        'tanggal_lahir' => 'date',
    ];
    public function getFormattedTanggalLahirAttribute()
    {
        return $this->tanggal_lahir->format('d-m-Y');
    }
}
