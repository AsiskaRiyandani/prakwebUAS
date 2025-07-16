@extends('layouts.app')

@section('content')
    <h1>Edit Organisasi Mahasiswa</h1>

    <form action="{{ route('organisasi.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Nama Organisasi:</label><br>
            <input type="text" name="nama_organisasi" value="{{ $data->nama_organisasi }}" required>
        </p>
        <p>
            <label>Jenis Organisasi:</label><br>
            <input type="text" name="jenis_organisasi" value="{{ $data->jenis_organisasi }}" required>
        </p>
        <p>
            <label>Fakultas:</label><br>
            <input type="text" name="fakultas" value="{{ $data->fakultas }}" required>
        </p>
        <p>
            <label>Tahun Berdiri:</label><br>
            <input type="number" name="tahun_berdiri" value="{{ $data->tahun_berdiri }}" min="1900" max="{{ date('Y') }}">
        </p>
        <p>
            <label>Status Aktif:</label><br>
            <select name="status_aktif">
                <option value="1" {{ $data->status_aktif ? 'selected' : '' }}>Aktif</option>
                <option value="0" {{ !$data->status_aktif ? 'selected' : '' }}>Tidak Aktif</option>
            </select>
        </p>
        <p>
            <label>Nomor Telepon:</label><br>
            <input type="text" name="nomor_telepon" value="{{ $data->nomor_telepon }}">
        </p>
        <p>
            <label>Media Sosial:</label><br>
            <textarea name="media_sosial" rows="3">{{ $data->media_sosial }}</textarea>
        </p>
        <p>
            <button type="submit">Update</button>
        </p>
    </form>

    <p>
        <a href="{{ route('organisasi.index') }}">Kembali</a>
    </p>
@endsection
