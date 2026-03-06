<?php

namespace App\Models\ManajemenSekolah\Jabatan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KepalaSekolah extends Model
{
    use HasFactory;
    protected $table = 'kepala_sekolahs';
    protected $fillable = [
        'nama',
        'nip',
        'tahunajaran',
        'semester',
        'ttd'
    ];
}
