<?php

namespace App\Models\AppSupport;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AppProfil extends Model
{
    use HasFactory;
    protected $table = 'app_profiles';
    protected $fillable = ['app_nama', 'app_deskripsi', 'app_tahun', 'app_pengembang', 'app_icon', 'app_logo'];

    public function getLogoUrlAttribute()
    {
        return $this->app_logo
            ? asset('build/images/' . $this->app_logo)
            : asset('build/images/default-logo.png');
    }

    public function getIconUrlAttribute()
    {
        return $this->app_icon
            ? asset('build/images/' . $this->app_icon)
            : asset('build/images/default-icon.png');
    }
}
