<header class="text-white ">
    <div class="bg-[#0A8044]">
        <div class="flex flex-col items-center justify-between gap-4 p-4 mx-auto md:flex-row max-w-7xl">
            <div class="flex space-x-6">
                <div class="flex items-center space-x-2">
                    <x-icon.phone class="w-5 h-5" />
                    <span>(0262) 458081</span>
                </div>
                <div class="flex items-center justify-center space-x-2">
                    <x-icon.mail class="w-5 h-5" />
                    <span>smkalfarisi@gmail.com</span>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="text-white hover:text-gray-200">
                    <x-icon.facebook class="w-5 h-5" />
                </a>
                <a href="#" class="text-white hover:text-gray-200">
                    <x-icon.instagram class="w-5 h-5" />
                </a>
                <a href="#" class="text-white hover:text-gray-200">
                    <x-icon.youtube class="w-5 h-5" />
                </a>
            </div>
        </div>
    </div>
    <div class="bg-[#D0CB58]">
        <div class="flex items-center justify-between p-4 mx-auto max-w-7xl">
            <div class="flex items-center space-x-4">
                <img src="/logo.png" alt="SMK Al Farisi" class="w-12 h-12">
                <div class="text-black">
                    <h1 class="text-lg font-semibold">SMK Al Farisi</h1>
                    <p class="text-sm">Sekolah Menengah Kejuruan di Jawa Barat</p>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Navigation Menu -->
<nav class="text-white bg-[#B0DCC1]">
    <div class="flex items-center justify-between p-4 mx-auto max-w-7xl">
        <ul class="flex flex-col justify-between w-full gap-4 md:flex-row">
            <li><a href="/" >Beranda</a></li>
            <li class="relative group">
                <a href="/profile" class="flex items-center ">Tentang Kami <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
                <ul class="absolute left-0 hidden mt-2 text-black bg-white rounded-lg shadow-lg top-4 min-w-max group-hover:block">
                    <li><a href="/profile" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Profile</a></li>
                    <li><a href="/visi-misi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Visi Misi</a></li>
                    <li><a href="/struktur-organisasi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Struktur Organisasi</a></li>
                    <li><a href="/prestasi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Prestasi</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="/daftar-guru" class="flex items-center ">Guru dan Karyawan <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
                <ul class="absolute left-0 hidden mt-2 text-black bg-white rounded-lg shadow-lg top-4 min-w-max group-hover:block">
                    <li><a href="/daftar-guru#TeknikKendaraanRingan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Teknik Kendaraan Ringan</a></li>
                    <li><a href="/daftar-guru#TeknikKomputerDanJaringan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Teknik Komputer Dan Jaringan</a></li>
                    <li><a href="/daftar-guru#Akuntansi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Akuntansi</a></li>
                    <li><a href="/daftar-guru#TeknikSepedaMotor" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Teknik Sepeda Motor</a></li>
                    <li><a href="/daftar-guru#AgribisnisTanamanPanganDanHoltikultura" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Agribisnis Tanaman Pangan Dan Holtikultura</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="/daftar-staff" class="flex items-center ">Staff <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
                <ul class="absolute left-0 hidden mt-2 text-black bg-white rounded-lg shadow-lg top-4 min-w-max group-hover:block">
                    <li><a href="/daftar-staff#StafAdministrasi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Staf Administrasi</a></li>
                    <li><a href="/daftar-staff#StaffDataUsaha" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Staff Tata Usaha</a></li>
                    <li><a href="/daftar-staff#StaffPerpustakaan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Staff Perpustakaan</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="/program-studi" class="flex items-center ">Program Study <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
                <ul class="absolute left-0 hidden mt-2 text-black bg-white rounded-lg shadow-lg top-4 min-w-max group-hover:block">
                    <li><a href="/program-studi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Program Study</a></li>
                    <li><a href="/program-studi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Program Study</a></li>
                    <li><a href="/program-studi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Program Study</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="/fasilitas" class="flex items-center ">Fasilitas <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
                <ul class="absolute left-0 hidden mt-2 text-black bg-white rounded-lg shadow-lg top-4 min-w-max group-hover:block">
                    <li><a href="/fasilitas" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Fasilitas</a></li>
                    <li><a href="/fasilitas" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Fasilitas</a></li>
                    <li><a href="/fasilitas" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Fasilitas</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="/ekstra-kulikuler" class="flex items-center ">Ekstra Kulikuler <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
                <ul class="absolute left-0 hidden mt-2 text-black bg-white rounded-lg shadow-lg top-4 min-w-max group-hover:block">
                    <li><a href="/ekstra-kulikuler" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Ekstra Kulikuler</a></li>
                    <li><a href="/ekstra-kulikuler" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Ekstra Kulikuler</a></li>
                    <li><a href="/ekstra-kulikuler" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Ekstra Kulikuler</a></li>
                </ul>
            </li>
            <li class="relative group">
                <a href="/galeri-kegiatan" class="flex items-center ">Galeri <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
                <ul class="absolute left-0 hidden mt-2 text-black bg-white rounded-lg shadow-lg top-4 min-w-max group-hover:block">
                    <li><a href="/galeri-kegiatan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Galeri</a></li>
                    <li><a href="/galeri-kegiatan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Galeri</a></li>
                    <li><a href="/galeri-kegiatan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Galeri</a></li>
                </ul>
            </li>
            <li><a href="/kontak" >Kontak</a></li>
        </ul>
    </div>
</nav>
