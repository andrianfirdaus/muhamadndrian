<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class MahasiswaController extends Controller
{
    public function index()
    {
        // Data dikirim ke view menggunakan array
        $mahasiswa = [
            'nama'   => 'Muhamad andrian firdaus',
            'nim'    => '251011701035',
            'prodi'  => 'Sistem Informasi',
            'email'  => 'muhamadndrian354@gmail.com',
            'kampus' => 'Universitas Pamulang',
            'status' => 'aktif'
        ];

        return view('page.profile', compact('mahasiswa'));
    }
}