<section id="testimoni" class="relative w-full pt-[100px]">
    <div class="mx-auto max-w-[1280px] space-y-[50px]">

        <div class="space-y-3 text-center">
            <h2 class="text-[50px] font-clash-display font-extrabold">Testimoni</h2>
            <p class="text-lg font-medium">Dengarkan langsung dari mitra, pelanggan, dan masyarakat tentang pengalaman
                mereka bekerja sama dengan kami dan dampak positif yang telah dirasakan.</p>
        </div>

        <div class="testimoni-row mt-6">
            <div class="testimoni-col-lg-4 testimoni-col-md-8">
                <div>
                    <div class="testimoni-card-body">
                        <div class="testimoni-author">
                            <img src="assets/images/thumbnails/team-1.png" alt="..." class="avatar shadow">
                            <div class="testimoni-name ps-2">
                                <span>Rina Sari</span>
                                <div class="stats">
                                    <small><i class="far fa-clock"></i> Sekda PEMKAB. HSS</small>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">"Layanan BUMDes sangat memudahkan kami dalam memenuhi kebutuhan sehari-hari."
                        </p>
                        <div class="testimoni-rating mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimoni-col-lg-4 testimoni-col-md-8 ms-md-auto bigger-card">
                <div class="testimoni-card bg-weserve-beige-gradient">
                    <div class="testimoni-card-body">
                        <div class="testimoni-author align-items-center">
                            <img src="assets/images/thumbnails/team-2.png" alt="..." class="avatar shadow">
                            <div class="testimoni-name ps-2">
                                <span class="text-white">Andi Pratama</span>
                                <div class="stats">
                                    <small class="text-white">Kepala Wilayah HSS Kementerian DPDTT</small>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4 text-white">"Proses pengajuan modal usaha BUMDes sangat cepat dan mudah
                            dilakukan."</p>
                        <div class="testimoni-rating mt-3">
                            <i class="fas fa-star text-white"></i>
                            <i class="fas fa-star text-white"></i>
                            <i class="fas fa-star text-white"></i>
                            <i class="far fa-star text-white"></i>
                            <i class="far fa-star text-white"></i>
                        </div>
                    </div>
                </div>
            </div>

            <div class="testimoni-col-lg-4 testimoni-col-md-8">
                <div>
                    <div class="testimoni-card-body">
                        <div class="testimoni-author">
                            <img src="assets/images/thumbnails/team-3.png" alt="..." class="avatar shadow">
                            <div class="testimoni-name ps-2">
                                <span>Pak Wawan</span>
                                <div class="stats">
                                    <small><i class="far fa-clock"></i>Warga Desa Sungai Raya Utara</small>
                                </div>
                            </div>
                        </div>
                        <p class="mt-4">"Pelayanan BUMDes sangat membantu dalam mempermudah transaksi di desa."</p>
                        <div class="testimoni-rating mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <style>
        /* CSS untuk desain card testimoni */
        .testimoni-row {
            display: flex;
            flex-wrap: wrap;
            margin-top: 1.5rem;
        }

        .testimoni-col-lg-4,
        .testimoni-col-md-8 {
            flex: 0 0 auto;
            width: 100%;
            max-width: 33.333%;
            padding: 1rem;
        }

        .testimoni-card {
            border-radius: 15px;
            box-shadow: 0 4px 6px rgba(0, 0, 0, 0.1);
            overflow: hidden;
        }

        .testimoni-card-plain {
            background-color: #ffffff;
            border: 1px solid #eaeaea;
        }

        .testimoni-card-body {
            padding: 1.5rem;
        }

        .testimoni-author {
            display: flex;
            align-items: center;
        }

        .testimoni-author img.avatar {
            width: 50px;
            height: 50px;
            border-radius: 50%;
            margin-right: 1rem;
            object-fit: cover;
            box-shadow: 0 2px 4px rgba(0, 0, 0, 0.1);
        }

        .testimoni-name {
            font-size: 1rem;
            font-weight: 600;
            color: #333;
        }

        .testimoni-name .stats {
            font-size: 0.85rem;
            color: #888;
            margin-top: 0.25rem;
        }

        .testimoni-rating {
            margin-top: 1rem;
        }

        .testimoni-rating i {
            color: #f39c12;
            margin-right: 0.25rem;
        }

        .bigger-card {
            transform: scale(1.1);
            /* Membuat card sedikit lebih besar */
            transition: transform 0.3s ease;
            /* Efek transisi untuk memperhalus perubahan ukuran */
        }

        .bigger-card:hover {
            transform: scale(1.1);
            /* Menjaga ukuran tetap lebih besar saat dihover */
        }

        /* Responsif */
        @media (max-width: 768px) {
            .testimoni-col-lg-4 {
                max-width: 100%;
            }
        }
    </style>
</section>
