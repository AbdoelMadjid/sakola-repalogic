<?php

namespace App\Models\Kurikulum\PerangkatUjian;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class RuangUjian extends Model
{
    use HasFactory;
    protected $table = 'kur_ujian_ruangs';
    protected $fillable = [
        'kode_ujian',
        'nomor_ruang',
        'kelas_kiri',
        'kelas_kanan',
        'kode_kelas_kiri',
        'kode_kelas_kanan',
    ];
}
