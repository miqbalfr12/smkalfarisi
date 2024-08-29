<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <div class="w-full p-4 mx-auto max-w-7xl">
        <x-atoms.cta text="Program Studi SMK-Al Farisi" />

        <ul class="flex flex-col h-full gap-5">
            @foreach($jurusan as $item)
                <li class="flex items-center justify-center w-full bg-center bg-cover aspect-w-16 aspect-h-9">
                    <a href="/program-studi/{{ $item['slug'] }}" class="flex items-center bg-cover bg-center bg-black bg-opacity-50 bg-blend-multiply justify-center w-full h-full text-3xl font-semibold text-center text-white py-[20%]" style="background-image: url('{{ $item['foto'] }}');">
                        {{ $item['nama'] }}
                    </a>
                </li>
            @endforeach
        </ul>
    </div>
</x-layouts.app>
