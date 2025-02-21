<section id="profil-desa" class="relative w-full pt-[100px]">
    <div class="mx-auto max-w-[1280px] space-y-[50px] px-[124px]">
        <div class="space-y-3 text-center">
            <h2 class="text-[50px] font-clash-display font-extrabold">Profil Desa</h2>
            <p class="text-lg font-medium">Mengetahui lebih dalam tentang desa kami, sejarah, visi, misi,
                fasilitas, dan prestasi yang telah diraih.</p>
        </div>

        <div class="flex items-start justify-between border-b border-[#E7EBEA] font-[Poppins]">
            <button
                class="tab-button flex w-fit items-center space-x-4 border-b-[3px] border-transparent pb-[30px] font-medium transition-all duration-300 hover:border-weserve-beige"
                data-tab="sejarah-desa">
                <div
                    class="icon-wrapper grid h-[50px] w-[50px] place-items-center rounded-full bg-[#ABB4B1] transition-all duration-300">
                    <img src="assets/images/icons/sejarah-desa-white.png" alt="Sejarah Desa"
                        class="icon stroke-white transition-all duration-300" style="width: 48px; height: 48px;" />
                </div>
                <span class="text-xl">Sejarah Desa</span>
            </button>

            <button
                class="tab-button flex w-fit items-center space-x-4 border-b-[3px] border-transparent pb-[30px] font-medium transition-all duration-300 hover:border-weserve-beige"
                data-tab="visi-misi">
                <div
                    class="icon-wrapper grid h-[50px] w-[50px] place-items-center rounded-full bg-[#ABB4B1] transition-all duration-300">
                    <img src="assets/images/icons/visi-misi-white.png" alt="Visi Misi"
                        class="icon stroke-white transition-all duration-300" style="width: 40px; height: 40px;" />
                </div>
                <span class="text-xl">Visi dan Misi</span>
            </button>

            <button
                class="tab-button flex w-fit items-center space-x-4 border-b-[3px] border-transparent pb-[30px] font-medium transition-all duration-300 hover:border-weserve-beige"
                data-tab="fasilitas-desa">
                <div
                    class="icon-wrapper grid h-[50px] w-[50px] place-items-center rounded-full bg-[#ABB4B1] transition-all duration-300">
                    <img src="assets/images/icons/fasilitas-desa-white.png" alt="Fasilitas Desa"
                        class="icon stroke-white transition-all duration-300" style="width: 40px; height: 40px;" />
                </div>
                <span class="text-xl">Fasilitas Desa</span>
            </button>

            <button
                class="tab-button flex w-fit items-center space-x-4 border-b-[3px] border-transparent pb-[30px] font-medium transition-all duration-300 hover:border-weserve-beige"
                data-tab="prestasi-desa">
                <div
                    class="icon-wrapper grid h-[50px] w-[50px] place-items-center rounded-full bg-[#ABB4B1] transition-all duration-300">
                    <img src="assets/images/icons/prestasi-desa-white.png" alt="Prestasi Desa"
                        class="icon stroke-white transition-all duration-300" style="width: 40px; height: 40px;" />
                </div>
                <span class="text-xl">Prestasi Desa</span>
            </button>
        </div>

        <div class="flex items-center justify-between gap-[50px] px-[30px]">
            <div class="w-[450px]" id="thumbnail-profil-desa">
                <img src="assets/images/thumbnails/thumbnail-profil-desa.png" alt="" loading="lazy" />
            </div>

            <div class="max-w-[470px] space-y-[30px]">
                <div class="tab-content space-y-[10px]" id="sejarah-desa">
                    <h2 class="text-[32px] font-bold leading-[46px] font-clash-display">Sejarah Singkat Desa</h2>
                    <p class="text-lg font-medium leading-8 text-justify">
                        {!! $profil->sejarah_desa ?? 'Belum ada data sejarah desa.' !!}
                    </p>
                </div>

                <div class="tab-content hidden space-y-[10px]" id="visi-misi">
                    <h2 class="text-[32px] font-bold leading-[46px]">Visi dan Misi Desa</h2>
                    <div class="text-lg font-medium leading-8 text-justify">
                        @if (isset($profil->visi_misi))
                            {!! nl2br(e($profil->visi_misi)) !!}
                        @else
                            Belum ada data visi dan misi desa.
                        @endif
                    </div>
                </div>

                <div class="tab-content hidden space-y-[10px]" id="fasilitas-desa">
                    <h2 class="text-[32px] font-bold leading-[46px]">Fasilitas Desa</h2>
                    <p class="text-lg font-medium leading-8 text-justify">
                        {!! $profil->fasilitas_desa ?? 'Belum ada data fasilitas desa.' !!}
                    </p>
                </div>

                <div class="tab-content hidden space-y-[10px]" id="prestasi-desa">
                    <h2 class="text-[32px] font-bold leading-[46px]">Prestasi Desa</h2>
                    <div class="text-lg font-medium leading-8 text-justify">
                        @if (isset($profil->prestasi_desa))
                            {!! nl2br(e($profil->prestasi_desa)) !!}
                        @else
                            Belum ada data prestasi desa.
                        @endif
                    </div>
                </div>

                <div>
                    <a href="https://maps.app.goo.gl/6QcAhRHxBJJ7LPuy7" target="_blank"
                        class="rounded-full border border-weserve-beige px-4 py-2 font-semibold hover:bg-weserve-beige-gradient hover:text-white">
                        Lokasi Desa
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<script>
    document.addEventListener("DOMContentLoaded", function() {
        // Ambil semua button-tab, tab-content, dan footer links
        const tabButtons = document.querySelectorAll(".tab-button");
        const tabContents = document.querySelectorAll(".tab-content");
        const footerLinks = document.querySelectorAll("footer a[data-tab]");

        // Fungsi untuk mengganti tab yang aktif
        function switchTab(tabId) {
            // Sembunyikan semua konten tab
            tabContents.forEach((content) => content.classList.add("hidden"));

            // Reset semua button-tab
            tabButtons.forEach((button) => {
                button.classList.remove("border-weserve-beige");
                const iconWrapper = button.querySelector(".icon-wrapper");
                if (iconWrapper) {
                    iconWrapper.style.backgroundColor = "#ABB4B1"; // Reset ke abu-abu
                }
            });

            // Temukan button-tab yang sesuai dengan data-tab
            const targetTabButton = document.querySelector(`.tab-button[data-tab="${tabId}"]`);
            const activeTabContent = document.getElementById(tabId);

            if (targetTabButton && activeTabContent) {
                // Aktifkan tab yang dipilih
                activeTabContent.classList.remove("hidden");
                targetTabButton.classList.add("border-weserve-beige");

                // Ubah warna icon-wrapper tombol yang dipilih
                const activeIconWrapper = targetTabButton.querySelector(".icon-wrapper");
                if (activeIconWrapper) {
                    activeIconWrapper.style.backgroundColor = "#6b4f3f"; // Ubah ke cokelat
                }
            }
        }

        // Set default tab ke "Sejarah Desa"
        switchTab("sejarah-desa");

        // Event listener untuk setiap tombol tab di dalam section profil-desa
        tabButtons.forEach((button) => {
            button.addEventListener("click", function() {
                const tabId = button.getAttribute("data-tab");
                switchTab(tabId);
            });
        });

        // Event listener untuk tautan di footer
        footerLinks.forEach((link) => {
            link.addEventListener("click", function(e) {
                e.preventDefault(); // Mencegah scroll default

                const tabId = link.getAttribute("data-tab");

                // Aktifkan tab yang sesuai
                switchTab(tabId);

                // Scroll ke section Profil Desa
                const profilDesaSection = document.getElementById("profil-desa");
                if (profilDesaSection) {
                    profilDesaSection.scrollIntoView({
                        behavior: "smooth",
                        block: "start",
                    });
                }
            });
        });
    });
</script>
