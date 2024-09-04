<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PrestasiController extends Controller
{
    public function index()
    {
        // Daftar galeri dengan nama dan path
        $prestasi = [
            [
                'prestasi' => 'Juara 1 Badminton tunggal putri  olimpiade olahraga siswa nasional tinggkat kabupaten.',
                'tahun' => '2024',
            ],
            [
                'prestasi' => 'Juara 2 Badminton tunggal putra olimpiade olahraga siswa nasional tinggkat kabupaten.',
                'tahun' => '2024',
            ],
            [
                'prestasi' => 'Juara 3 Pencak silat putri perwakilan kabupaten garut pada POPWILDA WIL.IV jawa barat 2024.',
                'tahun' => '2024',
            ],
            [
                'prestasi' => 'Terbaik 2 duta genre Kab.Garut pada ajang pemilihan Duta GenRe Favorit Sosial Media Tahun 2024',
                'tahun' => '2024',
            ],
            [
                'prestasi' => 'Juara 1 Tim bola voly putri pada kejuaraan FKKSMKS CUP 2021',
                'tahun' => '2021',
            ],
            [
                'prestasi' => 'Juara 3 Cabor Tenis Meja PORKAB Garut 2021',
                'tahun' => '2021',
            ],
            [
                'prestasi' => 'Juara 1 Volly Putri tingkat Kabupaten Garut 2021',
                'tahun' => '2021',
            ],
            [
                'prestasi' => 'Juara 1 volly putri tingkat Kabupaten Garut 2022',
                'tahun' => '2022',
            ],
            [
                'prestasi' => 'Juara 1 Silat Kabupaten Garut 2023',
                'tahun' => '2023',
            ],
            [
                'prestasi' => 'Juara Favorit silat Tingkat jawa barat',
                'tahun' => '2023',
            ],
            [
                'prestasi' => 'Juara 2 Akuntansi tingkat jawa barat 2022',
                'tahun' => '2022',
            ],
            [
                'prestasi' => 'Juara 3 Akutansi tingkat jawa barat 2022',
                'tahun' => '2022',
            ],
            [
                'prestasi' => 'Juara 2 Akuntansi tingkat jawa barat 2023',
                'tahun' => '2023',
            ],
            [
                'prestasi' => 'Juara 3 Akuntansi tingkat jawa barat 2023',
                'tahun' => '2023',
            ],
            [
                'prestasi' => 'Juara 1 O2sn Badminton putri 2024 tingkat Kabupaten',
                'tahun' => '2024',
            ],
            [
                'prestasi' => 'Juara 2 02sn Badminton Putra 2024 tingkat Kabupaten Garut',
                'tahun' => '2024',
            ],
        ];

        return view('prestasi', ['prestasi' => $prestasi]);
    }
}
