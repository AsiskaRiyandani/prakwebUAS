@extends('layouts.app')

@section('content')
    <h1>Tambah Kegiatan</h1>

    <form action="{{ route('kegiatan.store') }}" method="POST">
        @csrf
        <p>
            <label>Organisasi:</label><br>
            <select name="organisasi_id" required>
                @foreach ($organisasi as $org)
                    <option value="{{ $org->id }}">{{ $org->nama_organisasi }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <label>Nama Kegiatan:</label><br>
            <input type="text" name="nama_kegiatan" required>
        </p>
        <p>
            <label>Tanggal Kegiatan:</label><br>
            <input type="date" name="tanggal_kegiatan" required>
        </p>
        <p>
            <label>Lokasi:</label><br>
            <input type="text" name="lokasi">
        </p>
        <p>
            <label>Deskripsi:</label><br>
            <textarea name="deskripsi" rows="4" cols="40"></textarea>
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

    <p><a href="{{ route('kegiatan.index') }}">Kembali</a></p>
@endsection
