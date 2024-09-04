<ul class="flex flex-col justify-between w-full gap-4 lg:flex-row">
    <li><a href="/" >Beranda</a></li>
    <li class="relative group">
        <a href="/profile" class="items-center hidden lg:flex">Tentang Kami
            <x-icon.dropdown class="w-4 h-4 ml-4"/>
        </a>
        <p class="flex items-center cursor-pointer lg:hidden">Tentang Kami
            <x-icon.dropdown class="w-4 h-4 ml-4"/>
        </p>
        <ul class="left-0 z-10 max-h-0 mt-2 text-black transition-[max-height] duration-500 ease-in-out bg-white rounded-lg shadow-lg lg:absolute top-4 min-w-max group-hover:max-h-[300px] overflow-hidden">
            <li><a href="/profil" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Profil</a></li>
            <li><a href="/visi-misi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Visi Misi</a></li>
            <li><a href="/struktur-organisasi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Struktur Organisasi</a></li>
            <li><a href="/prestasi" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Prestasi</a></li>
        </ul>
    </li>

    <li><a href="/daftar-guru" >Daftar Guru</a></li>
    <li class="relative group">
        <a href="/daftar-staff" class="items-center hidden lg:flex ">Staff <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
        <p class="flex items-center cursor-pointer lg:hidden">Staff
            <x-icon.dropdown class="w-4 h-4 ml-4"/>
        </p>
        <ul class="left-0 z-10 max-h-0 mt-2 text-black transition-[max-height] duration-500 ease-in-out bg-white rounded-lg shadow-lg lg:absolute top-4 min-w-max group-hover:max-h-[300px] overflow-hidden">
            <li><a href="/daftar-staff#StaffDataUsaha" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Staff Tata Usaha</a></li>
            <li><a href="/daftar-staff#StaffPerpustakaan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Staff Perpustakaan</a></li>
        </ul>
    </li>
    <li class="relative group">
        <a href="/program-studi" class="items-center hidden lg:flex ">Program Studi <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
        <p class="flex items-center cursor-pointer lg:hidden">Program Studi
            <x-icon.dropdown class="w-4 h-4 ml-4"/>
        </p>
        <ul class="left-0 z-10 max-h-0 mt-2 text-black transition-[max-height] duration-500 ease-in-out bg-white rounded-lg shadow-lg lg:absolute top-4 min-w-max group-hover:max-h-[300px] overflow-hidden">
            <li><a href="/program-studi/akuntansi-dan-keuangan-lembaga" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Akuntansi dan Keuangan Lembaga</a></li>
            <li><a href="/program-studi/teknik-sepedah-motor" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Teknik Sepedah Motor</a></li>
            <li><a href="/program-studi/teknik-komputer-dan-jaringan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Teknik Komputer dan Jaringan</a></li>
            <li><a href="/program-studi/agribisnis-tanaman-pangan-holikultura" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Agribisnis Tanaman Pangan Holikultura</a></li>
            <li><a href="/program-studi/teknik-kendaraan-ringan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Teknik Kendaraan Ringan</a></li>
            <li><a href="/program-studi/administrasi-perkantoran" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Administrasi Perkantoran</a></li>
        </ul>
    </li>
    <li><a href="/fasilitas" >Fasilitas</a></li>
    <li><a href="/ekstra-kulikuler">Ekstra Kulikuler</a></li>
    <li class="relative group">
        <a href="/galeri-kegiatan" class="items-center hidden lg:flex ">Galeri <x-icon.dropdown class="w-4 h-4 ml-4"/></a>
        <p class="flex items-center cursor-pointer lg:hidden">Galeri
            <x-icon.dropdown class="w-4 h-4 ml-4"/>
        </p>
        <ul class="left-0 z-10 max-h-0 mt-2 text-black transition-[max-height] duration-500 ease-in-out bg-white rounded-lg shadow-lg lg:absolute top-4 min-w-max group-hover:max-h-[300px] overflow-hidden">
            <li><a href="/galeri-kegiatan" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Poto</a></li>
            <li><a href="/galeri-kegiatan-video" class="block px-4 py-2 rounded-lg hover:bg-gray-200">Video</a></li>
        </ul>
    </li>
    <li><a href="/kontak" >Kontak</a></li>
</ul>
