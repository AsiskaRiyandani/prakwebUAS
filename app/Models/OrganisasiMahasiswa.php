<?php

namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class OrganisasiMahasiswa extends Model
{
    use HasFactory;

    protected $table = 'organisasi_mahasiswas';

    protected $fillable = [
        'nama_organisasi',
        'jenis_organisasi',
        'fakultas',
        'tahun_berdiri',
        'status_aktif',
        'nomor_telepon',
        'media_sosial',
    ];
}
