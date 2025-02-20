<?php

namespace Database\Seeders;

use App\Models\ProfilDesa;
use Illuminate\Database\Seeder;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;

class ProfilDesaSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        ProfilDesa::create([
            'sejarah_desa' => 'Bermula dari kumpulan masyarakat yang menetap, seiring berjalannya waktu pada tahun 1952, resmi sebuah desa dibentuk. Kini, desa ini telah berkembang menjadi desa yang maju dengan peran penting dalam pengelolaan sumber daya alam.',
            'visi_misi' => "Visi: Terwujudnya Desa Sungai Raya Utara Yang Aman, Cerdas, Berakhlak Mulia serta Produktif dengan Pemerintahan Desa yang Terbuka.\n\n
Misi:\n
• Mewujudkan Keamanan dan Ketertiban dalam kehidupan beragama.\n
• Meningkatkan kinerja Aparatur Pemerintah Desa sebagai bentuk pelayanan kepada Masyarakat.\n
• Mewujudkan tata kelola Pemerintahan Desa yang Transparan dan Akuntabel.\n
• Meningkatkan Pertumbuhan Ekonomi dan Pemberdayaan Masyarakat Desa.\n
• Meningkatkan Infrastruktur, Kesehatan, dan Pendidikan.",
            'fasilitas_desa' => 'Desa kami menyediakan fasilitas lengkap seperti akses pendidikan, layanan kesehatan, halte bus, tempat ibadah, dan keamanan yang didukung dengan Polsek Sungai Raya.',
            'prestasi_desa' => "• Inovasi Terbaik 2, HSS Innovation Award (HIA) 2024\n
                            • Terbaik 2, Pengelolaan Keuangan Terbaik Pada Pemilihan Serentak 2024 (KPU)\n
                            • Top 30, HSS Innovation Award (HIA) 2021 dan 2022."
        ]);
    }
}
