<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <div class="w-full p-4 mx-auto max-w-7xl">
        <x-atoms.cta text="Daftar Staff SMK-Al Farisi" />
        <div class="flex flex-wrap h-full gap-2">
            <a href="#StafAdministrasi" class="flex-1 p-4 bg-[#B0DCC1] font-semibold rounded-md flex items-center justify-center">
                <p class="text-center">Staf Administrasi</p>
            </a>
            <a href="#StafUsaha" class="flex-1 p-4 bg-[#B0DCC1] font-semibold rounded-md flex items-center justify-center">
                <p class="text-center">Staff Tata Usaha</p>
            </a>
            <a href="#StafPerpustakaan" class="flex-1 p-4 bg-[#B0DCC1] font-semibold rounded-md flex items-center justify-center">
                <p class="text-center">Staff Perpustakaan</p>
            </a>
        </div>

        <div class="py-4" id="StafAdministrasi">
            <h3 class="mb-2 text-2xl font-semibold">Staf Administrasi</h3>
            <x-organisms.swiper />
        </div>
        <div class="py-4" id="StafUsaha">
            <h3 class="mb-2 text-2xl font-semibold">Staff Tata Usaha</h3>
            <x-organisms.swiper />
        </div>
        <div class="py-4" id="StafPerpustakaan">
            <h3 class="mb-2 text-2xl font-semibold">Staff Perpustakaan</h3>
            <x-organisms.swiper />
        </div>

    </div>

</x-layouts.app>

