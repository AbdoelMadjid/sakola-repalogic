<?php

namespace App\Models\Kurikulum\PerangkatUjian;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PengawasUjian extends Model
{
    use HasFactory;
    protected $table = 'kur_ujian_pengawas';
    protected $fillable = [
        'kode_ujian',
        'nomor_ruang',
        'tanggal_ujian',
        'jam_ke',
        'kode_pengawas',
    ];
}
