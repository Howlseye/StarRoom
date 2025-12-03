<x-layout>
    <div class="dashboard-container">
        <!-- Dashboard Header -->
        <section class="dashboard-header">
            <div class="container">
                <div class="header-content">
                    <div>
                        <h1 class="dashboard-title">Selamat datang kembali, {{ Auth::user()->name }}! 👋</h1>
                        <p class="dashboard-subtitle">Kelola akun dan pesanan Anda di StarRoom</p>
                    </div>
                    <div class="user-info">
                        <div class="info-badge">
                            <span class="info-label" style="color:#e0e7ff">Member sejak</span>
                            <span class="info-value">{{ Auth::user()->created_at->format('d M Y') }}</span>
                        </div>
                    </div>
                </div>
            </div>
        </section>

        <!-- Dashboard Content -->
        <section class="dashboard-content">
            <div class="container">
                <!-- Stats Cards -->
                <div class="stats-grid">
                    <div class="stat-card">
                        <div class="stat-icon">📍</div>
                        <h3 class="stat-title">Pencarian Terbaru</h3>
                        <p class="stat-value">Mulai pencarian baru</p>
                        <a href="/HomePage/pilihkota" class="stat-link">Cari Kamar →</a>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">📅</div>
                        <h3 class="stat-title">Pesanan Aktif</h3>
                        <p class="stat-value">Lihat semua pesanan</p>
                        <a href="#" class="stat-link">Kelola Pesanan →</a>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">⭐</div>
                        <h3 class="stat-title">Rating & Review</h3>
                        <p class="stat-value">Bagikan pengalaman Anda</p>
                        <a href="#" class="stat-link">Beri Rating →</a>
                    </div>

                    <div class="stat-card">
                        <div class="stat-icon">👤</div>
                        <h3 class="stat-title">Profil</h3>
                        <p class="stat-value">Edit informasi akun</p>
                        <a href="{{ route('profile.edit') }}" class="stat-link">Edit Profil →</a>
                    </div>
                </div>

                <!-- Dashboard Sections -->
                <div class="dashboard-sections">
                    <!-- Account Info Section -->
                    <div class="dashboard-section">
                        <div class="section-header">
                            <h2 class="section-title">📧 Informasi Akun</h2>
                        </div>
                        <div class="section-body">
                            <div class="info-grid">
                                <div class="info-item">
                                    <span class="info-label">Nama Lengkap</span>
                                    <span class="info-text">{{ Auth::user()->name }}</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Email</span>
                                    <span class="info-text">{{ Auth::user()->email }}</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Status Akun</span>
                                    <span class="info-badge-success">Aktif</span>
                                </div>
                                <div class="info-item">
                                    <span class="info-label">Bergabung Pada</span>
                                    <span class="info-text">{{ Auth::user()->created_at->format('d M Y H:i') }}</span>
                                </div>
                            </div>
                            <a href="{{ route('profile.edit') }}" class="btn-edit">Edit Profil</a>
                        </div>
                    </div>

                    <!-- Quick Actions Section -->
                    <div class="dashboard-section">
                        <div class="section-header">
                            <h2 class="section-title">⚡ Aksi Cepat</h2>
                        </div>
                        <div class="section-body">
                            <div class="action-buttons">
                                <a href="/HomePage/pilihkota" class="action-btn action-primary">
                                    🔍 Cari Kamar
                                </a>
                                <a href="/HomePage/pilihhotel" class="action-btn action-secondary">
                                    🏨 Lihat Hotel
                                </a>
                                <a href="#" class="action-btn action-secondary">
                                    📋 Pesanan Saya
                                </a>
                                <a href="{{ route('profile.edit') }}" class="action-btn action-secondary">
                                    ⚙️ Pengaturan
                                </a>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </section>
    </div>

    <style>
        .dashboard-container {
            background: linear-gradient(135deg, #667eea 0%, #764ba2 100%);
            min-height: calc(100vh - 70px);
            padding: 40px 0;
        }

        .dashboard-header {
            margin-bottom: 40px;
        }

        .header-content {
            display: flex;
            justify-content: space-between;
            align-items: center;
            gap: 30px;
            flex-wrap: wrap;
        }

        .dashboard-title {
            font-size: 2.5rem;
            font-weight: 800;
            color: white;
            margin-bottom: 10px;
            background: linear-gradient(45deg, #ffffff, #e0e7ff);
            -webkit-background-clip: text;
            -webkit-text-fill-color: transparent;
            background-clip: text;
        }

        .dashboard-subtitle {
            font-size: 1.1rem;
            color: rgba(255, 255, 255, 0.9);
        }

        .user-info {
            background: rgba(255, 255, 255, 0.1);
            backdrop-filter: blur(10px);
            padding: 20px 30px;
            border-radius: 15px;
            border: 1px solid rgba(255, 255, 255, 0.2);
        }

        .info-badge {
            display: flex;
            flex-direction: column;
            gap: 5px;
        }

        .info-label {
            font-size: 0.9rem;
            color: rgba(255, 255, 255, 0.8);
        }

        .info-value {
            font-size: 1.3rem;
            font-weight: 700;
            color: white;
        }

        .dashboard-content {
            position: relative;
            z-index: 3;
        }

        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 0 20px;
        }

        .stats-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }

        .stat-card {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            padding: 25px;
            border-radius: 15px;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
            transition: all 0.3s ease;
        }

        .stat-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 40px rgba(0, 0, 0, 0.15);
        }

        .stat-icon {
            font-size: 2.5rem;
            margin-bottom: 15px;
        }

        .stat-title {
            font-size: 1.1rem;
            font-weight: 700;
            color: #1e293b;
            margin-bottom: 5px;
        }

        .stat-value {
            font-size: 0.95rem;
            color: #64748b;
            margin-bottom: 15px;
        }

        .stat-link {
            color: #6366f1;
            font-weight: 600;
            text-decoration: none;
            transition: color 0.3s ease;
        }

        .stat-link:hover {
            color: #4f46e5;
        }

        .dashboard-sections {
            display: grid;
            grid-template-columns: 1fr;
            gap: 25px;
        }

        .dashboard-section {
            background: rgba(255, 255, 255, 0.95);
            backdrop-filter: blur(10px);
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 10px 30px rgba(0, 0, 0, 0.1);
        }

        .section-header {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            padding: 20px 25px;
        }

        .section-title {
            font-size: 1.3rem;
            font-weight: 700;
            color: white;
            margin: 0;
        }

        .section-body {
            padding: 25px;
        }

        .info-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 20px;
            margin-bottom: 20px;
        }

        .info-item {
            display: flex;
            flex-direction: column;
            gap: 8px;
        }

        .info-label {
            font-size: 0.9rem;
            color: #64748b;
            font-weight: 600;
        }

        .info-text {
            font-size: 1rem;
            color: #1e293b;
            font-weight: 500;
        }

        .info-badge-success {
            display: inline-block;
            background: #10b981;
            color: white;
            padding: 6px 12px;
            border-radius: 20px;
            font-size: 0.85rem;
            font-weight: 600;
            width: fit-content;
        }

        .btn-edit {
            display: inline-block;
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            color: white;
            padding: 12px 24px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            transition: all 0.3s ease;
            border: none;
            cursor: pointer;
        }

        .btn-edit:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.3);
            color: white;
            text-decoration: none;
        }

        .action-buttons {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(180px, 1fr));
            gap: 15px;
        }

        .action-btn {
            padding: 15px 20px;
            border-radius: 10px;
            text-decoration: none;
            font-weight: 600;
            text-align: center;
            transition: all 0.3s ease;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 8px;
        }

        .action-primary {
            background: linear-gradient(135deg, #6366f1, #4f46e5);
            color: white;
            box-shadow: 0 5px 15px rgba(99, 102, 241, 0.3);
        }

        .action-primary:hover {
            transform: translateY(-2px);
            box-shadow: 0 8px 20px rgba(99, 102, 241, 0.4);
            color: white;
            text-decoration: none;
        }

        .action-secondary {
            background: rgba(99, 102, 241, 0.08);
            color: #6366f1;
            border: 1px solid rgba(99, 102, 241, 0.2);
        }

        .action-secondary:hover {
            background: rgba(99, 102, 241, 0.15);
            transform: translateY(-2px);
            text-decoration: none;
            color: #6366f1;
        }

        @media (max-width: 768px) {
            .dashboard-title {
                font-size: 1.8rem;
            }

            .header-content {
                flex-direction: column;
            }

            .user-info {
                width: 100%;
            }

            .stats-grid {
                grid-template-columns: 1fr;
            }

            .info-grid {
                grid-template-columns: 1fr;
            }

            .action-buttons {
                grid-template-columns: 1fr;
            }
        }
    </style>
</x-layout>
