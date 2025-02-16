<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<x-head></x-head>

<body>
    <div id="main" class="w-full h-full min-h-screen overflow-hidden mx-auto">

        <!-- Navigasi -->
        <x-navigasi></x-navigasi>

        <div class="flex flex-col gap-[50px] pt-[50px]">
            <section id="hero-section" class="max-w-[1280px] w-full overflow-hidden mx-auto">
                <div class="px-[75px] pt-[80px] flex justify-between items-center">
                    <div class="flex flex-col gap-[40px]">
                        <div class="!w-fit bg-white rounded-full px-4 py-2">
                            <div class="flex gap-[6px] items-center">
                                <img src="assets/images/icons/global.svg" class="w-6 h-6" alt="icons">
                                <p class="font-semibold">BUMDes Sungai Raya Utara, Memberdayakan Ekonomi Desa</p>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[10px]">
                            <h1
                                class="font-clash-display text-[60px] leading-[100%] font-semibold min-h-[140px] line wave">
                                <span class="line">BUMDes Penggerak</span><br>
                                <span class="line"><span class="text-weserve-beige">Ekonomi Desa</span>
                            </h1>
                            <p class="font-medium text-weserve-grey">Kami menyediakan berbagai layanan untuk
                                memberdayakan
                                masyarakat desa melalui pengelolaan usaha bersama.</p>
                        </div>

                        <!-- Script Teks -->
                        <script>
                            document.addEventListener('DOMContentLoaded', function() {
                                const waveLines = document.querySelectorAll('.wave .line'); // Pilih semua elemen dengan kelas line

                                waveLines.forEach(line => {
                                    const originalHTML = line.innerHTML; // Ambil HTML asli dari line
                                    line.innerHTML = ''; // Kosongkan konten dalam line

                                    // Proses HTML asli dan pisahkan tag dengan teks
                                    const tempDiv = document.createElement('div');
                                    tempDiv.innerHTML = originalHTML;

                                    // Loop untuk setiap node dalam konten (termasuk teks dan elemen HTML)
                                    tempDiv.childNodes.forEach((node, index) => {
                                        if (node.nodeType === Node.TEXT_NODE) {
                                            node.textContent.split('').forEach((char, charIndex) => {
                                                const span = document.createElement('span');
                                                span.textContent = char === ' ' ? '\u00A0' :
                                                    char; // Ganti spasi dengan nbsp
                                                span.style.transitionDelay = `${(index + charIndex) * 0.1}s`;
                                                line.appendChild(span);
                                            });
                                        } else if (node.nodeType === Node.ELEMENT_NODE) {
                                            const element = node.cloneNode(true);
                                            element.style.transitionDelay =
                                                `${index * 0.1}s`; // Tetap tambahkan delay untuk animasi
                                            line.appendChild(element);
                                        }
                                    });
                                });

                                function startWaveAnimation() {
                                    waveLines.forEach(line => {
                                        const spans = line.querySelectorAll('span');
                                        spans.forEach((span, index) => {
                                            // Pastikan bahwa setiap span memiliki transisi yang diterapkan
                                            span.style.transition = 'transform 2s, opacity 2s';

                                            // Gerakkan ke kiri dan atur opacity ke 0
                                            setTimeout(() => {
                                                span.style.opacity = '0';
                                                span.style.transform = 'translateX(-20px)';
                                            }, index * 100);

                                            // Reset posisi dan opacity setelah animasi selesai
                                            setTimeout(() => {
                                                span.style.opacity = '1';
                                                span.style.transform = 'translateX(0)';
                                            }, 2000 + index * 100);
                                        });
                                    });
                                }

                                // Mulai animasi dan ulangi setiap 10 detik
                                startWaveAnimation(); // Mulai animasi segera
                                setInterval(startWaveAnimation, 10000); // Ulangi setiap 10 detik
                            });
                        </script>

                        <div class="flex gap-5 items-center animate-slide-up">
                            <a href="#layanan"
                                class="bg-weserve-beige-gradient rounded-full px-10 py-4 font-bold text-[18px] text-white">Lihat
                                Layanan</a>
                            <a href="#" onclick="sendMessageToWA()">
                                <div class="flex gap-[6px] items-center">
                                    <img src="assets/images/icons/hubungi-kami.png" class="w-10 h-10" alt="icon">
                                    <p class="font-semibold text-weserve-beige">Hubungi Kami</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-[500px] h-[550px] shrink-0 overflow-hidden">
                        <img src="assets/images/thumbnails/thumbnail-bumdes.svg"
                            class="w-full h-full object-cover animate-fade-zoom" alt="thumbnail">
                    </div>
                </div>
            </section>

            <!-- Section Profil Desa -->
            <x-profil-desa></x-profil-desa>

            <!-- Section Kenapa Kami? -->
            <x-kenapa-kami></x-kenapa-kami>

            <!-- Section Partner & Sponsorship -->
            <x-mitra-sponsorship></x-mitra-sponsorship>

            <!-- Section Layanan -->
            <x-layanan></x-layanan>

            <!-- Section Testimoni -->
            <x-testimoni></x-testimoni>

            <!-- Section FAQ -->
            <x-faq></x-faq>

            <!-- Section Kontak -->
            <x-kontak></x-kontak>

            <!-- Section Footer -->
            <x-footer></x-footer>

        </div>
    </div>

    <!-- Modal -->
    <div id="loginModal" class="fixed inset-0 bg-gray-800 bg-opacity-50 justify-center items-center hidden z-50">
        <div class="bg-white rounded-[40px] flex max-w-[800px] w-full overflow-hidden relative">
            <!-- Tombol Close -->
            <button id="closeModal"
                class="absolute top-4 right-4 w-8 h-8 flex items-center justify-center bg-gray-200 rounded-full hover:bg-gray-300 transition-all">
                ✕
            </button>

            <!-- Kontainer Kiri: Gambar -->
            <div class="w-1/2 h-full">
                <img src="assets/images/thumbnails/thumbnail-masuk.png" class="w-full h-full object-cover"
                    alt="Logo BUMDes">
            </div>

            <!-- Spacer untuk jarak -->
            <div class="w-4"></div>

            <!-- Kontainer Kanan: Form Masuk -->
            <div class="w-1/2 p-4 pr-8 flex flex-col justify-center">
                <h2 class="text-2xl font-semibold mb-4 text-center">Masuk ke Akun</h2>
                <form action="{{ route('masuk') }}" method="POST">
                    @csrf
                    <!-- Email -->
                    <div class="mb-4">
                        <label for="email" class="block text-gray-700">Email</label>
                        <input type="email" id="email" name="email"
                            class="w-full p-3 border rounded-[20px] mt-2 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#6b4f3f]"
                            placeholder="Masukkan Email" required>
                    </div>

                    <!-- Password -->
                    <div class="mb-6">
                        <label for="password" class="block text-gray-700">Password</label>
                        <input type="password" id="password" name="password"
                            class="w-full p-3 border rounded-[20px] mt-2 transition-all duration-300 focus:outline-none focus:ring-2 focus:ring-[#6b4f3f]"
                            placeholder="Masukkan Password" required>
                    </div>

                    <!-- Button Masuk -->
                    <button type="submit"
                        class="w-full bg-weserve-beige-gradient text-white py-3 rounded-[20px] font-semibold flex items-center justify-center gap-2 mb-3">
                        Masuk
                    </button>

                    <!-- Button Buat Akun Baru -->
                    <button type="button"
                        class="w-full bg-gray-200 text-weserve-beige py-3 rounded-[20px] font-semibold flex items-center justify-center gap-3">
                        Buat Akun Baru
                    </button>

                    <!-- Horizontal Divider -->
                    <hr class="horizontal dark my-3">

                    <!-- Masuk dengan Google -->
                    <div class="text-center">
                        <button type="button"
                            class="w-full bg-gray-800 text-white py-3 rounded-[20px] font-semibold flex items-center justify-center gap-3">
                            <img src="assets/images/logos/google.png" alt="Google Icon" class="w-5 h-5">
                            Masuk / Daftar
                        </button>
                    </div>
                </form>
            </div>
        </div>
    </div>

    <!-- JavaScript untuk Menutup Modal -->
    <script>
        document.getElementById('closeModal').addEventListener('click', function() {
            document.getElementById('loginModal').classList.add('hidden');
        });
    </script>

    <!-- JavaScript untuk Hubungi Kami -->
    <script>
        function sendMessageToWA() {
            // Mendapatkan jam saat ini
            const hours = new Date().getHours();
            let greeting;

            // Menentukan salam berdasarkan waktu
            if (hours >= 5 && hours < 10) {
                greeting = 'Pagi';
            } else if (hours >= 10 && hours < 15) {
                greeting = 'Siang';
            } else if (hours >= 15 && hours < 18) {
                greeting = 'Sore';
            } else {
                greeting = 'Malam';
            }

            // Membuat pesan WhatsApp
            const message =
                `Selamat ${greeting} Bapak/Ibu.\n\nSaya ingin bertanya seputar layanan BUMDes Sungai Raya Utara, sekian terimakasih.`;

            // Membuka WhatsApp dengan pesan yang sudah terisi otomatis
            const phoneNumber = '+6287812741357';
            const url = `https://wa.me/${phoneNumber}?text=${encodeURIComponent(message)}`;

            // Membuka URL WhatsApp
            window.open(url, '_blank');
        }
    </script>


</body>
<!-- Alpine JS -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="https://bumdesdesasungairayautara-production.up.railway.app/js/script.js"></script>
<script src="https://bumdesdesasungairayautara-production.up.railway.app/js/swiper.js"></script>
<script src="https://bumdesdesasungairayautara-production.up.railway.app/js/tab.js"></script>

</html>
