<?php

use App\Http\Controllers\OrganisasiMahasiswaController;
use App\Http\Controllers\AnggotaOrganisasiController;
use App\Http\Controllers\KegiatanOrganisasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('welcome');
});
Route::resource('organisasi', OrganisasiMahasiswaController::class);
Route::resource('anggota', AnggotaOrganisasiController::class);
Route::resource('kegiatan', KegiatanOrganisasiController::class);
