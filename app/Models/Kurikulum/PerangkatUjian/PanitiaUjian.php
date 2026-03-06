<?php

namespace App\Models\Kurikulum\PerangkatUjian;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PanitiaUjian extends Model
{
    use HasFactory;
    protected $table = 'kur_ujian_panitias';
    protected $fillable = [
        'kode_ujian',
        'id_personil',
        'nip',
        'nama_lengkap',
        'jabatan',
    ];
}
