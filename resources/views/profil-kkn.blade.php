<!DOCTYPE html>
<html lang="en">
<!-- Head -->
<x-head title="Profil KKN | BUMDes Sungai Raya Utara"></x-head>

<style>
    @keyframes float-in-404 {
        from {
            opacity: 0;
            transform: translateY(50px);
        }

        to {
            opacity: 1;
            transform: translateY(0);
        }
    }

    .float-in-404 {
        animation: float-in-404 0.8s ease-out forwards;
    }
</style>

<body>
    <div id="main" class="w-full h-full min-h-screen overflow-hidden mx-auto">
        <div class="flex flex-col gap-[50px] pt-[50px]">
            <section id="hero-section" class="max-w-[1280px] w-full overflow-hidden mx-auto">
                <div class="px-[75px] pt-[80px] flex justify-between items-center">
                    <div class="flex flex-col gap-[40px]">
                        <div class="flex flex-col gap-[10px]">
                            <h1
                                class="font-clash-display text-[60px] leading-[100%] font-semibold min-h-[140px] line wave">
                                <span class="line">Error 404:</span><br>
                                <span class="line"><span class="text-weserve-beige">Halaman Tidak
                                        Ditemukan</span></span>
                            </h1>
                            <p class="font-medium text-weserve-grey">
                                Halaman yang Anda cari mungkin telah dihapus, berpindah, atau sementara tidak tersedia.
                            </p>
                            <div class="mt-4">
                                <a href="{{ route('beranda.index') }}"
                                    class="rounded-full border border-weserve-beige px-4 py-2 font-semibold hover:bg-weserve-beige-gradient hover:text-white">
                                    Kembali ke Beranda
                                </a>
                            </div>
                        </div>
                    </div>
                    <div class="w-[550px] h-[550px] shrink-0 overflow-hidden float-in-404"
                        style="animation-delay: 0.2s;">
                        <img src="assets/images/thumbnails/404.png" class="w-full h-full object-cover"
                            alt="404 Not Found">
                    </div>
                </div>
            </section>
        </div>
    </div>
</body>

</html>
