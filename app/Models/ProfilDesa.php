<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class ProfilDesa extends Model
{
    use HasFactory;

    // Nama tabel (opsional jika sesuai konvensi)
    protected $table = 'profil_desas';

    // Kolom yang bisa diisi (mass assignment)
    protected $fillable = [
        'sejarah_desa',
        'visi_misi',
        'fasilitas_desa',
        'prestasi_desa',
    ];
}
