<?php

namespace App\Models\Kurikulum\PerangkatKurikulum;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class WaliKelas extends Model
{
    use HasFactory;
    protected $fillable = [
        'tahunajaran',
        'rombel',
        'kode_rombel',
        'wali_kelas',
    ];
}
