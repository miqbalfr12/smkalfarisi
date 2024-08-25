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
            $gallery['items'] = array_map(function($file) use ($gallery) {
                return str_replace(public_path($gallery['path']) . '/', '', $file);
            }, $files);
        }

        return view('galerikegiatan', ['galleries' => $galleries]);
    }
}