<?php

namespace App\Http\Controllers;

use App\Models\User;
use App\Models\ProfilDesa;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Validator;

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

        $profilDesa = ProfilDesa::first();
        if (!$profilDesa) {
            return response()->json([
                'status' => 'error',
                'message' => 'Data profil desa tidak ditemukan!'
            ], 404);
        }

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

    // Menampilkan daftar admin
    public function account()
    {
        $users = User::where('role', 'Admin')->get();
        return view('rolesuperadmin.account', compact('users'));
    }

    // Menyimpan admin baru
    public function storeAccount(Request $request)
    {
        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users',
            'password' => 'required|string|min:6',
            'role' => 'required|string',
        ], [
            'nama.required' => 'Nama tidak boleh kosong.',
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
            'password.required' => 'Password wajib diisi.',
            'password.min' => 'Password minimal harus 6 karakter.',
            'role.required' => 'Peran wajib diisi.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        User::create([
            'nama' => $request->nama,
            'email' => $request->email,
            'password' => Hash::make($request->password),
            'role' => $request->role,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Admin berhasil ditambahkan.'
        ], 201);
    }

    // Mengupdate admin
    public function updateAccount(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'nama' => 'required|string|max:255',
            'email' => 'required|string|email|max:255|unique:users,email,' . $user->id,
        ], [
            'nama.required' => 'Nama tidak boleh kosong.',
            'email.required' => 'Email tidak boleh kosong.',
            'email.email' => 'Format email tidak valid.',
            'email.unique' => 'Email sudah digunakan.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user->update([
            'nama' => $request->nama,
            'email' => $request->email,
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Admin berhasil diperbarui.'
        ]);
    }

    // Reset password admin
    public function resetAccountPassword(Request $request, $id)
    {
        $user = User::findOrFail($id);

        $validator = Validator::make($request->all(), [
            'newPassword' => 'required|string|min:6',
        ], [
            'newPassword.required' => 'Password baru wajib diisi.',
            'newPassword.min' => 'Password baru minimal harus 6 karakter.',
        ]);

        if ($validator->fails()) {
            return response()->json([
                'status' => 'error',
                'errors' => $validator->errors()
            ], 422);
        }

        $user->update([
            'password' => Hash::make($request->newPassword),
        ]);

        return response()->json([
            'status' => 'success',
            'message' => 'Password berhasil direset.'
        ]);
    }

    // Menghapus admin
    public function destroyAccount($id)
    {
        try {
            $user = User::findOrFail($id);
            $user->delete();

            return response()->json([
                'status' => 'success',
                'message' => 'Akun berhasil dihapus.'
            ]);
        } catch (\Exception $e) {
            return response()->json([
                'status' => 'error',
                'message' => 'Terjadi kesalahan saat menghapus akun.'
            ], 500);
        }
    }
}
