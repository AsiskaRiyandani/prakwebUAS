<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class AnggotaOrganisasi extends Model
{
    protected $table = 'anggota_organisasi';

    protected $fillable = [
        'organisasi_id',
        'nama_anggota',
        'nim',
        'jurusan',
        'email',
    ];

    public function organisasi()
    {
        return $this->belongsTo(OrganisasiMahasiswa::class, 'organisasi_id');
    }
}
