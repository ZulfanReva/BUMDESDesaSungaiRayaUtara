<nav id="navbar" class="fixed top-0 w-full backdrop-blur-md z-50">
    <div class="max-w-[1280px] mx-auto w-full flex justify-between items-center px-[75px] py-[30px]">
        <!-- Logo -->
        <div class="w-[100px] shrink-0 overflow-hidden">
            <img src="{{ asset('assets/images/logos/logo2.PNG') }}" class="w-full h-auto object-contain"
                alt="logo">
        </div>

        <!-- Menu Dinamis -->
        <ul class="flex items-center gap-[30px]">
            <!-- Beranda -->
            <li>
                <a href="{{ route('beranda.index') }}" class="font-medium">
                    Beranda
                </a>
            </li>

            <!-- Profil Desa -->
            <li>
                <a href="{{ route('beranda.index') }}" class="font-medium">
                    Profil Desa
                </a>
            </li>

            <!-- Dropdown untuk Layanan -->
            <li class="relative group">
                <button class="font-medium flex gap-1">
                    Layanan BUMDes
                    <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" width="18" height="18"
                        alt="icon">
                </button>
                <ul class="absolute left-0 bg-white shadow-md rounded-lg mt-2 w-[250px] hidden">
                    <!-- Menampilkan jenis layanan BUMDes -->
                    <li><a href="#bisnis-sosial" class="block px-4 py-2 text-black hover:bg-gray-100">Bisnis
                            Sosial</a></li>
                    <li><a href="#keuangan" class="block px-4 py-2 text-black hover:bg-gray-100">Keuangan</a>
                    </li>
                    <li><a href="#penyewaan" class="block px-4 py-2 text-black hover:bg-gray-100">Penyewaan</a>
                    </li>
                    <li><a href="#perantara" class="block px-4 py-2 text-black hover:bg-gray-100">Lembaga
                            Perantara</a></li>
                    <li><a href="#perdagangan"
                            class="block px-4 py-2 text-black hover:bg-gray-100">Perdagangan</a></li>
                    <li><a href="#usaha-bersama" class="block px-4 py-2 text-black hover:bg-gray-100">Usaha
                            Bersama</a></li>
                    <li><a href="#kontraktor"
                            class="block px-4 py-2 text-black hover:bg-gray-100">Kontraktor</a></li>
                </ul>
            </li>

            <!-- Testimoni -->
            <li>
                <a href="#testimoni" class="font-medium">
                    Testimoni
                </a>
            </li>

            <!-- Hubungi Kami -->
            <li>
                <a href="#hubungi-kami" class="font-medium">
                    Hubungi Kami
                </a>
            </li>
        </ul>

        <!-- JavaScript untuk menangani klik pada dropdown -->
        <script>
            // Pilih semua tombol dropdown
            document.querySelectorAll('.relative button').forEach(function(button) {
                button.addEventListener('click', function(event) {
                    const dropdown = this.nextElementSibling;
                    // Toggle class 'hidden' untuk membuka/menutup dropdown
                    dropdown.classList.toggle('hidden');
                });
            });
        </script>

        <!-- Tombol dan Ikon -->
        <div class="flex gap-[10px] items-center">
            {{-- <a href="#">
                <div class="w-[44px] shrink-0">
                    <img src="{{ asset('assets/images/icons/cart-bg-white.svg') }}" alt="icon">
                </div>
            </a> --}}
            <a href="#"
                class="bg-weserve-navy rounded-full px-[30px] py-[10px] text-white font-semibold">Masuk</a>
        </div>
    </div>
</nav>