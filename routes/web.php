<?php

use App\Http\Controllers\GalleryController;
use App\Http\Controllers\JurusanController;
use Illuminate\Support\Facades\Route;

Route::get('/', function () {
    return view('home');
});
Route::get('/profile', function () {
    return view('profile');
});
Route::get('/visi-misi', function () {
    return view('visimisi');
});
Route::get('/struktur-organisasi', function () {
    return view('struktur');
});
Route::get('/prestasi', function () {
    return view('prestasi');
});
Route::get('/daftar-guru', function () {
    return view('daftarguru');
});
Route::get('/daftar-staff', function () {
    return view('daftarstaff');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/ekstra-kulikuler', function () {
    return view('eskul');
});
Route::get('/galeri-kegiatan', [GalleryController::class, 'index'])->name('gallery.index');
Route::get('/kontak', function () {
    return view('kontak');
});
Route::get('/program-studi', [JurusanController::class, 'index']);
Route::get('/program-studi/{slug}', [JurusanController::class, 'show']);