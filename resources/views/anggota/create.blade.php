@extends('layouts.app')

@section('content')
    <h1>Tambah Anggota Anggota</h1>

    <form action="{{ route('anggota.store') }}" method="POST">
        @csrf
        <p>
            <label>Nama Anggota:</label><br>
            <input type="text" name="nama_anggota" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" required>
        </p>
        <p>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" required>
        </p>
        <p>
            <label>Organisasi:</label><br>
            <select name="organisasi_id" required>
                <option value="">-- Pilih Organisasi --</option>
                @foreach ($organisasi as $org)
                    <option value="{{ $org->id }}">{{ $org->nama_organisasi }}</option>
                @endforeach
            </select>
        </p>
        <p>
            <button type="submit">Simpan</button>
        </p>
    </form>

    <p><a href="{{ route('anggota.index') }}">Kembali</a></p>
@endsection
