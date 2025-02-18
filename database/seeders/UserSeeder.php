<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\Hash;
use App\Models\User;

class UserSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Super Admin
        User::updateOrCreate([
            'email' => 'superadmin@bumdessru.com',
        ], [
            'nama' => 'Super Admin BUMDes Sungai Raya Utara',
            'email' => 'superadmin@bumdessru.com',
            'password' => Hash::make('superadmin@bumdessru.com'),
            'role' => 'superadmin', // Pastikan ada kolom 'role' di tabel users
        ]);

        // Admin
        User::updateOrCreate([
            'email' => 'admin@bumdessru.com',
        ], [
            'nama' => 'BUMDes Sungai Raya Utara',
            'email' => 'admin@bumdessru.com',
            'password' => Hash::make('admin@bumdessru.com'),
            'role' => 'admin',
        ]);
    }
}
