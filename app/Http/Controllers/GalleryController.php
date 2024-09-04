<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryController extends Controller
{
    public function index()
    {
        // Daftar galeri dengan nama dan path
        $galleries = [
            [
                'nama' => 'Kegiatan Test Masuk SMK-Al Farisi',
                'path' => 'img/galeri/Kegiatan Test Masuk SMK-Al Farisi/',
            ],
            [
                'nama' => 'Kegiatan Masa Pengenalan lingkungan Sekolah',
                'path' => 'img/galeri/Kegiatan Masa Pengenalan lingkungan Sekolah/',
            ],
            [
                'nama' => 'Kegiatan Perlombaan Olahraga Tahunan',
                'path' => 'img/galeri/Kegiatan Perlombaan Olahraga Tahunan/',
            ],
            [
                'nama' => 'Kegiatan Liburan Guru SMK Al Farisi',
                'path' => 'img/galeri/Kegiatan Liburan Guru SMK Al Farisi/',
            ],
            [
                'nama' => 'Kegiatan Pelantikan Anggota Paskibra',
                'path' => 'img/galeri/Kegiatan Pelantikan Anggota Paskibra/',
            ],
            [
                'nama' => 'Kegiatan Organisasi osis',
                'path' => 'img/galeri/Kegiatan Organisasi osis/',
            ],
            [
                'nama' => 'Kegiatan Organisasi Pramuka',
                'path' => 'img/galeri/Kegiatan Organisasi Pramuka/',
            ],
            [
                'nama' => 'Kegiatan Eskul PMR',
                'path' => 'img/galeri/Kegiatan Eskul PMR/',
            ],
            [
                'nama' => 'Kegiatan Eskul Seni Tari',
                'path' => 'img/galeri/Kegiatan Eskul Seni Tari/',
            ],
            [
                'nama' => 'AKKL',
                'path' => 'img/AKKL/',
            ],
            [
                'nama' => 'ATPHH',
                'path' => 'img/ATPHH/',
            ],
            [
                'nama' => 'PERKANTORAN',
                'path' => 'img/PERKANTORAN/',
            ],
            [
                'nama' => 'TSM',
                'path' => 'img/TSM/',
            ],
            [
                'nama' => 'TKJ',
                'path' => 'img/TKJ/',
            ],
        ];

        foreach ($galleries as &$gallery) {
            // Baca semua file gambar dari direktori
            $files = glob(public_path($gallery['path']) . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

            // Ambil nama file relatif terhadap public directory
            $gallery['items'] = array_map(function ($file) use ($gallery) {
                return str_replace(public_path($gallery['path']) . '/', '', $file);
            }, $files);
        }

        return view('galerikegiatan', ['galleries' => $galleries]);
    }
}