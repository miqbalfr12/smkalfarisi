<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class HomeController extends Controller
{
    public function index()
    {
        // Daftar galeri dengan nama dan path
        $berita = [
            [
                'bold' => 'Antusiasme Tinggi! Pelaksanaan Kegiatan Tes Masuk SMKS Al Farisi Gelombang 1',
                'berita' => ' diikuti dengan semangat oleh total 490 siswa SMP/MTs dari berbagai sekolah, yang berkompetisi untuk meraih kesempatan bergabung pada foto ajaran baru 2024/2025. Kegiatan ini berlangsung pada hari Rabu, 03 April 2024, dengan suasana penuh antusiasme dan harapan tinggi dari para peserta.',
                'foto' => '/img/berita/1.jpeg',
            ],
            [
                'bold' => 'Pelaksanaan Masa Pengenalan Lingkungan Sekolah (MPLS) SMKS Al Farisi 2024',
                'berita' => ' diikuti dengan semangat oleh seluruh siswa baru yang siap menempuh perjalanan pendidikan mereka. Kegiatan ini berlangsung pada hari Rabu, 03 Juli 2024, dengan suasana penuh semangat dan harapan tinggi dari para peserta untuk meraih masa depan gemilang di tahun ajaran baru 2024/2025.',
                'foto' => '/img/berita/2.jpeg',
            ],
            [
                'bold' => 'Pelaksanaan Kajian Islam Rabuan (KASMARAN) di SMKS Al Farisi',
                'berita' => ' berlangsung dengan penuh semangat Kegiatan yang diikuti oleh banyak peserta ini membahas Kitab Bulughul Maram Bab Adab bersama Ust. Shidiq Amin, S.Hum. Suasana penuh antusiasme dan harapan tinggi terlihat dari peserta yang hadir untuk memperdalam ilmu dan meningkatkan adab dalam kehidupan sehari-hari.',
                'foto' => '/img/berita/3.jpeg',
            ]
        ];

        return view('home', ['berita' => $berita]);
    }
}
