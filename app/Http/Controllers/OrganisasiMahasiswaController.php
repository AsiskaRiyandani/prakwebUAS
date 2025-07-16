<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Models\OrganisasiMahasiswa;

class OrganisasiMahasiswaController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index(Request $request)
{
    $query = OrganisasiMahasiswa::query();

    if ($request->has('search') && $request->search != '') {
        $search = $request->search;
        $query->where('nama_organisasi', 'like', "%{$search}%")
              ->orWhere('jenis_organisasi', 'like', "%{$search}%")
              ->orWhere('fakultas', 'like', "%{$search}%")
              ->orWhere('media_sosial', 'like', "%{$search}%");
    }

    $data = $query->get();

    return view('organisasi.index', compact('data'));
}


    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        return view('organisasi.create');
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        $request->validate([
            'nama_organisasi' => 'required',
            'jenis_organisasi' => 'required',
            'fakultas' => 'required',
            'tahun_berdiri' => 'nullable|integer|min:1900|max:' . date('Y'),
            'status_aktif' => 'nullable|boolean',
            'nomor_telepon' => 'nullable|string|max:20',
            'media_sosial' => 'nullable|string',
        ]);

        OrganisasiMahasiswa::create($request->all());

        return redirect()->route('organisasi.index')->with('success', 'Data berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        $data = OrganisasiMahasiswa::findOrFail($id);
        return view('organisasi.show', compact('data'));
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit(string $id)
    {
        $data = OrganisasiMahasiswa::findOrFail($id);
        return view('organisasi.edit', compact('data'));
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        $request->validate([
            'nama_organisasi' => 'required',
            'jenis_organisasi' => 'required',
            'fakultas' => 'required',
            'tahun_berdiri' => 'nullable|integer|min:1900|max:' . date('Y'),
            'status_aktif' => 'nullable|boolean',
            'nomor_telepon' => 'nullable|string|max:20',
            'media_sosial' => 'nullable|string',
        ]);

        $data = OrganisasiMahasiswa::findOrFail($id);
        $data->update($request->all());

        return redirect()->route('organisasi.index')->with('success', 'Data berhasil diperbarui.');
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        OrganisasiMahasiswa::destroy($id);
        return redirect()->route('organisasi.index')->with('success', 'Data berhasil dihapus.');
    }
}
