<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <div class="w-full p-4 mx-auto max-w-7xl">
        <x-atoms.cta text="Ekstra Kulikuler SMK-Al Farisi" />
        <div class="grid gap-3 lg:grid-cols-3 md:grid-cols-2">
            @foreach ($eskuls as $eskul)
                <div class="flex flex-col items-center justify-center gap-2 p-4 shadow-lg rounded-3xl ">
                    <img src="{{ $eskul['path'] }}" alt="" class="object-cover w-40 h-40">
                    <h2 class="text-xl font-bold">{{ $eskul['nama'] }}</h2>
                    <p class="text-justify">{{ $eskul['desk'] }}</p>
                    <a href="{{ $eskul['href'] }}" target="_blank" class="w-full "><span class="bg-[#B0DCC1]">Selengkapnya ></span></a>
                </div>
            @endforeach
        </div>
    </div>
</x-layouts.app>

