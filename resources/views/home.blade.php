<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <div class="bg-[url('/img/home.png')] bg-cover bg-center bg-black bg-opacity-50 bg-blend-multiply h-[372px]">
        <div class="flex flex-col w-full gap-4 p-4 mx-auto mt-4 text-white max-w-7xl">
            <p>
                Moto
            </p>
            <h3 class="w-3/4 text-2xl font-bold md:text-3xl">
                SMK Al Farisi (Cerdas Beretika) Ceria, Empati, Rasional, Damai, Aktif, Sabar, Bersih, Elok, Tulus, Iman, Konsiste, Amanah.
            </h3>
        </div>
    </div>
    <div class="flex flex-col w-full gap-4 p-4 mx-auto max-w-7xl">
        <div class="flex flex-col gap-4 p-4 bg-gray-300 md:flex-row">
            <div class="flex items-center justify-center w-full bg-white">
                <img src="/img/pakepsek.png" class="object-cover h-full " alt="">
            </div>
            <div class="flex flex-col gap-2">
                <h5 class="text-lg font-semibold">Kepala Sekolah</h5>
                <p>Assalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                <p class="text-justify">
                    Selamat datang di situs resmi SMK Al Farisi, sekolah menengah kejuruan di Jawa Barat. Kami berdedikasi untuk menyediakan pendidikan berkualitas yang mempersiapkan siswa-siswi untuk menghadapi tantangan masa depan. Melalui website ini, kami berharap dapat memberikan informasi lengkap dan terkini mengenai sekolah, program studi, fasilitas, dan kegiatan kami.
                    Terima kasih atas kepercayaan Anda kepada SMK Al Farisi. Mari bersama-sama menciptakan generasi yang unggul dan berdaya saing.
                </p>
                <p>Wassalamu'alaikum Warahmatullahi Wabarakatuh,</p>
                <p class="mt-2">ASEP RUHIYAT, S.Sos.,M.Pd.</p>
                <p>Kepala Sekolah SMK Al Farisi</p>
            </div>
        </div>
        @foreach ($berita as $b)
            <div class="flex flex-col items-center justify-center gap-4 p-4 bg-white shadow-xl rounded-2xl md:flex-row">
                <img src="{{ $b['foto'] }}" class="object-cover w-40 rounded-2xl h-52" alt="{{ $b['bold'] }}">
                <p class="text-justify"><span class="font-bold">{{ $b['bold'] }}</span>{{ $b['berita'] }}</p>
            </div>
        @endforeach
    </div>
</x-layouts.app>

