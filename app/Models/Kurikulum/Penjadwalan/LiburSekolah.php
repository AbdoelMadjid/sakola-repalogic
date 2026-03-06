<?php

namespace App\Models\Kurikulum\Penjadwalan;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class LiburSekolah extends Model
{
    use HasFactory;
    protected $table = 'libur_sekolah';
    protected $fillable = ['tahun_ajaran_id', 'semester', 'tanggal'];
}
