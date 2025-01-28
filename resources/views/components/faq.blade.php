<section id="faq" class="relative w-full pt-[100px]">
    <div class="mx-auto max-w-[1280px] space-y-[50px] pb-[100px]">

        <div class="space-y-3 text-center">
            <h2 class="text-[50px] font-clash-display font-extrabold">Pertanyaan yang Sering Diajukan</h2>
            <p class="text-lg font-medium">Cari tahu lebih banyak tentang layanan yang kami tawarkan di BUMDes untuk
                mendukung kemajuan ekonomi dan kesejahteraan masyarakat desa.</p>
        </div>

        <div class="w-full flex gap-[30px]">
            <div class="flex flex-col gap-[20px] w-full">
                <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                    <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                        <h4 class="text-[20px] font-bold">Apa saja layanan yang disediakan oleh BUMDes?</h4>
                        <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }" class="transition-all duration-300">
                            <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' : 'assets/images/icons/arrow-down-whitebg.svg'" alt="icon">
                        </div>
                    </div>
                    <div class="flex flex-col gap-5 pt-[20px]" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                        <p class="text-weserve-grey font-medium leading-[32px] text-justify">BUMDes menyediakan berbagai layanan untuk masyarakat desa, seperti usaha mikro, modal usaha, dan penyediaan fasilitas umum yang mendukung perekonomian desa.</p>
                        <a href="#" class="text-weserve-beige font-semibold">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                    <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                        <h4 class="text-[20px] font-bold">Bagaimana cara mengajukan bantuan modal usaha di BUMDes?</h4>
                        <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }" class="transition-all duration-300">
                            <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' : 'assets/images/icons/arrow-down-whitebg.svg'" alt="icon">
                        </div>
                    </div>
                    <div class="flex flex-col gap-5 pt-[20px]" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                        <p class="text-weserve-grey font-medium leading-[32px] text-justify">Proses pengajuan modal usaha di BUMDes sangat mudah. Cukup lengkapi dokumen yang diperlukan dan ajukan permohonan melalui sistem kami.</p>
                        <a href="#" class="text-weserve-beige font-semibold">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                    <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                        <h4 class="text-[20px] font-bold">Apakah ada jaminan tidak ada kerugian sama sekali?</h4>
                        <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }" class="transition-all duration-300">
                            <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' : 'assets/images/icons/arrow-down-whitebg.svg'" alt="icon">
                        </div>
                    </div>
                    <div class="flex flex-col gap-5 pt-[20px]" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                        <p class="text-weserve-grey font-medium leading-[32px] text-justify">Meskipun kami berusaha untuk meminimalkan kerugian, semua investasi dan pengelolaan usaha tetap memerlukan kewaspadaan dan manajemen yang baik.</p>
                        <a href="#" class="text-weserve-beige font-semibold">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
            </div>
            <div class="flex flex-col gap-[20px] w-full">
                <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                    <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                        <h4 class="text-[20px] font-bold">Bagaimana jika data usaha saya hilang?</h4>
                        <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }" class="transition-all duration-300">
                            <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' : 'assets/images/icons/arrow-down-whitebg.svg'" alt="icon">
                        </div>
                    </div>
                    <div class="flex flex-col gap-5 pt-[20px]" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                        <p class="text-weserve-grey font-medium leading-[32px] text-justify">Data usaha yang diajukan melalui sistem BUMDes akan selalu terjamin dan dikelola dengan baik untuk menghindari kehilangan data.</p>
                        <a href="#" class="text-weserve-beige font-semibold">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-white rounded-[16px] p-5" x-data="{ isOpen: false }">
                    <div class="flex justify-between cursor-pointer items-center" @click="isOpen = !isOpen">
                        <h4 class="text-[20px] font-bold">Apa keuntungan menggunakan layanan BUMDes untuk usaha kecil?</h4>
                        <div :class="{ 'bg-weserve-navy rounded-full w-[30px] h-[30px] flex items-center justify-center': isOpen }" class="transition-all duration-300">
                            <img :src="isOpen ? 'assets/images/icons/arrow-up-navybg.svg' : 'assets/images/icons/arrow-down-whitebg.svg'" alt="icon">
                        </div>
                    </div>
                    <div class="flex flex-col gap-5 pt-[20px]" x-show="isOpen" x-transition x-transition:enter.duration.1000ms x-transition.delay.50m>
                        <p class="text-weserve-grey font-medium leading-[32px] text-justify">Layanan BUMDes memberikan kesempatan untuk mendapatkan modal, fasilitas usaha, dan pembinaan yang sangat membantu dalam mengembangkan usaha kecil di desa.</p>
                        <a href="#" class="text-weserve-beige font-semibold">Pelajari Lebih Lanjut</a>
                    </div>
                </div>
                <div class="bg-weserve-beige-gradient rounded-[16px] p-5" onclick="sendMessageToWA()">
                    <div class="flex justify-between cursor-pointer items-center">
                        <div class="flex items-center gap-[6px]">
                            <img src="assets/images/icons/device-message-white.svg" class="w-6 h-6" alt="icons">
                            <h4 class="text-[20px] font-semibold text-white">Silahkan hubungi kami untuk pertanyaan lebih lanjut</h4>
                        </div>
                        <a href="#" onclick="sendMessageToWA()">
                            <img src="assets/images/icons/arrow-right-whitebg.svg" class="w-[30px] h-[30px]" alt="icons">
                        </a>
                    </div>
                </div>
            </div>
        </div>
        

    </div>
</section>
