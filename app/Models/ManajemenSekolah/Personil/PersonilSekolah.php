<?php

namespace App\Models\ManajemenSekolah\Personil;

use App\Models\WebSite\HalamanWeb\OrgUnit;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Builder;

class PersonilSekolah extends Model
{
    use HasFactory;

    protected $table = 'personil_sekolahs'; // Nama tabel di database

    protected $fillable = [
        'id_personil',
        'nip',
        'gelardepan',
        'namalengkap',
        'gelarbelakang',
        'jeniskelamin',
        'jenispersonil',
        'tempatlahir',
        'tanggallahir',
        'agama',
        'kontak_email',
        'kontak_hp',
        'photo',
        'aktif',
        'alamat_blok',
        'alamat_nomor',
        'alamat_rt',
        'alamat_rw',
        'alamat_desa',
        'alamat_kec',
        'alamat_kab',
        'alamat_prov',
        'alamat_kodepos',
        'bg_profil',
        'motto_hidup',
    ];

    public static function boot()
    {
        parent::boot();

        // Set ID otomatis saat model dibuat
        static::creating(function ($model) {
            $lastRecord = static::orderBy('id_personil', 'desc')->first();
            $lastNumber = $lastRecord ? intval(substr($lastRecord->id_personil, 4)) : 0;
            $model->id_personil = 'Pgw_' . str_pad($lastNumber + 1, 4, '0', STR_PAD_LEFT);
        });
    }

    public function orgUnits()
    {
        return $this->belongsToMany(
            OrgUnit::class,
            'org_personils',
            'id_personil',
            'org_unit_id',
            'id_personil', // local key on PersonilSekolah
            'id'           // default local key on OrgUnit
        );
    }

    public function scopeDuk(Builder $query): Builder
    {
        return $query
            ->orderByRaw("
                CASE
                    WHEN jenispersonil = 'Kepala Sekolah' THEN 0
                    ELSE 1
                END
            ")
            // Urutkan TMT pengangkatan (YYYYMM dari NIP)
            ->orderByRaw("SUBSTRING(nip, 10, 6) ASC")
            // Jika sama, urutkan tanggal lahir (YYYYMMDD dari NIP)
            ->orderByRaw("SUBSTRING(nip, 1, 8) ASC");
    }

    public function kepeg()
    {
        return $this->hasOne(
            PersonilSekolahKepeg::class,
            'id_personil', // FK di personil_sekolah_kepeg
            'id_personil'  // PK di personil_sekolahs
        );
    }
}
