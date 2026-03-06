<?php

namespace App\Models\Kurikulum\PerangkatUjian;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DaftarPengawasUjian extends Model
{
    use HasFactory;
    protected $table = 'kur_ujian_daftar_pengawas';
    protected $fillable = [
        'kode_ujian',
        'kode_pengawas',
        'nip',
        'nama_lengkap',
    ];
}
