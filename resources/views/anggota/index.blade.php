@extends('layouts.app')

@section('content')
    <h1>Daftar Anggota Organisasi</h1>

    <a href="{{ route('anggota.create') }}">Tambah Anggota</a>

    <form action="{{ route('anggota.index') }}" method="GET" style="margin-top: 15px; margin-bottom: 15px;">
    <input type="text" name="search" placeholder="Cari nama anggota..." value="{{ request('search') }}">
    <button type="submit">Cari</button>
</form>


    <table border="1" >
        <tr>
            <th>ID</th>
            <th>Nama Anggota</th>
            <th>NIM</th>
            <th>Jurusan</th>
            <th>Email</th>
            <th>Organisasi</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $anggota)
        <tr>
            <td>{{ $anggota->id }}</td>
            <td>{{ $anggota->nama_anggota }}</td>
            <td>{{ $anggota->nim }}</td>
            <td>{{ $anggota->jurusan }}</td>
            <td>{{ $anggota->email }}</td>
            <td>{{ $anggota->organisasi->nama_organisasi }}</td>
            <td>
                <a href="{{ route('anggota.edit', $anggota->id) }}">Edit</a>
                <form action="{{ route('anggota.destroy', $anggota->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
