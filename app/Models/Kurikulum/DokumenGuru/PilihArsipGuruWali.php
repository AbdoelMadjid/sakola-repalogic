<?php

namespace App\Models\Kurikulum\DokumenGuru;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use App\Models\ManajemenSekolah\Personil\PersonilSekolah;
use Illuminate\Database\Eloquent\Model;

class PilihArsipGuruWali extends Model
{
    use HasFactory;
    protected $table = 'pilih_arsip_guru_walis';
    protected $fillable = [
        'id_personil',
        'tahunajaran',
        'ganjilgenap',
        'id_guru',
    ];

    public function personil()
    {
        return $this->belongsTo(PersonilSekolah::class, 'id_personil', 'id_personil');
    }

    // GURU WALI YANG DIPILIH
    public function guruWali()
    {
        return $this->belongsTo(PersonilSekolah::class, 'id_guru', 'id_personil');
    }
}
