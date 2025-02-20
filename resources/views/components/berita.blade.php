<section id="berita" class="relative w-full pt-[100px]">
    <div class="mx-auto max-w-[1280px] space-y-[50px]">
        <div class="space-y-3 text-center">
            <h2 class="text-[50px] font-clash-display font-extrabold">Berita BUMDes</h2>
            <p class="text-lg font-medium">Dapatkan informasi terbaru seputar BUMDes, kisah sukses dari desa, serta
                inovasi yang memberikan dampak positif bagi masyarakat.</p>
        </div>

        <div class="news-container">
            <div class="news-row">
                <div class="news-column">
                    <div class="news-card">
                        <div class="news-card-header">
                            <a href="javascript:;" class="d-block">
                                <img src="assets/images/thumbnails/thumbnail-layanan-1.png" class="news-image">
                            </a>
                        </div>
                        <div class="news-card-body">
                            <span class="news-category-warning">Bisnis Sosial</span>
                            <a href="javascript:;" class="news-title">
                                Program Kemitraan UMKM
                            </a>
                            <p class="news-description">
                                Memberikan akses modal dan pelatihan bagi pelaku UMKM untuk meningkatkan kapasitas usaha
                                mereka.
                            </p>
                            <div class="news-author">
                                <img src="assets/images/thumbnails/team-1.png" alt="..." class="news-avatar">
                                <div class="news-author-info">
                                    <span class="news-author-name">Mathew Glock</span>
                                    <div class="news-post-date">
                                        <small>Diposting 20 Feb 2025</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-column">
                    <div class="news-card">
                        <div class="news-card-header">
                            <a href="javascript:;" class="d-block">
                                <img src="assets/images/thumbnails/thumbnail-layanan-3.png" class="news-image">
                            </a>
                        </div>
                        <div class="news-card-body">
                            <span class="news-category-beige">Bisnis Penyewaan</span>
                            <a href="javascript:;" class="news-title">
                                Penyewaan Alat Pertanian
                            </a>
                            <p class="news-description">
                                Menyediakan alat dan mesin pertanian untuk membantu petani meningkatkan hasil panen
                                mereka.
                            </p>
                            <div class="news-author">
                                <img src="assets/images/thumbnails/team-2.png" alt="..." class="news-avatar">
                                <div class="news-author-info">
                                    <span class="news-author-name">Chriss Smahos</span>
                                    <div class="news-post-date">
                                        <small>Diposting 2 minggu lalu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="news-column">
                    <div class="news-card">
                        <div class="news-card-header">
                            <a href="javascript:;" class="d-block">
                                <img src="assets/images/thumbnails/thumbnail-layanan-4.png" class="news-image">
                            </a>
                        </div>
                        <div class="news-card-body">
                            <span class="news-category-info">Lembaga Perantara</span>
                            <a href="javascript:;" class="news-title">
                                Pusat Distribusi Produk Lokal
                            </a>
                            <p class="news-description">
                                Membangun jaringan distribusi untuk memasarkan produk-produk lokal ke pasar yang lebih
                                luas.
                            </p>
                            <div class="news-author">
                                <img src="assets/images/thumbnails/team-3.png" alt="..." class="news-avatar">
                                <div class="news-author-info">
                                    <span class="news-author-name">Elijah Miller</span>
                                    <div class="news-post-date">
                                        <small>Diposting 1 minggu lalu</small>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <!-- Tombol Lihat Semua Berita -->
        <div class="text-center mt-6">
            <a href="{{ route('error.404') }}"
                class="rounded-full border border-weserve-beige px-4 py-2 font-semibold hover:bg-weserve-beige-gradient hover:text-white">
                Lihat Semua Berita
            </a>
        </div>

    </div>
</section>



<style>
    /* Specific styles for news section */
    .news-section {
        padding-top: 4rem;
        padding-bottom: 4rem;
        background-color: #f8f9fa;
    }

    .news-container {
        max-width: 1140px;
        margin: 0 auto;
        padding: 0 15px;
    }

    .news-row {
        display: flex;
        flex-wrap: wrap;
        margin-right: -15px;
        margin-left: -15px;
    }

    .news-column {
        position: relative;
        width: 33.33333%;
        padding-right: 15px;
        padding-left: 15px;
        transition: all 0.3s ease-in-out;
    }

    .news-column:hover {
        transform: scale(1.05);
        transition: all 0.3s ease-in-out;
    }

    .news-card {
        background-color: #fff;
        border-radius: 1rem;
        box-shadow: 0 10px 15px -3px rgba(0, 0, 0, 0.1), 0 4px 6px -2px rgba(0, 0, 0, 0.05);
        margin-bottom: 30px;
        overflow: hidden;
        border: 0;
    }

    .news-card-header {
        background-color: transparent;
        border-bottom: 0;
        position: relative;
        padding: 0;
        margin-left: 1rem;
        margin-right: 1rem;
        margin-top: 1rem;
        z-index: 1;
    }

    .news-card-body {
        padding: 1.5rem;
        padding-top: 1rem;
    }

    .news-image {
        max-width: 100%;
        height: auto;
        border-radius: 1rem;
    }

    .news-category-warning {
        background-image: linear-gradient(310deg, #f5a623, #f57c00);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-transform: uppercase;
        font-size: 0.75rem;
        font-weight: 700;
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
        display: inline-block;
    }

    .news-category-info {
        background-image: linear-gradient(310deg, #2196f3, #0d47a1);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-transform: uppercase;
        font-size: 0.75rem;
        font-weight: 700;
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
        display: inline-block;
    }

    .news-category-beige {
        background-image: linear-gradient(310deg, #6b4f3f, #b88f7f);
        -webkit-background-clip: text;
        -webkit-text-fill-color: transparent;
        text-transform: uppercase;
        font-size: 0.75rem;
        font-weight: 700;
        margin-top: 0.5rem;
        margin-bottom: 0.5rem;
        display: inline-block;
    }

    .news-title {
        color: #344767;
        text-decoration: none;
        font-size: 1.25rem;
        margin-bottom: 0.5rem;
        font-weight: 600;
        line-height: 1.2;
        display: block;
    }

    .news-description {
        color: #67748e;
        font-size: 0.875rem;
        line-height: 1.6;
        margin-bottom: 1.5rem;
    }

    .news-author {
        display: flex;
        align-items: center;
        margin-top: 20px;
    }

    .news-avatar {
        width: 40px;
        height: 40px;
        border-radius: 50%;
        object-fit: cover;
        box-shadow: 0 4px 6px -1px rgba(0, 0, 0, 0.1), 0 2px 4px -1px rgba(0, 0, 0, 0.06);
    }

    .news-author-info {
        display: flex;
        flex-direction: column;
        padding-left: 1rem;
    }

    .news-author-name {
        color: #344767;
        font-weight: 600;
        font-size: 0.875rem;
    }

    .news-post-date {
        color: #67748e;
        font-size: 0.75rem;
    }

    /* Responsive adjustments */
    @media (max-width: 992px) {
        .news-column {
            width: 100%;
        }

        .news-column:not(:last-child) {
            margin-bottom: 1.5rem;
        }
    }
</style>
