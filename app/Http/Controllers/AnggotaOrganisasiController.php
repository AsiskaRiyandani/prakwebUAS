<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\AnggotaOrganisasi;
use App\Models\OrganisasiMahasiswa;

class AnggotaOrganisasiController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = AnggotaOrganisasi::with('organisasi');

    if ($request->has('search') && $request->search != '') {
        $search = $request->search;
        $query->where('nama_anggota', 'like', "%{$search}%")
              ->orWhere('nim', 'like', "%{$search}%")
              ->orWhere('jurusan', 'like', "%{$search}%")
              ->orWhere('email', 'like', "%{$search}%");
    }

    $data = $query->get(); // Ini penting!
    return view('anggota.index', compact('data'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        $organisasi = OrganisasiMahasiswa::all();
        return view('anggota.create', compact('organisasi'));
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'organisasi_id' => 'required',
            'nama_anggota' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
        ]);

        AnggotaOrganisasi::create($request->all());
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = AnggotaOrganisasi::with('organisasi')->findOrFail($id);
        return view('anggota.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = AnggotaOrganisasi::findOrFail($id);
        $organisasi = OrganisasiMahasiswa::all();
        return view('anggota.edit', compact('data', 'organisasi'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'organisasi_id' => 'required',
            'nama_anggota' => 'required',
            'nim' => 'required',
            'jurusan' => 'required',
            'email' => 'required|email',
        ]);

        $data = AnggotaOrganisasi::findOrFail($id);
        $data->update($request->all());
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        AnggotaOrganisasi::destroy($id);
        return redirect()->route('anggota.index')->with('success', 'Anggota berhasil dihapus.');
    }
}
