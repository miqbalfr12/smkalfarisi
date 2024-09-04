<?php

use App\Http\Controllers\EskulController;
use App\Http\Controllers\GalleryController;
use App\Http\Controllers\GalleryVideoController;
use App\Http\Controllers\HomeController;
use App\Http\Controllers\JurusanController;
use App\Http\Controllers\PrestasiController;
use Illuminate\Support\Facades\Route;

Route::get('/', [HomeController::class, 'index'])->name('home.index');
Route::get('/profil', function () {
    return view('profil');
});
Route::get('/visi-misi', function () {
    return view('visimisi');
});
Route::get('/struktur-organisasi', function () {
    return view('struktur');
});
Route::get('/prestasi', [PrestasiController::class, 'index'])->name('prestasi.index');
Route::get('/daftar-guru', function () {
    return view('daftarguru');
});
Route::get('/daftar-staff', function () {
    return view('daftarstaff');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/ekstra-kulikuler', [EskulController::class, 'index'])->name('eskul.index');
Route::get('/galeri-kegiatan', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/galeri-kegiatan-video', [GalleryVideoController::class, 'index'])->name('gallery.index');
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/program-studi', [JurusanController::class, 'index']);
Route::get('/program-studi/{slug}', [JurusanController::class, 'show']);
