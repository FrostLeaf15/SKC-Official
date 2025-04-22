<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Factories\HasFactory;

class Image extends Model
{
    use HasFactory;

    protected $fillable = ['collage_id', 'path'];

    public function collage()
    {
        return $this->belongsTo(Collage::class);
    }
}
