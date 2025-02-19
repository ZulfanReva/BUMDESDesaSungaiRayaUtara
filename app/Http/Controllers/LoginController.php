<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;

class LoginController extends Controller
{
    public function login(Request $request)
    {
        $request->validate([
            'email' => 'required|email',
            'password' => 'required',
        ]);

        if (!Auth::attempt(['email' => $request->email, 'password' => $request->password])) {
            $user = \App\Models\User::where('email', $request->email)->first();

            if (!$user) {
                return redirect()->back()->with('error', 'Email tidak ditemukan.');
            } else {
                return redirect()->back()->with('error', 'Password salah.');
            }
        }

        return redirect()->route('dashboard'); // Redirect ke halaman utama setelah login berhasil
    }
}
