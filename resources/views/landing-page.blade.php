<x-layout>
    <div class="floating-element floating-1"></div>
    <div class="floating-element floating-2"></div>
    <div class="floating-element floating-3"></div>
    <div class="floating-element floating-4"></div>
    <div class="floating-element floating-5"></div>
    <div class="floating-element floating-6"></div>

    <div id="load" class="load">
        <div class="load-content">
            <div id="load-status">⭐</div>
            <h1 id="load-title">StarRoom</h1>
            <h3 id="load-text">Memuat pengalaman terbaik...</h3>
        </div>
    </div>

    <!-- Hero Section -->
    <section class="hero">
        <div class="hero-content">
            <div class="hero-text">
                <h1 class="hero-title">
                    <span id="typing-text">Temukan Kamar Impian Anda</span>
                    <span class="cursor">|</span>
                </h1>
                <p class="hero-subtitle fade-in-element">
                    Platform terpercaya untuk menyewa kamar berkualitas di seluruh
                    Indonesia
                </p>
                <div class="hero-stats fade-in-element">
                    <div class="stat-item">
                        <span class="stat-number" data-target="10000">0</span>
                        <span class="stat-label">Kamar Tersedia</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="8">0</span>
                        <span class="stat-label">Kota Utama</span>
                    </div>
                    <div class="stat-item">
                        <span class="stat-number" data-target="25000">0</span>
                        <span class="stat-label">Pengguna Puas</span>
                    </div>
                </div>
                <div class="hero-buttons fade-in-element">
                    <button class="btn-primary magnetic-btn" onclick="location.href='/login'">
                        Mulai Pencarian 🔍
                    </button>
                    <button class="btn-secondary magnetic-btn"
                        onclick="document.querySelector('.about-section').scrollIntoView({behavior: 'smooth'})">
                        Pelajari Lebih Lanjut
                    </button>
                </div>
            </div>
            <div class="hero-visual fade-in-element">
                <div class="hero-card tilt-card">
                    <div class="card-header">
                        <div class="card-avatar">🏡</div>
                        <div class="card-info">
                            <h4>Hotel Terpopuler</h4>
                            <p>Nusa Dua Hotel</p>
                        </div>
                    </div>
                    <div class="card-image">
                        <img src="{{ asset('assets/hotel/NusaDuaBali.jpeg') }}" alt="Kamar Premium"
                            class="room-photo" />
                    </div>
                    <div class="card-footer">
                        <span class="price">Rp 550.000 / malam</span>
                        <div class="rating">⭐ 4.9</div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- About Section -->
    <section class="about-section" id="tentang">
        <div class="container">
            <div class="section-header">
                <h2 class="section-title">Mengapa Pilih StarRoom?</h2>
                <p class="section-subtitle">
                    Kami memberikan pengalaman terbaik dalam mencari dan menyewa kamar
                </p>
            </div>

            <div class="features-grid">
                <div class="feature-card">
                    <div class="feature-icon">🔍</div>
                    <h3 class="feature-title">Pencarian Mudah</h3>
                    <p class="feature-description">
                        Temukan kamar sesuai kriteria Anda dengan filter canggih dan
                        pencarian yang intuitif
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">✅</div>
                    <h3 class="feature-title">Kamar Terverifikasi</h3>
                    <p class="feature-description">
                        Semua kamar telah melalui proses verifikasi ketat untuk memastikan
                        kualitas dan keamanan
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">💰</div>
                    <h3 class="feature-title">Harga Transparan</h3>
                    <p class="feature-description">
                        Tidak ada biaya tersembunyi. Semua harga sudah termasuk listrik,
                        air, dan fasilitas
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">🛡️</div>
                    <h3 class="feature-title">Transaksi Aman</h3>
                    <p class="feature-description">
                        Sistem pembayaran yang aman dan terpercaya dengan jaminan uang
                        kembali
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">📞</div>
                    <h3 class="feature-title">Dukungan 24/7</h3>
                    <p class="feature-description">
                        Tim customer service kami siap membantu Anda kapan saja, dimana
                        saja
                    </p>
                </div>

                <div class="feature-card">
                    <div class="feature-icon">⚡</div>
                    <h3 class="feature-title">Proses Cepat</h3>
                    <p class="feature-description">
                        Booking instan tanpa ribet. Dari pencarian hingga kontrak hanya
                        dalam hitungan menit
                    </p>
                </div>
            </div>
        </div>
    </section>

    <!-- CTA Section -->
    <section class="cta-section">
        <div class="container">
            <div class="cta-content">
                <h2 class="cta-title">Siap Menemukan Kamar Impian Anda?</h2>
                <p class="cta-subtitle">
                    Bergabung dengan ribuan pengguna yang telah merasakan kemudahan
                    StarRoom
                </p>
                <div class="cta-buttons">
                    <button class="btn-primary" onclick="location.href='/login'">
                        Mulai Sekarang 🚀
                    </button>
                </div>
            </div>
        </div>
    </section>

</x-layout>
