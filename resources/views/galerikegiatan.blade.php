<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <div class="w-full p-4 mx-auto max-w-7xl">
        <x-atoms.cta text="Galeri Kegiatan SMK-Al Farisi" />


         @foreach ($galleries as $gallery)
            <div class="py-4" id="{{ str_replace(' ', '-', strtolower($gallery['nama'])) }}">
                <h3 class="mb-2 text-2xl font-semibold">{{ $gallery['nama'] }}</h3>

                <x-organisms.swiper :items="$gallery['items']" :path="$gallery['path']" />
            </div>
        @endforeach
    </div>
</x-layouts.app>

