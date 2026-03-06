<?php

namespace App\Models\Kurikulum\PerangkatUjian;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class DenahRuanganUjian extends Model
{
    use HasFactory;
    protected $table = 'kur_ujian_denahs';
    protected $primaryKey = 'id';
    protected $fillable = ['kode_ujian', 'kode_ruang', 'label', 'x', 'y', 'warna'];
}
