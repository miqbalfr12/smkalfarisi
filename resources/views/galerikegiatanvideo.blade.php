<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <link
        rel="stylesheet"
        href="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.css"
    />
    <script src="https://cdn.jsdelivr.net/npm/keen-slider@6.8.5/keen-slider.min.js"></script>
    <div class="w-full p-4 mx-auto max-w-7xl">
        <x-atoms.cta text="Galeri Kegiatan SMK-Al Farisi" />

        <div class="flex flex-col gap-4">

            @foreach ($galleries as $gallery)
                <div class="relative pb-[56.25%] h-0 overflow-hidden">
                <iframe
                    class="absolute top-0 left-0 w-full h-full"
                    src="{{ $gallery['link'] }}"
                    title="YouTube video player"
                    frameborder="0"
                    allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture; web-share; fullscreen;"
                    referrerpolicy="strict-origin-when-cross-origin"
                    allowfullscreen>
                </iframe>
            </div>
            @endforeach
        </div>


    </div>
</x-layouts.app>

