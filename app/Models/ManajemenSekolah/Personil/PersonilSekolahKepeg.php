<?php

namespace App\Models\ManajemenSekolah\Personil;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PersonilSekolahKepeg extends Model
{
    use HasFactory;

    protected $table = 'personil_sekolah_kepeg'; // Nama tabel di database

    protected $fillable = [
        'id_personil',
        'nik',
        'nuptk',
        'npwp',
        'jenis_kepeg',
        'gol_ruang',
        'jabatan',
    ];


    public function personil()
    {
        return $this->belongsTo(
            PersonilSekolah::class,
            'id_personil',
            'id_personil'
        );
    }
}
