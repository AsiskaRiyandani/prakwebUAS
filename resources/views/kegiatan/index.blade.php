@extends('layouts.app')

@section('content')
    <h1>Data Kegiatan Organisasi</h1>

    <a href="{{ route('kegiatan.create') }}">Tambah Kegiatan</a>

    <form action="{{ route('kegiatan.index') }}" method="GET" style="margin-top: 15px; margin-bottom: 15px;">
        <input type="text" name="search" placeholder="Cari nama kegiatan..." value="{{ request('search') }}">
        <button type="submit">Cari</button>
    </form>

    <table border="1" >
        <tr>
            <th>ID</th>
            <th>Nama Organisasi</th>
            <th>Nama Kegiatan</th>
            <th>Tanggal</th>
            <th>Lokasi</th>
            <th>Deskripsi</th> 
            <th>Aksi</th>
        </tr>
        @foreach ($data as $item)
            <tr>
                <td>{{ $item->id }}</td>
                <td>{{ $item->organisasi->nama_organisasi }}</td>
                <td>{{ $item->nama_kegiatan }}</td>
                <td>{{ $item->tanggal_kegiatan }}</td>
                <td>{{ $item->lokasi }}</td>
                <td>{{ $item->deskripsi }}</td> 
                <td>
                    <a href="{{ route('kegiatan.edit', $item->id) }}">Edit</a>
                    <form action="{{ route('kegiatan.destroy', $item->id) }}" method="POST" style="display:inline;">
                        @csrf
                        @method('DELETE')
                        <button onclick="return confirm('Yakin hapus?')">Hapus</button>
                    </form>
                </td>
            </tr>
        @endforeach
    </table>
@endsection
