<?php

namespace App\Http\Controllers;

use App\Models\KandidatModel;
use Illuminate\Http\Request;


class KandidatController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kandidats = KandidatModel::all();
        // if ($request->ajax()) {
        //     return response()->json($kandidats);
        // }
        return view('admin/data_kandidat/index',compact('kandidat'));
    }

    /**
     * Show the form for creating a new resource.
     */
    public function create()
    {
        //
    }

    /**
     * Store a newly created resource in storage.
     */
    public function store(Request $request)
    {
        // Cek jumlah kandidat di database
        $jumlahKandidat = KandidatModel::count();

        if ($jumlahKandidat >= 3) {
            return redirect()->back()->with('error', 'Maksimal hanya 3 kandidat yang bisa didaftarkan.');
        }

        // Validasi input
        $request->validate([
            'nama_ketua' => 'required|string|max:255',
            'nama_wakil' => 'required|string|max:255',
            'nis_ketua' => 'required|string|max:20',
            'nis_wakil' => 'required|string|max:20',
            'foto' => 'required|image|mimes:jpeg,png,jpg|max:2048',
            'nomor_kandidat' => 'required|integer|unique:kandidat,nomor_kandidat',
        ]);

        // Simpan foto
        $fotoPath = $request->file('foto')->store('public/foto_kandidat');

        // Simpan ke database
        KandidatModel::create([
            'nama_ketua' => $request->nama_ketua,
            'nama_wakil' => $request->nama_wakil,
            'nis_ketua' => $request->nis_ketua,
            'nis_wakil' => $request->nis_wakil,
            'foto' => str_replace('public/', '', $fotoPath), // Simpan path foto
            'nomor_kandidat' => $request->nomor_kandidat,
        ]);

        return redirect()->back()->with('success', 'Kandidat berhasil ditambahkan.');
    }

    /**
     * Display the specified resource.
     */
    public function show(string $id)
    {
        //
    }

    /**
     * Show the form for editing the specified resource.
     */
    public function edit($id)
    {
        $kandidat = KandidatModel::findOrFail($id);
        return view('kandidat.edit', compact('kandidat'));
    }


    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, $id)
    {
        $request->validate([
            'nama_ketua' => 'required|string|max:255',
            'nama_wakil' => 'required|string|max:255',
            'nis_ketua' => 'required|numeric',
            'nis_wakil' => 'required|numeric',
            'foto' => 'nullable|image|mimes:jpeg,png,jpg|max:2048',
            'nomor_kandidat' => 'required|numeric',
        ]);

        $kandidat = KandidatModel::findOrFail($id);

        $kandidat->nama_ketua = $request->nama_ketua;
        $kandidat->nama_wakil = $request->nama_wakil;
        $kandidat->nis_ketua = $request->nis_ketua;
        $kandidat->nis_wakil = $request->nis_wakil;
        $kandidat->nomor_kandidat = $request->nomor_kandidat;

        // Cek apakah ada foto baru yang diunggah
        if ($request->hasFile('foto')) {
            // Hapus foto lama jika ada
            if ($kandidat->foto && file_exists(public_path('img/' . $kandidat->foto))) {
                unlink(public_path('img/' . $kandidat->foto));
            }

        // Simpan foto baru
            $file = $request->file('foto');
            $filename = time() . '_' . $file->getClientOriginalName();
            $file->move(public_path('img'), $filename);

            $kandidat->foto = $filename;
        }

        $kandidat->save();

        return redirect()->route('kandidat.index')->with('success', 'Data kandidat berhasil diperbarui!');
    }


    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}