<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use App\Models\Project;

class ProjectSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        $projects = [
            [
                'title' => 'Sistem Informasi Akademik (SIAKAD)',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data mahasiswa, jadwal kuliah, nilai perkuliahan, dosen, dan mata kuliah.',
                'teknologi' => 'Laravel & Bootstrap',
                'image' => 'project1.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'E-commerce SEO Optimization',
                'description' => 'Aplikasi optimalisasi struktur heading dan indexing halaman web toko online untuk meningkatkan performa di mesin pencari.',
                'teknologi' => 'PHP & Google Search Console',
                'image' => 'project2.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Sistem Pengajian Online',
                'description' => 'Aplikasi berbasis web untuk pengelolaan data jamaah dan jadwal kegiatan kajian Islam secara online.',
                'teknologi' => 'Laravel & Tailwind CSS',
                'image' => 'project3.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Aplikasi Point of Sale (POS) Kasir',
                'description' => 'Sistem kasir toko ritel untuk manajemen produk, transaksi penjualan, dan pencatatan laporan keuangan harian.',
                'teknologi' => 'Vue.js & Laravel REST API',
                'image' => 'project4.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Company Profile PT Maju Mundur',
                'description' => 'Website profil perusahaan modern dengan fitur manajemen portofolio, layanan, dan formulir kontak interaktif.',
                'teknologi' => 'HTML, CSS, JavaScript & Bootstrap',
                'image' => 'project5.jpg',
                'status' => 'selesai',
            ],
            [
                'title' => 'Sistem Manajemen Inventaris Gudang',
                'description' => 'Aplikasi internal untuk melacak keluar masuk barang, stok opname, dan notifikasi otomatis stok minimum.',
                'teknologi' => 'Laravel & MySQL',
                'image' => 'project6.jpg',
                'status' => 'selesai',
            ],
        ];

        foreach ($projects as $project) {
            Project::create($project);
        }
    }
}