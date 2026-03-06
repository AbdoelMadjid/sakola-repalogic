<?php

namespace App\Models\ManajemenSekolah\Personil;

use App\Models\Kurikulum\PerangkatKurikulum\GuruWaliSiswa;
use App\Models\Kurikulum\PerangkatKurikulum\PesertaDidikRombel;
use App\Models\ManajemenSekolah\Keahlian\KompetensiKeahlian;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class PesertaDidik extends Model
{
    use HasFactory;
    // Nama tabel
    protected $table = 'peserta_didiks';

    // Kolom yang bisa diisi
    protected $fillable = [
        'nis',
        'nisn',
        'thnajaran_masuk',
        'kode_kk',
        'nama_lengkap',
        'tempat_lahir',
        'tanggal_lahir',
        'jenis_kelamin',
        'agama',
        'status_dalam_kel',
        'anak_ke',
        'sekolah_asal',
        'diterima_kelas',
        'diterima_tanggal',
        'asalsiswa',
        'keterangan_pindah',
        'alamat_blok',
        'alamat_norumah',
        'alamat_rt',
        'alamat_rw',
        'alamat_desa',
        'alamat_kec',
        'alamat_kab',
        'alamat_kodepos',
        'kontak_telepon',
        'kontak_email',
        'foto',
        'status',
        'alasan_status',
    ];

    // Relasi ke PesertaDidikOrtu
    public function ortus()
    {
        return $this->hasOne(PesertaDidikOrtu::class, 'nis', 'nis');
    }

    public function rombel()
    {
        return $this->hasOne(PesertaDidikRombel::class, 'nis', 'nis');
    }

    public function guruWali()
    {
        return $this->hasOne(GuruWaliSiswa::class, 'nis', 'nis');
    }

    public function rombels10()
    {
        return $this->hasOne(PesertaDidikRombel::class, 'nis', 'nis')->where('rombel_tingkat', 10);
    }
    public function rombels11()
    {
        return $this->hasOne(PesertaDidikRombel::class, 'nis', 'nis')->where('rombel_tingkat', 11);
    }
    public function rombels12()
    {
        return $this->hasOne(PesertaDidikRombel::class, 'nis', 'nis')->where('rombel_tingkat', 12);
    }
    public function kompetensi()
    {
        return $this->belongsTo(KompetensiKeahlian::class, 'kode_kk', 'idkk');
    }
}
