<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<x-head></x-head>

<body>
    <div id="main" class="w-full h-full min-h-screen overflow-hidden mx-auto">

        <!-- Navigasi -->
        <x-navigasi></x-navigasi>

        <div class="flex flex-col gap-[100px] pt-[80px]">
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
                            <h1 class="font-clash-display text-[70px] leading-[100%] font-semibold min-h-[140px]">
                                Solusi<br>Usaha
                                Desa Berdaya.</h1>
                            <p class="font-medium text-weserve-grey">Kami menyediakan berbagai layanan untuk
                                memberdayakan
                                masyarakat desa melalui pengelolaan usaha bersama.</p>
                        </div>
                        <div class="flex gap-5 items-center">
                            <a href="#"
                                class="bg-weserve-beige rounded-full px-10 py-4 font-bold text-[18px] text-white">Lihat
                                Layanan</a>
                            <a href="#">
                                <div class="flex gap-[6px] items-center">
                                    <img src="assets/images/icons/hubungi-kami.png" class="w-6 h-6" alt="icon">
                                    <p class="font-semibold text-weserve-beige">Hubungi Kami</p>
                                </div>
                            </a>
                        </div>
                    </div>
                    <div class="w-[500px] h-[550px] shrink-0 overflow-hidden">
                        <img src="assets/images/thumbnails/thumbnail-bumdes.png" class="w-full h-full object-cover"
                            alt="thumbnail">
                    </div>
                </div>
            </section>


            <section id="brands-section" class="max-w-[1280px] w-full overflow-hidden mx-auto">
                <div class="px-[75px] flex gap-[50px] justify-center">
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
                </div>
            </section>

            <section id="best-choices" class="max-w-[1280px] w-full overflow-hidden mx-auto">
                <div class="flex flex-col gap-[30px] px-[75px]">
                    <h2 class="font-clash-display font-semibold text-[46px] text-center">Your Best Choice</h2>
                    <div class="grid grid-cols-4 gap-[30px]">
                        <div
                            class="relative flex flex-col gap-[30px] px-5 py-[30px] bg-white hover:bg-weserve-navy rounded-[16px] group transition-all duration-300">
                            <div class="hidden absolute right-1 -translate-y-4 group-hover:block opacity-80">
                                <img src="assets/images/icons/ellipse.svg" alt="shadow">
                            </div>
                            <div
                                class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                <img src="assets/images/icons/hierarchy-square.svg" alt="icon">
                            </div>
                            <div
                                class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                <img src="assets/images/icons/hierarchy-square-white.svg" alt="icon">
                            </div>
                            <div class="flex flex-col gap-1 z-10">
                                <h3 class="font-bold text-[22px] group-hover:text-white transition-all duration-300">
                                    Extra Layers</h3>
                                <p class="font-medium leading-[28px] text-weserve-grey group-hover:text-weserve-light">
                                    Making your project more secure avoiding DDoS</p>
                            </div>
                            <div>
                                <a href="#"
                                    class="font-semibold text-weserve-purple group-hover:text-white transition-all duration-300">Learn
                                    More</a>
                            </div>
                        </div>
                        <div
                            class="relative flex flex-col gap-[30px] px-5 py-[30px] bg-white hover:bg-weserve-navy rounded-[16px] group transition-all duration-300">
                            <div class="hidden absolute right-1 -translate-y-4 group-hover:block opacity-80">
                                <img src="assets/images/icons/ellipse.svg" alt="shadow">
                            </div>
                            <div
                                class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                <img src="assets/images/icons/3dcube.svg" alt="icon">
                            </div>
                            <div
                                class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                <img src="assets/images/icons/3dcube-white.svg" alt="icon">
                            </div>
                            <div class="flex flex-col gap-1 z-10">
                                <h3 class="font-bold text-[22px] group-hover:text-white transition-all duration-300">
                                    Customizable</h3>
                                <p class="font-medium leading-[28px] text-weserve-grey group-hover:text-weserve-light">
                                    Only install what your business needs to grow
                                </p>
                            </div>
                            <div>
                                <a href="#"
                                    class="font-semibold text-weserve-purple group-hover:text-white transition-all duration-300">Learn
                                    More</a>
                            </div>
                        </div>
                        <div
                            class="relative flex flex-col gap-[30px] px-5 py-[30px] bg-white hover:bg-weserve-navy rounded-[16px] group transition-all duration-300">
                            <div class="hidden absolute right-1 -translate-y-4 group-hover:block opacity-80">
                                <img src="assets/images/icons/ellipse.svg" alt="shadow">
                            </div>
                            <div
                                class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                <img src="assets/images/icons/status-up-purple.svg" alt="icon">
                            </div>
                            <div
                                class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                <img src="assets/images/icons/status-up.svg" alt="icon">
                            </div>
                            <div class="flex flex-col gap-1 z-10">
                                <h3 class="font-bold text-[22px] group-hover:text-white transition-all duration-300">AI
                                    Automation</h3>
                                <p class="font-medium leading-[28px] text-weserve-grey group-hover:text-weserve-light">
                                    Decide the business flow based on latest reports
                                </p>
                            </div>
                            <div>
                                <a href="#"
                                    class="font-semibold text-weserve-purple group-hover:text-white transition-all duration-300">Learn
                                    More</a>
                            </div>
                        </div>
                        <div
                            class="relative flex flex-col gap-[30px] px-5 py-[30px] bg-white hover:bg-weserve-navy rounded-[16px] group transition-all duration-300">
                            <div class="hidden absolute right-1 -translate-y-4 group-hover:block opacity-80">
                                <img src="assets/images/icons/ellipse.svg" alt="shadow">
                            </div>
                            <div
                                class="block w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:hidden transition-all duration-300">
                                <img src="assets/images/icons/driver-refresh.svg" alt="icon">
                            </div>
                            <div
                                class="hidden w-[46px] h-[46px] shrink-0 overflow-hidden group-hover:block transition-all duration-300">
                                <img src="assets/images/icons/driver-refresh-white.svg" alt="icon">
                            </div>
                            <div class="flex flex-col gap-1 z-10">
                                <h3 class="font-bold text-[22px] group-hover:text-white transition-all duration-300">
                                    Auto-Scalling</h3>
                                <p class="font-medium leading-[28px] text-weserve-grey group-hover:text-weserve-light">
                                    Have a long weekend without worrying any loss
                                </p>
                            </div>
                            <div>
                                <a href="#"
                                    class="font-semibold text-weserve-purple group-hover:text-white transition-all duration-300">Learn
                                    More</a>
                            </div>
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

    <!-- Alpine JS -->
    <script defer src="https://cdn.jsdelivr.net/npm/alpinejs@3.x.x/dist/cdn.min.js"></script>
    <!-- Swiper JS -->
    <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>
    <script src="js/script.js"></script>
    <script src="js/swiper.js"></script>
</body>

</html>
