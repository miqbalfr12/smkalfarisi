<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JurusanController extends Controller
{
    public function index()
    {
        // Array JSON yang berisi beberapa objek
        $data = [
            [
                'nama' => 'Akuntansi dan Keuangan Lembaga',
                'slug' => 'akuntansi-dan-keuangan-lembaga',
                'path' => '/img/AKKL/6.jpg',
                'foto' => asset('img/AKKL/6.jpg')
            ],
            [
                'nama' => 'Teknik Sepedah Motor',
                'slug' => 'teknik-sepedah-motor',
                'path' => '/img/TSM/7.jpg',
                'foto' => asset('img/TSM/7.jpg')
            ],
            [
                'nama' => 'Teknik Komputer dan Jaringan',
                'slug' => 'teknik-komputer-dan-jaringan',
                'path' => '/img/TKJ/1.jpg',
                'foto' => asset('img/TKJ/1.jpg')
            ],
            [
                'nama' => 'Agribisnis Tanaman Pangan Holikultura',
                'slug' => 'agribisnis-tanaman-pangan-holikultura',
                'path' => '/img/ATPHH/1.jpg',
                'foto' => asset('img/ATPHH/9.jpg')
            ],
            [
                'nama' => 'Teknik Kendaraan Ringan',
                'slug' => 'teknik-kendaraan-ringan',
                'path' => '/img/TKR/1.jpg',
                'foto' => asset('img/TKR/3.jpeg')
            ],
            [
                'nama' => 'Administrasi Perkantoran',
                'slug' => 'administrasi-perkantoran',
                'path' => '/img/PERKANTORAN/2.jpeg',
                'foto' => asset('img/PERKANTORAN/1.jpeg')
            ]
        ];

        return view('programstudi', ['jurusan' => $data]);
    }

    public function show($slug)
    {
        // Data untuk program studi berdasarkan slug
        $data = [
            'akuntansi-dan-keuangan-lembaga' => [
                'nama' => 'Akuntansi dan Keuangan Lembaga',
                'path' => '/img/AKKL/6.jpg',
                'foto' => asset('img/AKKL/6.jpg'),
                'gambar' => [
                    asset('img/AKKL/1.jpg'),
                    asset('img/AKKL/2.jpg'),
                    asset('img/AKKL/3.jpg'),
                    asset('img/AKKL/4.jpg'),
                ],
                'logo' => asset('img/AK.png'),
                'visi' => 'Menjadi program studi unggulan dalam bidang akuntansi yang menghasilkan lulusan profesional, kompeten, dan berintegritas tinggi, serta mampu bersaing di tingkat nasional dan internasional.',
                'misi' => [
                    'Menghasilkan lulusan berkualitas dengan keahlian akuntansi yang relevan dan siap kerja.',
                    'Mengembangkan penelitian inovatif di bidang akuntansi yang bermanfaat bagi masyarakat.',
                    'Menyelenggarakan pengabdian masyarakat berbasis keilmuan akuntansi.',
                    'Membangun kerjasama strategis dengan berbagai lembaga nasional dan internasional.',
                    'Menciptakan lingkungan akademik yang etis dan kondusif untuk pembelajaran.'
                ],
                'kompetensi' => [
                    'Pemahaman Dasar Akuntansi',
                    'Laporan Keuangan',
                    'Audit dan Pengendalian Internal',
                    'Perpajakan',
                    'Akuntansi Manajemen',
                    'Sistem Informasi Akuntansi',
                    'Etika dan Hukum Bisnis',
                    'Keuangan Korporat',
                    'Akuntansi Sektor Publik',
                    'Komunikasi dan Penyajian Data'
                ],
                'materi' => [
                    'Pengantar Akuntansi' => 'Dasar-dasar akuntansi dan siklus akuntansi.',
                    'Akuntansi Keuangan' => 'Pencatatan transaksi dan penyusunan laporan keuangan.',
                    'Akuntansi Manajemen' => 'Pengendalian biaya dan pengambilan keputusan manajerial.',
                    'Akuntansi Biaya' => 'Perhitungan dan analisis biaya produksi.',
                    'Audit' => 'Prosedur dan standar audit.',
                    'Perpajakan' => 'Perhitungan pajak sesuai peraturan.',
                    'Sistem Informasi Akuntansi' => 'Penggunaan teknologi dalam akuntansi.',
                    'Hukum Bisnis dan Etika Profesi' => 'Aturan hukum dan etika dalam akuntansi.',
                    'Keuangan Korporat' => 'Manajemen modal kerja dan investasi.',
                    'Akuntansi Sektor Publik' => 'Pengelolaan keuangan di sektor publik.'
                ]
            ],
            'teknik-sepedah-motor' => [
                'nama' => 'Teknik Sepedah Motor',
                'path' => '/img/TSM/7.jpg',
                'foto' => asset('img/TSM/7.jpg'),
                'gambar' => [
                    asset('img/TSM/1.jpg'),
                    asset('img/TSM/2.jpg'),
                    asset('img/TSM/3.jpg'),
                    asset('img/TSM/4.jpg'),
                ],
                'logo' => asset('img/TSM.png'),
                'visi' => 'Menjadi program studi terkemuka yang menghasilkan lulusan profesional, inovatif, dan kompeten dalam bidang teknik sepeda motor, serta berdaya saing di tingkat nasional dan internasional.',
                'misi' => [
                    'Menghasilkan lulusan kompeten di bidang teknik sepeda motor.',
                    'Mengembangkan penelitian inovatif yang relevan dengan industri otomotif.',
                    'Melaksanakan pengabdian masyarakat melalui keahlian teknik sepeda motor.',
                    'Membangun kerjasama strategis dengan industri otomotif.',
                    'Menciptakan lingkungan belajar yang beretika dan profesional.'
                ],
                'kompetensi' =>  [
                    'Perawatan dan Perbaikan Mesin',
                    'Sistem Kelistrikan Sepeda Motor',
                    'Teknologi Bahan Bakar dan Sistem Injeksi',
                    'Transmisi dan Sistem Penggerak',
                    'Sistem Rem dan Suspensi',
                    'Diagnostik dan Pemecahan Masalah',
                    'Teknologi dan Modifikasi Sepeda Motor',
                    'Keselamatan Kerja dan Lingkungan',
                    'Penggunaan Alat dan Peralatan Bengkel',
                    'Komunikasi dan Pelayanan Pelanggan'
                ],
                'materi' => [
                    'Dasar-dasar Teknik Sepeda Motor' => 'Konsep dasar dan prinsip kerja sepeda motor.',
                    'Perawatan dan Perbaikan Mesin Sepeda Motor' => 'Teknik perawatan dan perbaikan mesin.',
                    'Sistem Kelistrikan dan Elektronika' => 'Sistem kelistrikan dan komponen elektronik sepeda motor.',
                    'Teknologi Bahan Bakar dan Sistem Injeksi' => 'Sistem bahan bakar dan injeksi.',
                    'Transmisi dan Sistem Penggerak' => 'Transmisi dan sistem penggerak sepeda motor.',
                    'Sistem Rem dan Suspensi' => 'Perawatan dan perbaikan sistem rem dan suspensi.',
                    'Diagnostik dan Pemecahan Masalah' => 'Teknik diagnostik dan solusi masalah teknis.',
                    'Teknologi Modifikasi Sepeda Motor' => 'Modifikasi dan upgrade sepeda motor.',
                    'Keselamatan Kerja dan Lingkungan' => 'Prinsip keselamatan dan ramah lingkungan.',
                    'Penggunaan Alat dan Peralatan Bengkel' => 'Teknik menggunakan alat dan peralatan bengkel.'
                ]
            ],
            'teknik-komputer-dan-jaringan' => [
                'nama' => 'Teknik Komputer dan Jaringan',
                'path' => '/img/TKJ/1.jpg',
                'foto' => asset('img/TKJ/1.jpg'),
                'gambar' => [
                    asset('img/TKJ/1.jpg'),
                    asset('img/TKJ/2.jpg'),
                    asset('img/TKJ/3.jpg'),
                    asset('img/TKJ/4.jpg'),
                ],
                'logo' => asset('img/TKJ.png'),
                'visi' => 'Menjadi program studi terkemuka yang menghasilkan lulusan profesional, kompeten, dan inovatif dalam bidang teknik komputer dan jaringan, serta mampu beradaptasi dengan perkembangan teknologi global.',
                'misi' => [
                    'Menghasilkan lulusan kompeten di bidang teknik komputer dan jaringan.',
                    'Mengembangkan penelitian yang mendukung industri teknologi.',
                    'Melaksanakan pengabdian masyarakat melalui teknologi komputer dan jaringan.',
                    'Membangun kerjasama strategis dengan industri.',
                    'Menciptakan lingkungan belajar yang kondusif dan etis.'
                ],
                'kompetensi' => [
                    'Administrasi Jaringan',
                    'Konfigurasi dan Pengelolaan Server',
                    'Perancangan dan Implementasi Jaringan',
                    'Keamanan Jaringan',
                    'Pemrograman Jaringan',
                    'Manajemen Perangkat Keras Komputer',
                    'Pemeliharaan dan Perbaikan Jaringan',
                    'Virtualisasi dan Cloud Computing',
                    'Pengelolaan Sistem Operasi Jaringan',
                    'Troubleshooting Jaringan'
                ],
                'materi' => [
                    'Dasar-dasar Komputer dan Jaringan' => 'Pengenalan perangkat keras, perangkat lunak, dan konsep dasar jaringan.',
                    'Perancangan dan Topologi Jaringan' => 'Desain jaringan dan berbagai topologi yang digunakan.',
                    'Administrasi dan Manajemen Jaringan' => 'Pengelolaan dan konfigurasi jaringan serta manajemen perangkat.',
                    'Sistem Operasi Jaringan' => 'Instalasi dan pengelolaan sistem operasi yang berbasis jaringan.',
                    'Keamanan Jaringan dan Cybersecurity' => 'Teknik melindungi jaringan dari ancaman dan serangan.',
                    'Pemrograman Jaringan' => 'Pengembangan aplikasi yang berhubungan dengan jaringan.',
                    'Konfigurasi Router dan Switch' => 'Pengaturan dan pengelolaan router dan switch dalam jaringan.',
                    'Virtualisasi dan Cloud Computing' => 'Teknologi virtualisasi dan layanan cloud untuk manajemen sumber daya.',
                    'Troubleshooting dan Pemeliharaan Jaringan' => 'Teknik mendeteksi dan memperbaiki masalah jaringan.',
                    'Teknologi Wireless dan Mobile Networking' => 'Jaringan nirkabel dan teknologi komunikasi mobile.'
                ]
            ],
            'agribisnis-tanaman-pangan-holikultura' => [
                'nama' => 'Agribisnis Tanaman Pangan Holikultura',
                'path' => '/img/ATPHH/1.jpg',
                'foto' => asset('img/ATPHH/9.jpg'),
                'gambar' => [
                    asset('img/ATPHH/1.jpg'),
                    asset('img/ATPHH/2.jpg'),
                    asset('img/ATPHH/3.jpg'),
                    asset('img/ATPHH/4.jpg'),
                ],
                'logo' => asset('img/ATPH.png'),
                'visi' => 'Menjadi program studi unggulan dalam bidang agribisnis tanaman pangan dan hortikultura yang menghasilkan lulusan inovatif, profesional, dan berdaya saing global dalam pengelolaan dan pengembangan sektor pertanian.',
                'misi' => [
                    'Menghasilkan lulusan berkualitas di agribisnis tanaman pangan dan hortikultura.',
                    'Mengembangkan penelitian yang meningkatkan produktivitas pertanian.',
                    'Melaksanakan pengabdian masyarakat berbasis teknologi pertanian.',
                    'Membangun kemitraan dengan industri dan lembaga terkait.',
                    'Menciptakan lingkungan belajar yang inovatif dan profesional.'
                ],
                'kompetensi' => [
                    'Manajemen Agribisnis',
                    'Teknologi Produksi Tanaman',
                    'Pengendalian Hama dan Penyakit',
                    'Penyuluhan Pertanian',
                    'Sistem Pertanian Berkelanjutan',
                    'Ekonomi Pertanian',
                    'Pengolahan Hasil Pertanian',
                    'Kebijakan Pertanian',
                    'Penerapan Teknologi Pertanian',
                    'Manajemen Risiko Pertanian'
                ],
                'materi' => [
                    'Pengantar Agribisnis' => 'Konsep dasar agribisnis.',
                    'Teknologi Produksi Tanaman' => 'Teknik budidaya tanaman.',
                    'Pengendalian Hama dan Penyakit' => 'Metode pengelolaan hama dan penyakit.',
                    'Manajemen Usaha Pertanian' => 'Pengelolaan usaha pertanian.',
                    'Ekonomi Pertanian' => 'Analisis ekonomi pertanian.',
                    'Sistem Pertanian Berkelanjutan' => 'Praktik pertanian ramah lingkungan.',
                    'Penyuluhan Pertanian' => 'Edukasi dan pelatihan untuk petani.',
                    'Pengolahan Hasil Pertanian' => 'Proses pengolahan hasil pertanian.',
                    'Kebijakan Pertanian' => 'Kebijakan dan regulasi pertanian.',
                    'Penerapan Teknologi Pertanian' => 'Teknologi dalam produksi pertanian.'
                ]
            ],
            'teknik-kendaraan-ringan' => [
                'nama' => 'Teknik Kendaraan Ringan',
                'path' => '/img/TKR/1.jpg',
                'foto' => asset('img/TKR/3.jpeg'),
                'gambar' => [
                    asset('img/TKR/1.jpeg'),
                    asset('img/TKR/2.jpeg'),
                    asset('img/TKR/4.jpeg'),
                    asset('img/TKR/5.jpeg'),
                ],
                'logo' => asset('img/TKR.png'),
                'visi' => 'Menjadi program studi unggulan dalam bidang agribisnis tanaman pangan dan hortikultura yang menghasilkan lulusan inovatif, profesional, dan berdaya saing global dalam pengelolaan dan pengembangan sektor pertanian.',
                'misi' => [
                    'Menghasilkan lulusan berkualitas di agribisnis tanaman pangan dan hortikultura.',
                    'Mengembangkan penelitian yang meningkatkan produktivitas pertanian.',
                    'Melaksanakan pengabdian masyarakat berbasis teknologi pertanian.',
                    'Membangun kemitraan dengan industri dan lembaga terkait.',
                    'Menciptakan lingkungan belajar yang inovatif dan profesional.'
                ],
                'kompetensi' => [
                    'Manajemen Agribisnis',
                    'Teknologi Produksi Tanaman',
                    'Pengendalian Hama dan Penyakit',
                    'Penyuluhan Pertanian',
                    'Sistem Pertanian Berkelanjutan',
                    'Ekonomi Pertanian',
                    'Pengolahan Hasil Pertanian',
                    'Kebijakan Pertanian',
                    'Penerapan Teknologi Pertanian',
                    'Manajemen Risiko Pertanian'
                ],
                'materi' => [
                    'Pengantar Agribisnis' => 'Konsep dasar agribisnis.',
                    'Teknologi Produksi Tanaman' => 'Teknik budidaya tanaman.',
                    'Pengendalian Hama dan Penyakit' => 'Metode pengelolaan hama dan penyakit.',
                    'Manajemen Usaha Pertanian' => 'Pengelolaan usaha pertanian.',
                    'Ekonomi Pertanian' => 'Analisis ekonomi pertanian.',
                    'Sistem Pertanian Berkelanjutan' => 'Praktik pertanian ramah lingkungan.',
                    'Penyuluhan Pertanian' => 'Edukasi dan pelatihan untuk petani.',
                    'Pengolahan Hasil Pertanian' => 'Proses pengolahan hasil pertanian.',
                    'Kebijakan Pertanian' => 'Kebijakan dan regulasi pertanian.',
                    'Penerapan Teknologi Pertanian' => 'Teknologi dalam produksi pertanian.'
                ]
            ],
            'administrasi-perkantoran' => [
                'nama' => 'Administrasi Perkantoran',
                'path' => '/img/PERKANTORAN/2.jpg',
                'foto' => asset('img/PERKANTORAN/1.jpeg'),
                'gambar' => [
                    asset('img/PERKANTORAN/2.png'),
                    asset('img/PERKANTORAN/3.jpeg'),
                    asset('img/PERKANTORAN/4.jpeg'),
                    asset('img/PERKANTORAN/5.jpeg'),
                ],
                'logo' => asset('img/AP.png'),
                'visi' => 'Menjadi program studi unggulan yang menghasilkan lulusan profesional dan kompeten dalam administrasi perkantoran, dengan kemampuan adaptasi terhadap perkembangan teknologi dan kebutuhan dunia kerja.',
                'misi' => [
                    'Menghasilkan lulusan kompeten di administrasi perkantoran.',
                    'Mengembangkan kurikulum sesuai kebutuhan industri.',
                    'Meningkatkan keterampilan melalui praktek kerja.',
                    'Menjalin kemitraan dengan industri terkait.',
                    'Menciptakan lingkungan belajar yang mendukung etika profesional.'
                ],
                'kompetensi' => [
                    'Manajemen Perkantoran',
                    'Pengelolaan Dokumen dan Arsip',
                    'Administrasi Keuangan',
                    'Komunikasi Bisnis',
                    'Penggunaan Teknologi Perkantoran',
                    'Penjadwalan dan Pengorganisasian',
                    'Layanan Pelanggan',
                    'Penyusunan Laporan',
                    'Keterampilan Presentasi',
                    'Etika dan Profesionalisme di Tempat Kerja'
                ],
                'materi' => [
                    'Dasar-dasar Administrasi Perkantoran' => 'Konsep dasar dan fungsi administrasi perkantoran.',
                    'Pengelolaan Dokumen dan Arsip' => 'Teknik pengelolaan dan penyimpanan dokumen.',
                    'Administrasi Keuangan' => 'Pengelolaan keuangan dan akuntansi dasar.',
                    'Komunikasi Bisnis' => 'Keterampilan komunikasi dalam lingkungan bisnis.',
                    'Penggunaan Teknologi Perkantoran' => 'Aplikasi perangkat lunak perkantoran dan teknologi terbaru.',
                    'Penjadwalan dan Pengorganisasian' => 'Teknik pengaturan jadwal dan manajemen waktu.',
                    'Layanan Pelanggan' => 'Keterampilan dalam memberikan layanan pelanggan yang efektif.',
                    'Penyusunan Laporan' => 'Teknik penyusunan dan penyampaian laporan.',
                    'Keterampilan Presentasi' => 'Teknik dan alat untuk presentasi yang efektif.',
                    'Etika dan Profesionalisme' => 'Prinsip etika dan standar profesional di tempat kerja.'
                ]
            ]
        ];


        // Mencari data berdasarkan slug
        $jurusan = $data[$slug] ?? null;

        // Menampilkan view dengan data yang ditemukan
        return view('prodi', ['jurusan' => $jurusan]);
    }
}