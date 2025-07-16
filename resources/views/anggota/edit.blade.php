@extends('layouts.app')

@section('content')
    <h1>Edit Anggota Organisasi</h1>

    <form action="{{ route('anggota.update', $data->id) }}" method="POST">
        @csrf
        @method('PUT')
        <p>
            <label>Nama Anggota:</label><br>
            <input type="text" name="nama_anggota" value="{{ $data->nama_anggota }}" required>
        </p>
        <p>
            <label>NIM:</label><br>
            <input type="text" name="nim" value="{{ $data->nim }}" required>
        </p>
        <p>
            <label>Jurusan:</label><br>
            <input type="text" name="jurusan" value="{{ $data->jurusan }}" required>
        </p>
        <p>
            <label>Email:</label><br>
            <input type="email" name="email" value="{{ $data->email }}" required>
        </p>
        <p>
            <label>Organisasi:</label><br>
            <select name="organisasi_id" required>
                @foreach ($organisasi as $org)
                    <option value="{{ $org->id }}" {{ $org->id == $data->organisasi_id ? 'selected' : '' }}>
                        {{ $org->nama_organisasi }}
                    </option>
                @endforeach
            </select>
        </p>
        <p>
            <button type="submit">Update</button>
        </p>
    </form>

    <p><a href="{{ route('anggota.index') }}">Kembali</a></p>
@endsection
