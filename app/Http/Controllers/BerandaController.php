<?php

namespace App\Http\Controllers;

use App\Models\ProfilDesa;
use Illuminate\Http\Request;

class BerandaController extends Controller
{
    public function index()
    {
        $services = [
            ['name' => 'Bisnis Sosial/Serving', 'route' => '#'],
            ['name' => 'Keuangan/Banking', 'route' => '#'],
            ['name' => 'Bisnis Penyewaan/Renting', 'route' => '#'],
            ['name' => 'Lembaga Perantara/Brokering', 'route' => '#'],
            ['name' => 'Perdagangan/Trading', 'route' => '#'],
            ['name' => 'Usaha Bersama/Holding', 'route' => '#'],
            ['name' => 'Kontraktor/Contracting', 'route' => '#']
        ];

        $menuItems = [
            ['name' => 'Profil', 'route' => 'beranda.index'],
            ['name' => 'Layanan', 'route' => 'services.index', 'type' => 'dropdown'], // Layanan sebagai dropdown
            ['name' => 'Testimoni', 'route' => 'beranda.index'],
            ['name' => 'Hubungi Kami', 'route' => 'beranda.index'],
        ];

        $profil = ProfilDesa::first();
        // dd($profil); // This will dump and die, showing you the retrieved data


        // Kirim data ke view
        return view('beranda', compact('menuItems', 'services', 'profil'));
    }
}
