<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.js"></script>
    <div class="w-full p-4 mx-auto max-w-7xl">
        <x-atoms.cta text="Galeri Kegiatan SMK-Al Farisi" />


         @foreach ($galleries as $gallery)
            <div class="py-4" id="{{ str_replace(' ', '-', strtolower($gallery['nama'])) }}">
                <h3 class="mb-2 text-2xl font-semibold">{{ $gallery['nama'] }}</h3>

                <x-organisms.swiper :items="$gallery['items']" :path="$gallery['path']" :index="$loop->index" />
            </div>
        @endforeach
    </div>
</x-layouts.app>

