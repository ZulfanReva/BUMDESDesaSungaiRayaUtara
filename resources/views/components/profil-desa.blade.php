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
                    <h2 class="text-[32px] font-bold leading-[46px] font-clash-display">
                        Sejarah Singkat Desa
                    </h2>
                    <p class="text-lg font-medium leading-8 text-justify">Bermula dari kumpulan masyarakat
                        yang menetap dekat dengan sungai dan pegunungan, pada tahun 1980, sebuah resmi
                        sebuah desa dibangun. Kini, desa ini telah berkembang menjadi desa yang maju dengan
                        peran penting dalam pengelolaan sumber daya alam.</p>

                </div>

                <div class="tab-content hidden space-y-[10px]" id="visi-misi">
                    <h2 class="text-[32px] font-bold leading-[46px]">
                        Visi dan Misi Desa
                    </h2>
                    <p class="text-lg font-medium leading-8 text-justify">
                        <strong>Visi:</strong> Menjadi desa mandiri, maju, dan sejahtera melalui pengelolaan
                        sumber daya alam yang berkelanjutan serta peningkatan kualitas hidup masyarakat.
                    </p>
                    <p class="text-lg font-medium leading-8 text-justify">
                        <strong>Misi:</strong>
                    </p>
                    <ul class="list-disc pl-5">
                        <li>Meningkatkan kesejahteraan petani dan nelayan.</li>
                        <li>Meningkatkan kualitas pendidikan dan kesehatan warga.</li>
                        <li>Menjaga lingkungan dan memanfaatkan sumber daya alam bijak.</li>
                        <li>Mendorong partisipasi aktif masyarakat dalam pembangunan.</li>
                    </ul>
                    </p>
                </div>

                <div class="tab-content hidden space-y-[10px]" id="fasilitas-desa">
                    <h2 class="text-[32px] font-bold leading-[46px]">Fasilitas Desa</h2>
                    <p class="text-lg font-medium leading-8 text-justify">Desa kami menyediakan fasilitas
                        lengkap untuk
                        mendukung kesejahteraan warga, seperti akses pendidikan, layanan kesehatan, jaringan
                        irigasi, sarana olahraga, ruang publik, dan transportasi desa yang memadai.</p>
                </div>

                <div class="tab-content hidden space-y-[10px]" id="prestasi-desa">
                    <h2 class="text-[32px] font-bold leading-[46px]">Prestasi Desa
                    </h2>
                    <p class="text-lg font-medium leading-8 text-justify">Desa kami telah meraih berbagai
                        penghargaan
                        atas inovasi di bidang lingkungan, pertanian berkelanjutan, dan pelayanan publik,
                        menjadikannya contoh desa maju dan berprestasi di tingkat regional maupun nasional.
                    </p>
                </div>

                {{-- <ul class="space-y-5">
                    <li class="flex items-center text-lg font-bold">
                        <img src="assets/images/icons/checklist.svg" alt="" class="mr-3" />
                        Auto running when reaches certain number
                    </li>
                    <li class="flex items-center text-lg font-bold">
                        <img src="assets/images/icons/checklist.svg" alt="" class="mr-3" />
                        Sending message to server for repeatation
                    </li>
                    <li class="flex items-center text-lg font-bold">
                        <img src="assets/images/icons/checklist.svg" alt="" class="mr-3" />
                        Reporting and extracting the data
                    </li>
                </ul> --}}
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
    // Ambil semua button-tab dan tab-content
    const tabButtons = document.querySelectorAll('.tab-button');
    const tabContents = document.querySelectorAll('.tab-content');

    // Fungsi untuk mengubah tab yang aktif
    function switchTab(selectedTab) {
        // Sembunyikan semua konten, hilangkan border aktif, dan reset warna icon-wrapper
        tabContents.forEach(content => content.classList.add('hidden'));
        tabButtons.forEach(button => {
            button.classList.remove('border-weserve-beige');
            const iconWrapper = button.querySelector('.icon-wrapper');
            if (iconWrapper) {
                iconWrapper.style.backgroundColor = '#ABB4B1'; // Reset ke abu-abu
            }
        });

        // Tampilkan konten yang sesuai dengan tombol tab yang dipilih
        const tabId = selectedTab.getAttribute('data-tab');
        const activeTabContent = document.getElementById(tabId);
        activeTabContent.classList.remove('hidden');

        // Tambahkan border aktif pada tombol yang dipilih
        selectedTab.classList.add('border-weserve-beige');

        // Ubah warna icon-wrapper tombol yang dipilih
        const activeIconWrapper = selectedTab.querySelector('.icon-wrapper');
        if (activeIconWrapper) {
            activeIconWrapper.style.backgroundColor = '#6b4f3f'; // Ubah ke cokelat
        }
    }

    // Event listener untuk setiap tombol tab
    tabButtons.forEach(button => {
        button.addEventListener('click', () => {
            switchTab(button);
        });
    });

    // Set tab pertama sebagai aktif secara default
    switchTab(tabButtons[0]);
</script>
