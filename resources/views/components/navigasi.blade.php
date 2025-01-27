<nav id="navbar" class="fixed top-0 w-full backdrop-blur-md z-50">
    <div class="max-w-[1280px] mx-auto w-full flex justify-between items-center px-[75px] py-[30px]">
        <!-- Logo -->
        <div class="w-[50px] shrink-0 overflow-hidden">
            <img src="{{ asset('assets/images/logos/logo-bumdes-polos-brown.png') }}" class="w-full h-auto object-contain" alt="logo">
        </div>

        <!-- Menu Dinamis -->
        <ul class="flex items-center gap-[30px]">
            <!-- Beranda -->
            <li>
                <a href="{{ route('beranda.index') }}"
                    class="font-medium text-black hover:text-weserve-beige px-3 py-2 rounded-lg">
                    Beranda
                </a>
            </li>

            <!-- Profil Desa -->
            <li>
                <a href="{{ route('beranda.index') }}"
                    class="font-medium text-black hover:text-weserve-beige px-3 py-2 rounded-lg">
                    Profil Desa
                </a>
            </li>

            <!-- Layanan BUMDes -->
            <li>
                <a href="{{ route('beranda.index') }}"
                    class="font-medium text-black hover:text-weserve-beige px-3 py-2 rounded-lg">
                    Layanan BUMDes
                </a>
            </li>

            {{-- <!-- Dropdown untuk Layanan -->
            <li class="relative group">
                <button
                    class="font-medium flex items-center gap-1 px-3 py-2 rounded-lg text-black hover:text-weserve-beige focus:outline-none">
                    Layanan BUMDes
                    <img src="{{ asset('assets/images/icons/arrow-down.svg') }}" width="18" height="18"
                        alt="icon">
                </button>
                <ul
                    class="absolute left-0 bg-white shadow-md rounded-lg mt-2 w-[250px] hidden group-hover:block z-10 transition-all duration-300">
                    <!-- Menampilkan jenis layanan BUMDes -->
                    <li><a href="#bisnis-sosial"
                            class="block px-4 py-2 text-black hover:text-weserve-beige rounded-lg">Bisnis Sosial</a>
                    </li>
                    <li><a href="#keuangan"
                            class="block px-4 py-2 text-black hover:text-weserve-beige rounded-lg">Keuangan</a></li>
                    <li><a href="#penyewaan"
                            class="block px-4 py-2 text-black hover:text-weserve-beige rounded-lg">Penyewaan</a></li>
                    <li><a href="#perantara"
                            class="block px-4 py-2 text-black hover:text-weserve-beige rounded-lg">Lembaga Perantara</a>
                    </li>
                    <li><a href="#perdagangan"
                            class="block px-4 py-2 text-black hover:text-weserve-beige rounded-lg">Perdagangan</a></li>
                    <li><a href="#usaha-bersama"
                            class="block px-4 py-2 text-black hover:text-weserve-beige rounded-lg">Usaha Bersama</a>
                    </li>
                    <li><a href="#kontraktor"
                            class="block px-4 py-2 text-black hover:text-weserve-beige rounded-lg">Kontraktor</a></li>
                </ul>
            </li> --}}

            <!-- Testimoni -->
            <li>
                <a href="#testimoni" class="font-medium text-black hover:text-weserve-beige px-3 py-2 rounded-lg">
                    Testimoni
                </a>
            </li>

            <!-- Hubungi Kami -->
            <li>
                <a href="#hubungi-kami" class="font-medium text-black hover:text-weserve-beige px-3 py-2 rounded-lg">
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
                class="font-medium text-black hover:bg-weserve-beige-gradient hover:text-white hover:font-semibold px-[30px] py-[10px] rounded-full">
                Masuk
            </a>
        </div>
    </div>
</nav>
