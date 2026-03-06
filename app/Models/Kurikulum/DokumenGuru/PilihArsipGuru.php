<?php

namespace App\Models\Kurikulum\DokumenGuru;

use App\Models\ManajemenSekolah\Personil\PersonilSekolah;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PilihArsipGuru extends Model
{
    use HasFactory;
    protected $table = 'pilih_arsip_gurus';
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
}
