<footer class="relative z-10 w-full overflow-hidden mx-auto bg-weserve-beige-gradient -mt-[150px] pt-[150px]">
    <div class="flex flex-col gap-[50px] px-[75px] pb-[50px] pt-[200px] max-w-[1280px] mx-auto">
        <div class="flex gap-[100px] items-center">
            <div class="flex flex-col gap-[30px]">
                <div class="w-[175px] h-[175px] shrink-0 overflow-hidden mx-auto">
                    <img src="assets/images/logos/logo-bumdes-polos-white.png" class="w-full h-full object-contain"
                        alt="logo">
                </div>
                <p class="text-white leading-[28px] text-justify">Kami hadir untuk memberikan solusi
                    terbaik dalam pengembangan desa tanpa mengurangi nilai usaha desa.
                </p>
                <div id="sosial-media" class="flex gap-[14px] items-center">
                    <a href="{{ route('error.404') }}"
                        class="bg-white rounded-full p-[15px] w-[40px] h-[40px] flex items-center justify-center zoom-in">
                        <i class="bi bi-twitter-x text-weserve-beige w-[24px] h-[24px]"></i>
                    </a>
                    <a href="{{ route('error.404') }}"
                        class="bg-white rounded-full p-[15px] w-[40px] h-[40px] flex items-center justify-center zoom-in">
                        <i class="bi bi-facebook text-weserve-beige w-[24px] h-[24px]"></i>
                    </a>
                    <a href="{{ route('error.404') }}"
                        class="bg-white rounded-full p-[15px] w-[40px] h-[40px] flex items-center justify-center zoom-in">
                        <i class="bi bi-instagram text-weserve-beige w-[24px] h-[24px]"></i>
                    </a>
                    <a href="{{ route('error.404') }}"
                        class="bg-white rounded-full p-[15px] w-[40px] h-[40px] flex items-center justify-center zoom-in">
                        <i class="bi bi-linkedin text-weserve-beige w-[24px] h-[24px]"></i>
                    </a>
                    <a href="#" onclick="sendMessageToWA()"
                        class="bg-white rounded-full p-[15px] w-[40px] h-[40px] flex items-center justify-center zoom-in">
                        <i class="bi bi-whatsapp text-weserve-beige w-[24px] h-[24px]"></i>
                    </a>
                </div>
            </div>

            <div class="grid grid-cols-3 gap-[70px] content-center justify-end">

                <!-- Profil Desa Section -->
                <div class="footer">
                    <div class="flex flex-col gap-[30px]">
                        <h4 class="text-white font-bold text-[18px]">Tentang Kami</h4>
                        <div class="flex flex-col gap-4">
                            <a href="#profil-desa" class="text-white zoom-in" data-tab="sejarah-desa">Sejarah Desa</a>
                            <a href="#profil-desa" class="text-white zoom-in" data-tab="visi-misi">Visi & Misi Desa</a>
                            <a href="#profil-desa" class="text-white zoom-in" data-tab="fasilitas-desa">Fasilitas
                                Desa</a>
                            <a href="#profil-desa" class="text-white zoom-in" data-tab="prestasi-desa">Prestasi Desa</a>
                        </div>
                    </div>
                </div>

                <!-- Beranda Section -->
                <div class="flex flex-col gap-[30px]">
                    <h4 class="text-white font-bold text-[18px]">Hubungi Kami</h4>
                    <div class="flex flex-col gap-4">
                        <a href="#faq" class="text-white zoom-in">FAQ</a>
                        <a href="#" onclick="sendMessageToWA()" class="text-white zoom-in">Whats App</a>
                        <a href="https://maps.app.goo.gl/6QcAhRHxBJJ7LPuy7" target="_blank"
                            class="text-white zoom-in">Lokasi &
                            Peta</a>
                        <a href="{{ route('error.404') }}" class="text-white zoom-in">Sosial Media</a>
                    </div>
                </div>

                <!-- Kontak & Bantuan Section -->
                <div class="flex flex-col gap-[30px]">
                    <h4 class="text-white font-bold text-[18px]">Layanan Kami</h4>
                    <div class="flex flex-col gap-4">
                        <a href="{{ route('error.404') }}" class="text-white zoom-in">Sosial/Serving</a>
                        <a href="{{ route('error.404') }}" class="text-white zoom-in">Penyewaan/Renting</a>
                        <a href="{{ route('error.404') }}" class="text-white zoom-in">Lembaga Perantara/Brokering</a>
                        <a href="{{ route('error.404') }}" class="text-white zoom-in">Usaha Bersama</a>
                    </div>
                </div>
            </div>

        </div>
        <p class="text-center text-gray-200">
            All Rights Reserved • Copyright BUMDes Sungai Raya Utara by
            <a href="{{ route('profil-kkn') }}" class="text-gray-200 hover:text-gray-300 underline">
                KKN Kel 9 UMBJM 2025
            </a>
        </p>
    </div>
</footer>
