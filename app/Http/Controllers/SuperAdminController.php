<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Http\Request;

class SuperAdminController extends Controller
{
    public function index()
    {
        return view('dashboard');
    }

    public function layouts()
    {
        $profilDesa = ProfilDesa::first();
        return view('rolesuperadmin.layouts', compact('profilDesa'));
    }

    public function updateProfilDesa(Request $request)
    {
        $request->validate([
            'dbFieldName' => 'required|string',
            'description' => 'required|string',
        ], [
            'dbFieldName.required' => 'Terjadi kesalahan, silakan coba lagi.',
            'description.required' => 'Deskripsi tidak boleh kosong.',
        ]);

        // Ambil data profil desa
        $profilDesa = ProfilDesa::first();
        if (!$profilDesa) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data profil desa tidak ditemukan!'
            ], 404);
        }

        // Update field yang sesuai
        $field = $request->dbFieldName;
        if (!in_array($field, ['sejarah_desa', 'visi_misi', 'fasilitas_desa', 'prestasi_desa'])) {
            return response()->json([
                'status' => 'error',
                'message' => 'Field tidak valid!'
            ], 400);
        }

        $profilDesa->$field = $request->description;
        $profilDesa->save();

        return response()->json([
            'status' => 'success',
            'message' => 'Profil desa berhasil diperbarui!'
        ]);
    }
}
