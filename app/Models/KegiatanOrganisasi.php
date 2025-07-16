<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class KegiatanOrganisasi extends Model
{
    use HasFactory;

    protected $table = 'kegiatan_organisasi';

    protected $fillable = [
        'organisasi_id',
        'nama_kegiatan',
        'tanggal_kegiatan',
        'lokasi',
        'deskripsi',
    ];

    public function organisasi()
    {
        return $this->belongsTo(OrganisasiMahasiswa::class, 'organisasi_id');
    }
}
