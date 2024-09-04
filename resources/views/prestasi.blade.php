<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <div class="w-full p-4 mx-auto max-w-7xl">
        <x-atoms.cta text="Prestasi SMK-Al Farisi" />
        <div class="flex flex-col gap-4">
            <table>
                <thead>
                    <th class="bg-[#8ACC9B] p-2 text-white">No</th>
                    <th class="bg-[#8ACC9B] p-2 text-white">Prestasi Yang Diterima</th>
                    <th class="bg-[#8ACC9B] p-2 text-white">Tahun</th>
                </thead>
                <tbody>
                    @foreach ($prestasi as $p)
                    <tr class="border-b-2 ">
                        <td class="text-center">{{ $loop->iteration }}</td>
                        <td class="py-4">{{ $p['prestasi'] }}</td>
                        <td>{{ $p['tahun'] }}</td>
                    </tr>
                    @endforeach
                </tbody>
            </table>
        </div>
    </div>
</x-layouts.app>

