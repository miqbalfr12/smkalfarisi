<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class GalleryVideoController extends Controller
{
    public function index()
    {
        // Daftar galeri dengan nama dan path
        $galleries = [
            [
                'link' => 'https://www.youtube.com/embed/qTAr4i4zwXg?si=X_X5zziKNfYoVBZN&autoplay=1',
            ],
            [
                'link' => 'https://www.youtube.com/embed/qTAr4i4zwXg?si=X_X5zziKNfYoVBZN&autoplay=1',
            ],
        ];

        return view('galerikegiatanvideo', ['galleries' => $galleries]);
    }
}