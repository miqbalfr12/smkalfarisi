<header class="text-white ">
    <div class="bg-[#0A8044]">
        <div class="flex items-center justify-between gap-4 p-4 mx-auto max-w-7xl">
            <div class="flex space-x-6">
                <div class="flex items-center space-x-2">
                    <x-icon.phone class="w-5 h-5" />
                    <p class="hidden md:block">(0262) 458081</p>
                </div>
                <div class="flex items-center justify-center space-x-2">
                    <x-icon.mail class="w-5 h-5" />
                    <p class="hidden md:block">smkalfarisi@gmail.com</p>
                </div>
            </div>

            <div class="flex items-center space-x-4">
                <a href="#" class="text-white hover:text-gray-200">
                    <x-icon.facebook class="w-5 h-5" />
                </a>
                <a href="#" class="text-white hover:text-gray-200">
                    <x-icon.instagram class="w-5 h-5" />
                </a>
                <a href="#" class="text-white hover:text-gray-200">
                    <x-icon.youtube class="w-5 h-5" />
                </a>
            </div>
        </div>
    </div>
    <div class="bg-[#D0CB58]">
        <div class="flex items-center justify-between p-4 mx-auto max-w-7xl">
            <div class="flex items-center space-x-4">
                <img src="/logo.png" alt="SMK Al Farisi" class="w-12 h-12">
                <div class="text-black">
                    <h1 class="text-lg font-semibold">SMK Al Farisi</h1>
                    <p class="text-sm">Sekolah Menengah Kejuruan di Jawa Barat</p>
                </div>
            </div>
        </div>
    </div>
</header>

<!-- Navigation Menu -->
<nav class="text-white bg-[#B0DCC1]">
    <div class="flex items-center justify-between p-4 mx-auto max-w-7xl">
        <div class="flex flex-col w-full">
            <div class="hidden lg:block">
                <x-molecules.navbar />
            </div>
            <button type="button" class="collapsible lg:hidden"><x-icon.titik class="w-full h-4 text-center text-white" /></button>
            <div class="collapsible-content">
                <x-molecules.navbar />
            </div>
        </div>
    </div>
</nav>
