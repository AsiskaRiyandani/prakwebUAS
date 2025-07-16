@extends('layouts.app')

@section('content')
    <h1>Tambah Organisasi Mahasiswa</h1>

    <form action="{{ route('organisasi.store') }}" method="POST">
        @csrf
        <p>
            <label>Nama Organisasi:</label><br>
            <input type="text" name="nama_organisasi" required>
        </p>
        <p>
            <label>Jenis Organisasi:</label><br>
            <input type="text" name="jenis_organisasi" placeholder="Contoh: UKM, HMJ, BEM" required>
        </p>
        <p>
            <label>Fakultas:</label><br>
            <input type="text" name="fakultas" required>
        </p>
        <p>
            <label>Tahun Berdiri:</label><br>
            <input type="number" name="tahun_berdiri" min="1900" max="{{ date('Y') }}">
        </p>
        <p>
            <label>Status Aktif:</label><br>
            <select name="status_aktif">
                <option value="1">Aktif</option>
                <option value="0">Tidak Aktif</option>
            </select>
        </p>
        <p>
            <label>Nomor Telepon:</label><br>
            <input type="text" name="nomor_telepon">
        </p>
        <p>
            <label>Media Sosial:</label><br>
            <textarea name="media_sosial" rows="3"></textarea>
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

    <p>
        <a href="{{ route('organisasi.index') }}">Kembali</a>
    </p>
@endsection
