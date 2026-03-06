<?php

namespace App\Models\Kurikulum\PerangkatKurikulum;

use App\Models\ManajemenSekolah\Personil\PesertaDidik;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class GuruWaliSiswa extends Model
{
    use HasFactory;
    protected $table = 'guru_wali_siswas';

    protected $fillable = [
        'tahunajaran',
        'id_personil',
        'nis',
        'status',
        'catatan_khusus'
    ];

    public function siswa()
    {
        return $this->belongsTo(PesertaDidik::class, 'nis', 'nis');
    }
}
