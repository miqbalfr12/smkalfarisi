<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <div class="w-full p-4 mx-auto max-w-7xl">
        <x-atoms.cta text="Program Study SMK-Al Farisi" />

        <div class="flex flex-col h-full gap-5">
            <div class="flex items-center justify-center w-full bg-center bg-cover aspect-w-16 aspect-h-9">
                <div  class="flex items-center bg-cover bg-center bg-black bg-opacity-50 bg-blend-multiply justify-center w-full h-full text-3xl font-semibold text-center text-white py-[20%]" style="background-image: url('{{ $jurusan['foto'] }}');">
                    {{ $jurusan['nama'] }}
                </div>
            </div>
        </div>
        <div class="flex items-center justify-center gap-4 p-8 mt-4 rounded-md shadow-md bg-slate-200">
            <img src="{{ $jurusan['logo'] }}" alt="" class="object-cover w-[10%]">
            <h1 class="text-3xl font-semibold">
                {{ $jurusan['nama'] }}
            </h1>
            <img src="{{ $jurusan['logo'] }}" alt="" class="object-cover w-[10%]">
        </div>
        <div class="grid grid-cols-1 md:grid-cols-2">
            <div class="flex flex-col w-full gap-4 p-4">
                <h2 class="text-xl font-bold text-black border-b-2 border-red-800">Visi</h2>
                <p class="text-gray-700 ">
                    {{ $jurusan['visi'] }}
                </p>
                <img src="{{ $jurusan['gambar'][0] }}" alt="" class="object-cover h-full">
            </div>
            <div class="p-4">
                <img src="{{ $jurusan['gambar'][1] }}" alt="" class="">
                <div>
                    <h2 class="my-4 text-xl font-bold text-black border-b-2 border-red-800">Misi</h2>
                    <ol class="pl-5 space-y-2 text-gray-700 list-decimal">
                        @foreach($jurusan['misi'] as $item)
                            <li>{{ $item }}</li>
                        @endforeach
                    </ol>
                </div>
            </div>
            <div class="p-4">
                <h2 class="mb-4 text-xl font-bold text-black border-b-2 border-red-800 ">Kompetensi Utama:</h2>
                <ul class="flex flex-col gap-2 pl-5 mb-4 text-gray-700 list-disc">
                    @foreach($jurusan['kompetensi'] as $item)
                            <li>{{ $item }}</li>
                    @endforeach
                </ul>
                <img src="{{ $jurusan['gambar'][2] }}" alt="">
            </div>
            <div class="p-4">
                <img src="{{ $jurusan['gambar'][3] }}" alt="" class="object-cover h-full">
            </div>
        </div>
        <div class="px-4 mb-4">
            <h2 class="mb-4 text-xl font-bold text-center text-black border-b-2 border-red-800">
                Materi Yang Diajarkan:
            </h2>
            <ul class="grid grid-cols-1 gap-2 pl-5 list-disc md:grid-cols-2">
                @foreach($jurusan['materi'] as $item)
                            <li>{{ $item }}</li>
                @endforeach
            </ul>
        </div>
    </div>
</x-layouts.app>
