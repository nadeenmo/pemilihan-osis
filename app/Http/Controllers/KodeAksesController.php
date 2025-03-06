<?php

namespace App\Http\Controllers;

use App\Models\KodeAkses;
use Illuminate\Http\Request;

class KodeAksesController extends Controller
{
    public function cekKode(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|exists:kode_akses,kode',
        ]);

        $kodeAkses = KodeAkses::where('kode', $request->kode)->first();

        if ($kodeAkses->sudah_digunakan) {
            return response()->json(['message' => 'Kode akses sudah digunakan!'], 400);
        }

        return response()->json([
            'message' => 'Kode akses valid!',
            'pemilih_id' => $kodeAkses->pemilih_id,
        ]);
    }

    public function gunakanKode(Request $request)
    {
        $request->validate([
            'kode' => 'required|string|exists:kode_akses,kode',
        ]);

        $kodeAkses = KodeAkses::where('kode', $request->kode)->first();

        if ($kodeAkses->sudah_digunakan) {
            return response()->json(['message' => 'Kode akses sudah digunakan!'], 400);
        }

        $kodeAkses->update(['sudah_digunakan' => true]);

        return response()->json(['message' => 'Kode akses berhasil digunakan!']);
    }
}