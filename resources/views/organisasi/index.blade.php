@extends('layouts.app')

@section('content')
    <h1>Data Organisasi Mahasiswa</h1>

    <a href="{{ route('organisasi.create') }}">Tambah Organisasi</a>

    <form action="{{ route('organisasi.index') }}" method="GET" style="margin-top: 15px; margin-bottom: 15px;">
        <input type="text" name="search" placeholder="Cari nama organisasi..." value="{{ request('search') }}">
        <button type="submit">Cari</button>
    </form>

    <table border="1" >
        <tr>
            <th>ID</th>
            <th>Nama Organisasi</th>
            <th>Jenis</th>
            <th>Fakultas</th>
            <th>Tahun Berdiri</th>
            <th>Status</th>
            <th>Nomor Telepon</th>
            <th>Media Sosial</th>
            <th>Aksi</th>
        </tr>
        @foreach ($data as $org)
        <tr>
            <td>{{ $org->id }}</td>
            <td>{{ $org->nama_organisasi }}</td>
            <td>{{ $org->jenis_organisasi }}</td>
            <td>{{ $org->fakultas }}</td>
            <td>{{ $org->tahun_berdiri }}</td>
            <td>{{ $org->status_aktif ? 'Aktif' : 'Tidak Aktif' }}</td>
            <td>{{ $org->nomor_telepon }}</td>
            <td>{{ $org->media_sosial }}</td>
            <td>
                <a href="{{ route('organisasi.edit', $org->id) }}">Edit</a>
                <form action="{{ route('organisasi.destroy', $org->id) }}" method="POST" style="display:inline;">
                    @csrf
                    @method('DELETE')
                    <button type="submit" onclick="return confirm('Yakin ingin menghapus?')">Hapus</button>
                </form>
            </td>
        </tr>
        @endforeach
    </table>
@endsection
