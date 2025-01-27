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
                            <a href="#"
                                class="bg-weserve-beige rounded-full px-10 py-4 font-bold text-[18px] text-white">Lihat
                                Layanan</a>
                            <a href="#">
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
            <section id="brands-section" class="max-w-[1280px] w-full overflow-hidden mx-auto">
                <h2 class="font-clash-display font-semibold text-[46px] text-center mb-10">Partner & Sponsorship</h2>
                <div class="px-[75px] flex gap-[30px] justify-center">
                    <div class="group">
                        <div
                            class="hidden w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                            <img src="assets/images/logos/logo-hss.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                        <div
                            class="block w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                            <img src="assets/images/logos/logo-hss-bw.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                    </div>
                    <div class="group">
                        <div
                            class="hidden w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                            <img src="assets/images/logos/logo-dpdt.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                        <div
                            class="block w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                            <img src="assets/images/logos/logo-dpdt-bw.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                    </div>
                    <div class="group">
                        <div
                            class="hidden w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                            <img src="assets/images/logos/logo-komdigi.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                        <div
                            class="block w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                            <img src="assets/images/logos/logo-komdigi-bw.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                    </div>
                    <div class="group">
                        <div
                            class="hidden w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                            <img src="assets/images/logos/logo-kemenkeu.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                        <div
                            class="block w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                            <img src="assets/images/logos/logo-kemenkeu-bw.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                    </div>
                    <div class="group">
                        <div
                            class="hidden w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                            <img src="assets/images/logos/logo-telkom.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                        <div
                            class="block w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                            <img src="assets/images/logos/logo-telkom-bw.png" class="w-full h-full object-contain"
                                alt="logo">
                        </div>
                    </div>
                    <div class="group">
                        <div
                            class="hidden w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                            <img src="assets/images/logos/logo-umbjm.png" class="w-full h-full object-contain"
                                alt="logo baru">
                        </div>
                        <div
                            class="block w-[180px] h-[45px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                            <img src="assets/images/logos/logo-umbjm-bw.png" class="w-full h-full object-contain"
                                alt="logo baru bw">
                        </div>
                    </div>
                </div>
            </section>

            <section id="strong-ecosystem" class="max-w-[1280px] w-full overflow-hidden mx-auto">
                <div class="px-[75px] flex gap-[70px] justify-start items-center">
                    <div class="w-[500px] h-[550px] shrink-0 overflow-hidden">
                        <img src="assets/images/thumbnails/thumbnail-2.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </div>
                    <div class="flex flex-col gap-[40px]">
                        <div class="flex flex-col gap-[10px] w-[437px]">
                            <h2 class="font-clash-display text-[46px] font-semibold">We Have Very<br>Strong Ecosystem
                            </h2>
                            <p class="font-medium leading-[32px] text-weserve-grey">We provide a variety of servers to
                                grow your users<br>acquisition much user-friendly and boosting up sales.</p>
                        </div>
                        <div class="flex flex-col gap-5 w-full">
                            <div class="flex gap-4 bg-white rounded-[16px] p-5 w-[500px]">
                                <img src="assets/images/icons/health.svg" class="w-[46px] h-[46px]" alt="icon">
                                <div class="flex flex-col gap-[2px]">
                                    <h3 class="font-bold text-[22px] leading-[24px]">$880 Mio</h3>
                                    <p class="font-medium text-weserve-grey">Company budget saved</p>
                                </div>
                            </div>
                            <div class="flex gap-4 bg-white rounded-[16px] p-5 w-[500px]">
                                <img src="assets/images/icons/cpu-charge.svg" class="w-[46px] h-[46px]"
                                    alt="icon">
                                <div class="flex flex-col gap-[2px]">
                                    <h3 class="font-bold text-[22px] leading-[24px]">450,392</h3>
                                    <p class="font-medium text-weserve-grey">All servers available</p>
                                </div>
                            </div>
                            <div class="flex gap-4 bg-white rounded-[16px] p-5 w-[500px]">
                                <img src="assets/images/icons/cloud-add.svg" class="w-[46px] h-[46px]"
                                    alt="icon">
                                <div class="flex flex-col gap-[2px]">
                                    <h3 class="font-bold text-[22px] leading-[24px]">$189 Mio</h3>
                                    <p class="font-medium text-weserve-grey">Websites are running good</p>
                                </div>
                            </div>
                        </div>
                        <div class="flex gap-5 items-center">
                            <a href="#"
                                class="bg-weserve-purple rounded-full px-10 py-4 font-bold text-[18px] text-white">Explore
                                More</a>
                            <a href="#">
                                <div class="flex gap-[6px] items-center">
                                    <img src="assets/images/icons/device-message-purple.svg" class="w-6 h-6"
                                        alt="icon">
                                    <p class="font-semibold text-weserve-purple">Schedule a Demo</p>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <section id="our-showcase" class="w-full mx-auto px-[20px]">
                <div class="flex flex-col gap-[30px] items-center">
                    <div class="flex flex-col gap-[10px] text-center">
                        <h2 class="font-clash-display font-semibold text-[46px]">Our Showcase</h2>
                        <p class="font-medium text-weserve-grey leading-[32px]">
                            They built amazing websites to help more people around the world <br>
                            by using our recommendation services and products
                        </p>
                    </div>
                    <div class="w-full overflow-hidden">
                        <div class="flex gap-[20px] py-[30px] animate-infinite-scroll">
                            <div class="flex gap-5">
                                <div class="flex gap-[20px]">
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-5.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-3.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-7.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-3.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-8.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-9.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-3.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-8.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-9.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-9.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                                <div class="flex gap-[20px]">
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-5.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-3.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-7.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-3.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-8.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-9.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-3.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-8.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-9.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                    <div class="!w-fit p-[1px]">
                                        <a href="#">
                                            <div
                                                class="relative rounded-[16px] hover:ring-4 hover:ring-weserve-purple transition-all duration-300 shrink-0 overflow-hidden group">
                                                <div class="w-[320px] h-[220px] shrink-0 rounded-[16px]">
                                                    <img src="assets/images/thumbnails/thumbnail-9.png"
                                                        class="w-full h-full object-cover" alt="thumbnail">
                                                </div>
                                                <div id="button"
                                                    class="hidden absolute bottom-8 left-1/2 transform -translate-x-1/2 group-hover:block transition-all duration-300">
                                                    <a href="#"
                                                        class="py-[10px] px-[30px] bg-weserve-purple rounded-full group-hover:text-white font-semibold hover:shadow-lg hover:shadow-weserve-purple/30 transition-all duration-300">View
                                                        Details</a>
                                                </div>
                                            </div>
                                        </a>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="faq-section" class="max-w-[1280px] w-full overflow-hidden mx-auto">
                <div class="flex flex-col gap-[30px] px-[75px]">
                    <h2 class="font-clash-display font-semibold text-[46px] text-center">Frequently Asked Questions
                    </h2>
                    <div class="w-full flex gap-[30px]">
                        <div class="flex flex-col gap-[20px] w-full">
                            <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                                <div class="flex justify-between cursor-pointer items-center"
                                    @click="isOpen = !isOpen">
                                    <h4 class="text-[20px] font-bold">Why do we need to use Kapp?</h4>
                                    <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }"
                                        class="transition-all duration-300">
                                        <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' :
                                            'assets/images/icons/arrow-down-whitebg.svg'"
                                            alt="icon">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-5 pt-[20px] w-[450px]" x-show="isOpen" x-transition
                                    x-transition:enter.duration.1000ms x-transition.delay.50m>
                                    <p class="text-weserve-grey font-medium leading-[32px]">Kapp is able to develop by
                                        themselves without removing the parents' permission and lorem dolor si amet
                                        fully run network at 100% avoiding data-loss at any moments.</p>
                                    <a href="#" class="text-weserve-purple font-semibold">Learn More</a>
                                </div>
                            </div>
                            <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                                <div class="flex justify-between cursor-pointer items-center"
                                    @click="isOpen = !isOpen">
                                    <h4 class="text-[20px] font-bold">Do we need to pay 6 months per item?</h4>
                                    <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }"
                                        class="transition-all duration-300">
                                        <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' :
                                            'assets/images/icons/arrow-down-whitebg.svg'"
                                            alt="icon">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-5 pt-[20px] w-[450px]" x-show="isOpen" x-transition
                                    x-transition:enter.duration.1000ms x-transition.delay.50m>
                                    <p class="text-weserve-grey font-medium leading-[32px]">Kapp is able to develop by
                                        themselves without removing the parents' permission and lorem dolor si amet
                                        fully run network at 100% avoiding data-loss at any moments.</p>
                                    <a href="#" class="text-weserve-purple font-semibold">Learn More</a>
                                </div>
                            </div>
                            <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                                <div class="flex justify-between cursor-pointer items-center"
                                    @click="isOpen = !isOpen">
                                    <h4 class="text-[20px] font-bold">How to migrate from other service?</h4>
                                    <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }"
                                        class="transition-all duration-300">
                                        <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' :
                                            'assets/images/icons/arrow-down-whitebg.svg'"
                                            alt="icon">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-5 pt-[20px] w-[450px]" x-show="isOpen" x-transition
                                    x-transition:enter.duration.1000ms x-transition.delay.50m>
                                    <p class="text-weserve-grey font-medium leading-[32px]">Kapp is able to develop by
                                        themselves without removing the parents' permission and lorem dolor si amet
                                        fully run network at 100% avoiding data-loss at any moments.</p>
                                    <a href="#" class="text-weserve-purple font-semibold">Learn More</a>
                                </div>
                            </div>
                        </div>
                        <div class="flex flex-col gap-[20px] w-full">
                            <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                                <div class="flex justify-between cursor-pointer items-center"
                                    @click="isOpen = !isOpen">
                                    <h4 class="text-[20px] font-bold">What if data doesn't get stored?</h4>
                                    <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }"
                                        class="transition-all duration-300">
                                        <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' :
                                            'assets/images/icons/arrow-down-whitebg.svg'"
                                            alt="icon">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-5 pt-[20px] w-[450px]" x-show="isOpen" x-transition
                                    x-transition:enter.duration.1000ms x-transition.delay.50m>
                                    <p class="text-weserve-grey font-medium leading-[32px]">Kapp is able to develop by
                                        themselves without removing the parents' permission and lorem dolor si amet
                                        fully run network at 100% avoiding data-loss at any moments.</p>
                                    <a href="#" class="text-weserve-purple font-semibold">Learn More</a>
                                </div>
                            </div>
                            <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                                <div class="flex justify-between cursor-pointer items-center"
                                    @click="isOpen = !isOpen">
                                    <h4 class="text-[20px] font-bold">Can we guarantee no any loss at all?</h4>
                                    <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }"
                                        class="transition-all duration-300">
                                        <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' :
                                            'assets/images/icons/arrow-down-whitebg.svg'"
                                            alt="icon">
                                    </div>
                                </div>
                                <div class="flex flex-col gap-5 pt-[20px] w-[450px]" x-show="isOpen" x-transition
                                    x-transition:enter.duration.1000ms x-transition.delay.50m>
                                    <p class="text-weserve-grey font-medium leading-[32px]">Kapp is able to develop by
                                        themselves without removing the parents' permission and lorem dolor si amet
                                        fully run network at 100% avoiding data-loss at any moments.</p>
                                    <a href="#" class="text-weserve-purple font-semibold">Learn More</a>
                                </div>
                            </div>
                            <div class="bg-weserve-navy rounded-[16px] p-5">
                                <div class="flex justify-between cursor-pointer items-center">
                                    <div class="flex items-center gap-[6px]">
                                        <img src="assets/images/icons/device-message-white.svg" class="w-6 h-6"
                                            alt="icons">
                                        <h4 class="text-[20px] font-semibold text-white">Send e-mail to us for other
                                            questions</h4>
                                    </div>
                                    <a href="#">
                                        <img src="assets/images/icons/arrow-right-whitebg.svg"
                                            class="w-[30px] h-[30px]" alt="icons">
                                    </a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </section>
            <section id="services-provide"
                class="relative z-20 max-w-[1280px] w-full overflow-hidden mx-auto px-[75px] -mb-[250px]">
                <div class="bg-weserve-purple rounded-[40px]">
                    <div class="flex gap-[60px] items-center p-[50px]">
                        <div class="flex flex-col gap-[40px] w-[478px]">
                            <div class="!w-fit bg-white rounded-full px-4 py-2">
                                <div class="flex gap-[6px] items-center">
                                    <img src="assets/images/icons/global.svg" class="w-6 h-6" alt="icons">
                                    <p class="font-semibold">We host more than 120,000 websites</p>
                                </div>
                            </div>
                            <div class="flex flex-col gap-[10px] text-white">
                                <h2 class="font-clash-display font-semibold text-[46px]">Start Growing Today</h2>
                                <p class="leading-[32px]">We provide a variety of servers to grow your users
                                    acquisition much user-friendly and hosting up sales.</p>
                            </div>
                            <div class="flex gap-5 items-center">
                                <a href="#"
                                    class="bg-weserve-yellow rounded-full px-10 py-4 font-bold text-[18px]">Explore
                                    More</a>
                                <a href="#">
                                    <div class="flex gap-[6px] items-center">
                                        <img src="assets/images/icons/device-message-white.svg" class="w-6 h-6"
                                            alt="icon">
                                        <p class="font-semibold text-white">Schedule a Demo</p>
                                    </div>
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 items-center gap-5">
                            <a href="#">
                                <div
                                    class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                    <div
                                        class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/ellipse_mini.svg" alt="shadow">
                                    </div>
                                    <div
                                        class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                        <img src="assets/images/icons/scroll.svg" alt="icon">
                                    </div>
                                    <div
                                        class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/scroll-white.svg" alt="icon">
                                    </div>
                                    <h3
                                        class="font-bold text-[18px] group-hover:text-white transition-all duration-300">
                                        Web Crawl</h3>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                    <div
                                        class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/ellipse_mini.svg" alt="shadow">
                                    </div>
                                    <div
                                        class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                        <img src="assets/images/icons/cpu-charge.svg" alt="icon">
                                    </div>
                                    <div
                                        class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/cpu-charge-white.svg" alt="icon">
                                    </div>
                                    <h3
                                        class="font-bold text-[18px] group-hover:text-white transition-all duration-300">
                                        Fast Report</h3>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                    <div
                                        class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/ellipse_mini.svg" alt="shadow">
                                    </div>
                                    <div
                                        class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                        <img src="assets/images/icons/security-user-purple.svg" alt="icon">
                                    </div>
                                    <div
                                        class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/security-user.svg" alt="icon">
                                    </div>
                                    <h3
                                        class="font-bold text-[18px] group-hover:text-white transition-all duration-300">
                                        Anti-DDoS</h3>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                    <div
                                        class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/ellipse_mini.svg" alt="shadow">
                                    </div>
                                    <div
                                        class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                        <img src="assets/images/icons/status-up-purple.svg" alt="icon">
                                    </div>
                                    <div
                                        class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/status-up.svg" alt="icon">
                                    </div>
                                    <h3
                                        class="font-bold text-[18px] group-hover:text-white transition-all duration-300">
                                        Auto-Scale</h3>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                    <div
                                        class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/ellipse_mini.svg" alt="shadow">
                                    </div>
                                    <div
                                        class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                        <img src="assets/images/icons/candle.svg" alt="icon">
                                    </div>
                                    <div
                                        class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/candle-white.svg" alt="icon">
                                    </div>
                                    <h3
                                        class="font-bold text-[18px] group-hover:text-white transition-all duration-300">
                                        AI Perform</h3>
                                </div>
                            </a>
                            <a href="#">
                                <div
                                    class="relative flex flex-col gap-5 py-[40px] px-4 rounded-[26px] bg-white items-center hover:bg-weserve-navy group transition-all duration-300">
                                    <div
                                        class="hidden absolute right-2 top-2 opacity-70 group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/ellipse_mini.svg" alt="shadow">
                                    </div>
                                    <div
                                        class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                        <img src="assets/images/icons/crown.svg" alt="icon">
                                    </div>
                                    <div
                                        class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                        <img src="assets/images/icons/crown-white.svg" alt="icon">
                                    </div>
                                    <h3
                                        class="font-bold text-[18px] group-hover:text-white transition-all duration-300">
                                        Top Plugins+</h3>
                                </div>
                            </a>
                        </div>
                    </div>
                </div>
            </section>
            <footer class="relative z-10 w-full overflow-hidden mx-auto bg-[#070C29] -mt-[150px] pt-[150px]">
                <div class="flex flex-col gap-[50px] px-[75px] pb-[50px] pt-[200px] max-w-[1280px] mx-auto">
                    <div class="flex gap-[100px] items-center">
                        <div class="flex flex-col gap-[30px]">
                            <div class="w-[175px] h-[42px] shrink-0 overflow-hidden">
                                <img src="assets/images/logos/logo-white.svg" class="w-full h-full object-cover"
                                    alt="logo">
                            </div>
                            <p class="font-medium text-weserve-light leading-[28px]">We host your empire business today
                                <br> using the latest technologies.
                            </p>
                            <div class="flex gap-[14px] items-center">
                                <a href="#" class="bg-white rounded-full p-[10px]">
                                    <img src="assets/images/icons/sms.svg" class="w-[24px] h-[24px]" alt="icon">
                                </a>
                                <a href="#" class="bg-white rounded-full p-[10px]">
                                    <img src="assets/images/icons/global-purple.svg" class="w-[24px] h-[24px]"
                                        alt="icon">
                                </a>
                                <a href="#" class="bg-white rounded-full p-[10px]">
                                    <img src="assets/images/icons/call.svg" class="w-[24px] h-[24px]" alt="icon">
                                </a>
                                <a href="#" class="bg-white rounded-full p-[10px]">
                                    <img src="assets/images/icons/video-play.svg" class="w-[24px] h-[24px]"
                                        alt="icon">
                                </a>
                            </div>
                        </div>
                        <div class="grid grid-cols-3 gap-[70px] content-center justify-end">
                            <div class="flex flex-col gap-[30px]">
                                <h4 class="text-white font-bold text-[18px]">Products</h4>
                                <div class="flex flex-col gap-4">
                                    <a href="#" class="text-weserve-light font-medium">Powerful Reports</a>
                                    <a href="#" class="text-weserve-light font-medium">Blockchain</a>
                                    <a href="#" class="text-weserve-light font-medium">Auto-Backup</a>
                                    <a href="#" class="text-weserve-light font-medium">Data Science</a>
                                    <a href="#" class="text-weserve-light font-medium">Auto-Scaling Up</a>
                                </div>
                            </div>
                            <div class="flex flex-col gap-[30px]">
                                <h4 class="text-white font-bold text-[18px]">Resouces</h4>
                                <div class="flex flex-col gap-4">
                                    <a href="#" class="text-weserve-light font-medium">Support 24/7</a>
                                    <a href="#" class="text-weserve-light font-medium">Help Center</a>
                                    <a href="#" class="text-weserve-light font-medium">How-to Instructions</a>
                                    <a href="#" class="text-weserve-light font-medium">Blog & Tips</a>
                                    <a href="#" class="text-weserve-light font-medium">About Us</a>
                                </div>
                            </div>
                            <div class="flex flex-col gap-[30px]">
                                <h4 class="text-white font-bold text-[18px]">Company</h4>
                                <div class="flex flex-col gap-4">
                                    <a href="#" class="text-weserve-light font-medium">Privacy & Policy</a>
                                    <a href="#" class="text-weserve-light font-medium">Terms and Conditions</a>
                                    <a href="#" class="text-weserve-light font-medium">Investor Relations</a>
                                    <a href="#" class="text-weserve-light font-medium">Join With Us</a>
                                    <a href="#" class="text-weserve-light font-medium">Our Statistics</a>
                                </div>
                            </div>
                        </div>
                    </div>
                    <p class="text-center text-weserve-light font-medium">All Rights Reserved • Copyright Weserve by
                        BuildWithAngga 2024 in Bandung</p>
                </div>
            </footer>
        </div>
    </div>
</body>
<!-- Alpine JS -->
<script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
<!-- Swiper JS -->
<script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
<script src="{{ asset('js/script.js') }}"></script>
<script src="{{ asset('js/swiper.js') }}"></script>
<script src="{{ asset('js/tab.js') }}"></script>

</html>
