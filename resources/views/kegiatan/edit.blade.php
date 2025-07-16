@extends('layouts.app')

@section('content')
    <h1>Edit Kegiatan</h1>

    <form action="{{ route('kegiatan.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')

        <p>
            <label>Organisasi:</label><br>
            <select name="organisasi_id" required>
                @foreach ($organisasi as $org)
                    <option value="{{ $org->id }}" {{ $data->organisasi_id == $org->id ? 'selected' : '' }}>
                        {{ $org->nama_organisasi }}
                    </option>
                @endforeach
            </select>
        </p>
        <p>
            <label>Nama Kegiatan:</label><br>
            <input type="text" name="nama_kegiatan" value="{{ $data->nama_kegiatan }}" required>
        </p>
        <p>
            <label>Tanggal Kegiatan:</label><br>
            <input type="date" name="tanggal_kegiatan" value="{{ $data->tanggal_kegiatan }}" required>
        </p>
        <p>
            <label>Lokasi:</label><br>
            <input type="text" name="lokasi" value="{{ $data->lokasi }}">
        </p>
        <p>
            <label>Deskripsi:</label><br>
            <textarea name="deskripsi" rows="4" cols="40">{{ $data->deskripsi }}</textarea>
        </p>
        <p>
            <button type="submit">Update</button>
        </p>
    </form>

    <p><a href="{{ route('kegiatan.index') }}">Kembali</a></p>
@endsection
