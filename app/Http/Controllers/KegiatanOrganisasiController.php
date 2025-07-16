<?php

namespace App\Http\Controllers;

use App\Models\KegiatanOrganisasi;
use App\Models\OrganisasiMahasiswa;
use Illuminate\Http\Request;

class KegiatanOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = KegiatanOrganisasi::with('organisasi');

    if ($request->has('search') && $request->search != '') {
        $search = $request->search;
        $query->where('nama_kegiatan', 'like', "%{$search}%")
              ->orWhere('lokasi', 'like', "%{$search}%");
    }

    $data = $query->get();
    return view('kegiatan.index', compact('data'));
}

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organisasi = OrganisasiMahasiswa::all();
        return view('kegiatan.create', compact('organisasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'organisasi_id' => 'required',
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'lokasi' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        KegiatanOrganisasi::create($request->all());
        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = KegiatanOrganisasi::with('organisasi')->findOrFail($id);
        return view('kegiatan.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = KegiatanOrganisasi::findOrFail($id);
        $organisasi = OrganisasiMahasiswa::all();
        return view('kegiatan.edit', compact('data', 'organisasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'organisasi_id' => 'required',
            'nama_kegiatan' => 'required',
            'tanggal_kegiatan' => 'required|date',
            'lokasi' => 'nullable|string',
            'deskripsi' => 'nullable|string',
        ]);

        $data = KegiatanOrganisasi::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        KegiatanOrganisasi::destroy($id);
        return redirect()->route('kegiatan.index')->with('success', 'Kegiatan berhasil dihapus.');
    }
}
