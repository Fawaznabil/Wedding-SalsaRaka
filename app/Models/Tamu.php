<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class Tamu extends Model
{
    use HasFactory;

    protected $fillable = [
        'NAMA',
        'KRITERIA_DAERAH',
        'DETAIL_ALAMAT',
        'KODE',
        'SOUVENIR',

    ];

    public function user()
    {
        return $this->belongsTo(User::class);
    }

    public function konten()
    {
        return $this->hasMany(konten::class);
    }
}
