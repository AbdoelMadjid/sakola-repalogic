<?php

namespace App\Models\Kurikulum\DokumenGuru;

use App\Models\ManajemenSekolah\Personil\PersonilSekolah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihArsipWaliKelas extends Model
{
    use HasFactory;
    protected $table = 'pilih_arsip_wali_kelas';
    protected $fillable = [
        'id_personil',
        'tahunajaran',
        'ganjilgenap',
        'kode_kk',
        'tingkat',
        'kode_rombel',
    ];

    public function personil()
    {
        return $this->belongsTo(PersonilSekolah::class, 'id_personil', 'id_personil');
    }
}
