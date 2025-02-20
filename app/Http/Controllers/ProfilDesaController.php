<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Http\Request;

class ProfilDesaController extends Controller
{
    public function index()
    {
        $profil = ProfilDesa::first();
        return view('layouts', compact('profil'));
    }

    public function update(Request $request)
    {
        $profil = ProfilDesa::firstOrCreate([]);

        $profil->update([
            'sejarah_desa' => $request->sejarah_desa,
            'visi_misi' => $request->visi_misi,
            'fasilitas_desa' => $request->fasilitas_desa,
            'prestasi_desa' => $request->prestasi_desa,
        ]);

        return response()->json(['message' => 'Profil desa berhasil diperbarui!']);
    }
}
