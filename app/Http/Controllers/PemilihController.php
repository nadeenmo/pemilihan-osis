<?php

namespace App\Http\Controllers;

use App\Models\PemilihModel;
use App\Models\KodeAkses;
use Illuminate\Http\Request;

class PemilihController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $pemilih = PemilihModel::with('kodeAkses')->get();
        //return response()->json($pemilih);
    return view('admin.data_pemilih.index',compact('pemilih'));
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
        //
        $request->validate([
            'nama' => 'required|string',
            'email' => 'required|email|unique:pemilih',
        ]);

        $pemilih = PemilihModel::create([
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        $kodeAkses = KodeAkses::create([
            'pemilih_id' => $pemilih->id,
        ]);

        return response()->json([
            'message' => 'Pemilih berhasil ditambahkan',
            'kode_akses' => $kodeAkses->kode
        ], 201);
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
    public function edit(string $id)
    {
        //
    }

    /**
     * Update the specified resource in storage.
     */
    public function update(Request $request, string $id)
    {
        //
    }

    /**
     * Remove the specified resource from storage.
     */
    public function destroy(string $id)
    {
        //
    }
}