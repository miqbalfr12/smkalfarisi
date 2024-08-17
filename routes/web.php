<?php

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
Route::get('/program-studi', function () {
    return view('programstudi');
});
Route::get('/fasilitas', function () {
    return view('fasilitas');
});
Route::get('/ekstra-kulikuler', function () {
    return view('eskul');
});
Route::get('/galeri-kegiatan', function () {
    return view('galerikegiatan');
});
Route::get('/kontak', function () {
    return view('kontak');
});
