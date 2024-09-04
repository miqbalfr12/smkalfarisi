<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class EskulController extends Controller
{
    public function index()
    {
        // Daftar galeri dengan nama dan path
        $eskuls = [
            [
                'nama' => 'OSIS',
                'desk' => 'OSIS adalah organisasi siswa di sekolah menengah Indonesia yang mengembangkan keterampilan organisasi, kepemimpinan, dan kreativitas siswa melalui berbagai kegiatan.',
                'path' => 'img/logo/OSIS.png',
                'href' => 'https://www.instagram.com/mkosalfarisi?igsh=aXpmeW0zaGdtYWdm&utm_source=qr',
            ],
            [
                'nama' => 'Paskibra',
                'desk' => 'Paskibra adalah kelompok siswa yang bertugas mengibarkan bendera dalam upacara, dilatih disiplin dan semangat nasionalisme.',
                'path' => 'img/logo/Paskibra.jpeg',
                'href' => 'https://www.instagram.com/passfaris?igsh=MWtreTY3dDU5ZGhvMg==',
            ],
            [
                'nama' => 'Pramuka',
                'desk' => 'Pramuka (Praja Muda Karana) adalah organisasi kepanduan yang mengajarkan keterampilan, kedisiplinan, dan nilai-nilai kebangsaan kepada anak-anak dan remaja melalui kegiatan alam dan sosial.',
                'path' => 'img/logo/Pramuka.jpeg',
                'href' => 'https://www.instagram.com/pasialfarisi?igsh=MWlua3p6bjJuZmpjdg',
            ],
            [
                'nama' => 'PMR',
                'desk' => 'PMR (Palang Merah Remaja) adalah organisasi kepemudaan di sekolah yang bergerak di bidang kemanusiaan, khususnya dalam membantu pelayanan kesehatan dan kesiapsiagaan bencana.',
                'path' => 'img/logo/PMR.jpeg',
                'href' => 'https://www.instagram.com/pmrwira_alfarisi?igsh=N3QzajBkOHNwdHhm',
            ],
            [
                'nama' => 'Tarung Derajat',
                'desk' => 'Tarung Derajat adalah seni bela diri asli Indonesia yang menggabungkan teknik pukulan, tendangan, kuncian, dan bantingan. Diciptakan oleh Achmad Dradjat, bela diri ini menekankan kekuatan fisik, mental, dan kedisiplinan.',
                'path' => 'img/logo/Tarung Derajat.jpeg',
                'href' => 'https://www.instagram.com/box_family_leles?igsh=NG9yaGswaGpmbGhn',
            ],
            [
                'nama' => 'Dangiang Alfarisi',
                'desk' => 'Seni Tari bentuk ekspresi artistik melalui gerakan tubuh yang teratur dan ritmis, biasanya diiringi musik, untuk menyampaikan emosi, cerita, atau ide.',
                'path' => 'img/logo/Dangiang Alfarisi.jpeg',
                'href' => 'https://www.instagram.com/dangiang_alfarisi?igsh=M2xnNWk5ZHF1eGlo',
            ],
            [
                'nama' => 'Paduan suara',
                'desk' => 'Paduan suara adalah kelompok penyanyi yang menyanyikan lagu secara harmonis dengan pembagian suara berbeda.',
                'path' => 'img/logo/Paduan suara.jpeg',
                'href' => 'https://www.instagram.com/padusalfarisi?igsh=MTVkbWRxZmppcHZ6MA==',
            ],
            [
                'nama' => 'Badminton',
                'desk' => 'Badminton adalah olahraga raket di mana pemain memukul shuttlecock ke area lawan untuk mendapatkan poin.',
                'path' => 'img/logo/Badminton.jpeg',
                'href' => 'https://www.instagram.com/badminton_smksalfarisileles?igsh=MXFyd3F2NHc0MjA3bw==',
            ],
            [
                'nama' => 'AEC',
                'desk' => 'Komunitas yang bertujuan meningkatkan kemampuan berbahasa Inggris anggotanya melalui berbagai aktivitas seperti diskusi, latihan berbicara, dan permainan bahasa.',
                'path' => 'img/logo/AEC.jpeg',
                'href' => 'https://www.instagram.com/alfarisienglishclub?igsh=MmFncjViaDFrcTJ4',
            ],
        ];

        foreach ($eskuls as &$eskul) {
            // Baca semua file gambar dari direktori
            $files = glob(public_path($eskul['path']) . '/*.{jpg,jpeg,png,gif}', GLOB_BRACE);

            // Ambil nama file relatif terhadap public directory
            $eskul['items'] = array_map(function ($file) use ($eskul) {
                return str_replace(public_path($eskul['path']) . '/', '', $file);
            }, $files);
        }

        return view('eskul', ['eskuls' => $eskuls]);
    }
}