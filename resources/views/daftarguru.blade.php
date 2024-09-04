<x-layouts.app title="SMK Al-Farisi Leles Garut">
    <div class="w-full p-4 mx-auto max-w-7xl">
        <x-atoms.cta text="Daftar Guru SMK-Al Farisi" />
        <div class="flex items-center justify-between">
            <div class="w-[30%] ">
                <x-icon.jabar />
            </div>
            <div class="w-full px-8 text-center ">
                <p class="font-bold text-[2vw]">YAYASAN AMINAHUSEN</p>
                <p class="font-bold text-[3vw]">SMKS AL FARISI</p>
                <p class="text-[1vw]">Teknik Kendaraan Ringan Otomotif-Teknik dan Bisnis Sepeda Motor-Teknik Komputer dan Jaringan-Agribisnis Tanaman Pangan dan Hortikultura-Otomatisasi dan Tata Kelola Perkantoran-Akuntansi dan Keuangan Lembaga</p>
                <p class="font-bold text-[2vw]">TERAKREDITASI "B"</p>
                <p class="text-[1vw]">Jalan Raya Leles No. 11 (0262) 258081 Leles - Garut</p>
                <p class="text-[1vw]">Email: smksfarisi@gmail.com Website: www.smkalfarisi.sch.id</p>
            </div>
            <div class="w-[30%] ">
                <img src="/logo.png" alt="SMK Al Farisi" >
            </div>
        </div>
        <hr class="my-4 border-4 border-black">
        <table id="data-table" class="w-full ">
            <thead class="border-b-2 border-black/50 ">
                <th>NO</th>
                <th>NAMA</th>
                <th>STATUS</th>
                <th>TMT</th>
                <th>JK</th>
            </thead>
            <tbody>
            </tbody>
        </table>
    </div>

    <script>
    document.addEventListener('DOMContentLoaded', function() {
        fetch('/daftar-guru.json')
            .then(response => response.json())
            .then(data => {
                const tableBody = document.querySelector('#data-table tbody');
                data.forEach(item => {
                    const row = document.createElement('tr');
                    row.classList.add('border-b', 'border-black/25');
                    row.innerHTML = `
                        <td class="text-center">${item.NO}</td>
                        <td>${item.NAMA}</td>
                        <td class="text-center">${item.STATUS}</td>
                        <td class="text-center">${item.TMT}</td>
                        <td class="text-center">${item.JK}</td>
                    `;
                    tableBody.appendChild(row);
                });
            })
            .catch(error => console.error('Error fetching data:', error));
    });
    </script>
</x-layouts.app>

