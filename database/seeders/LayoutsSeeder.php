<?php

namespace Database\Seeders;

use Illuminate\Database\Seeder;
use App\Models\Setting;

class SettingSeeder extends Seeder
{
    public function run()
    {
        Setting::insert([
            [
                'key' => 'sejarah_desa',
                'value' => 'Bermula dari kumpulan masyarakat yang menetap, seiring berjalannya waktu pada tahun 1952, resmi sebuah desa dibentuk. Kini, desa ini telah berkembang menjadi desa yang maju dengan peran penting dalam pengelolaan sumber daya alam.'
            ],
            [
                'key' => 'visi_misi',
                'value' => '<strong>Visi:</strong> Terwujudnya Desa Sungai Raya Utara Yang Aman, Cerdas, Berakhlak Mulia serta Produktif dengan Pemerintahan Desa yang Terbuka.<br><br>
                            <strong>Misi:</strong><br>
                            <ul>
                                <li>Mewujudkan Keamanan dan Ketertiban dalam kehidupan beragama di Desa Sungai Raya Utara.</li>
                                <li>Meningkatkan kinerja Aparatur Pemerintah Desa sebagai bentuk pelayanan kepada Masyarakat di Desa.</li>
                                <li>Mewujudkan tata kelola Pemerintahan Desa yang Terpercaya, Efektif, Bersih, Transparan, dan Akuntabel sebagai tanggung jawab terhadap Masyarakat Desa.</li>
                                <li>Meningkatkan Pertumbuhan Ekonomi Desa.</li>
                                <li>Meningkatkan Kualitas Sumber Daya Manusia.</li>
                                <li>Meningkatkan Pembangunan Infrastruktur Desa dari Segi Fisik, ekonomi, pendidikan, sosial budaya, dan kesehatan.</li>
                                <li>Meningkatkan Pemberdayaan Masyarakat Desa.</li>
                                <li>Meningkatkan Pembinaan Masyarakat Desa.</li>
                            </ul>'
            ],
            [
                'key' => 'fasilitas_desa',
                'value' => 'Desa kami menyediakan fasilitas lengkap untuk mendukung kesejahteraan warga, seperti akses pendidikan, layanan kesehatan, halte bus, tempat ibadah, dan keamanan yang didukung dengan Polsek Sungai Raya.'
            ],
            [
                'key' => 'prestasi_desa',
                'value' => 'Desa kami telah meraih berbagai penghargaan seperti:<br>
                            <ul>
                                <li>Inovasi Terbaik 2, HSS Innovation Award (HIA) 2024</li>
                                <li>Terbaik 2, Pengelolaan Keuangan Terbaik Pada Pemilihan Serentak 2024 (KPU)</li>
                                <li>Top 30, HSS Innovation Award (HIA) 2021 dan 2022.</li>
                            </ul>'
            ],
            [
                'key' => 'lokasi_desa',
                'value' => '<a href="https://maps.app.goo.gl/6QcAhRHxBJJ7LPuy7" target="_blank"
                            class="rounded-full border border-weserve-beige px-4 py-2 font-semibold hover:bg-weserve-beige-gradient hover:text-white">
                            Lokasi Desa
                            </a>'
            ]
        ]);
    }
}
