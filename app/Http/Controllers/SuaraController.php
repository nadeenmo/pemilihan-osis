<?php

namespace App\Http\Controllers;

use App\Models\KandidatModel;
use App\Models\SuaraModel;
use Illuminate\Http\Request;

class SuaraController extends Controller
{
    /**
     * Display a listing of the resource.
     */
    public function index()
    {
        //
        $kandidats = KandidatModel::withCount('suara')->get(); // Pastikan ada relasi votes di model Kandidat
        $labels = $kandidats->pluck('nama_ketua'); // Ambil nama ketua sebagai label
        $data = $kandidats->pluck('votes_count'); // Ambil jumlah suara
        $suara = SuaraModel::All();
        return view('admin/hasil_suara.index', compact('suara'));
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