<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Download - HMJ-MI - Himpunan Mahasiswa Jurusan - Manajemen Informatika</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        :root {
            --primary-color: #0a192f;  /* Dark blue */
            --secondary-color: #112240; /* Medium blue */
            --accent-color: #64ffda;   /* Teal accent */
            --text-primary: #e6f1ff;   /* Light blue text */
            --text-secondary: #8892b0; /* Grayish blue text */
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            padding-top: 80px;
            background: linear-gradient(135deg, var(--primary-color) 0%, #000000 100%);
            color: var(--text-primary);
            min-height: 100vh;
        }
        
        .navbar {
            background: rgba(10, 25, 47, 0.95) !important;
            backdrop-filter: blur(10px);
            box-shadow: 0 2px 20px rgba(0, 0, 0, 0.5);
            border-bottom: 1px solid rgba(100, 255, 218, 0.1);
        }
        
        .hero-section {
            background: linear-gradient(135deg, rgba(10, 25, 47, 0.9) 0%, rgba(0, 0, 0, 0.9) 100%), 
                        url('https://images.unsplash.com/photo-1501504905252-473c47e087f8?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
            background-size: cover;
            background-position: center;
            background-attachment: fixed;
            color: white;
            padding: 100px 0;
            margin-bottom: 50px;
            border-radius: 15px;
            position: relative;
            overflow: hidden;
        }
        
        .hero-section::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: radial-gradient(circle at 20% 50%, rgba(100, 255, 218, 0.1) 0%, transparent 40%),
                        radial-gradient(circle at 80% 20%, rgba(30, 100, 200, 0.1) 0%, transparent 40%);
            pointer-events: none;
        }
        
        .section-title {
            position: relative;
            padding-bottom: 15px;
            margin-bottom: 30px;
            text-align: center;
            color: var(--text-primary);
        }
        
        .section-title:after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 50%;
            transform: translateX(-50%);
            width: 80px;
            height: 3px;
            background-color: var(--accent-color);
        }
        
        .card {
            transition: transform 0.3s, box-shadow 0.3s;
            margin-bottom: 20px;
            border: none;
            background: var(--secondary-color);
            color: var(--text-primary);
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
            height: 100%;
        }
        
        .card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }
        
        .card-header {
            background: rgba(17, 34, 64, 0.8);
            border-bottom: 1px solid rgba(100, 255, 218, 0.2);
            color: var(--text-primary);
        }
        
        .btn-primary {
            background: linear-gradient(135deg, var(--accent-color) 0%, #0099cc 100%);
            border: none;
            color: var(--primary-color);
            font-weight: 600;
        }
        
        .btn-primary:hover {
            background: linear-gradient(135deg, #52e3c2 0%, #0077a3 100%);
            transform: translateY(-2px);
            box-shadow: 0 5px 15px rgba(100, 255, 218, 0.4);
        }
        
        .btn-outline-primary {
            border-color: var(--accent-color);
            color: var(--accent-color);
        }
        
        .btn-outline-primary:hover {
            background-color: var(--accent-color);
            color: var(--primary-color);
        }
        
        footer {
            background: linear-gradient(135deg, var(--primary-color) 0%, #000000 100%);
            color: var(--text-primary);
            padding: 40px 0;
            border-top: 1px solid rgba(100, 255, 218, 0.1);
        }
        
        .social-icon {
            font-size: 24px;
            margin-right: 15px;
            color: var(--text-secondary);
            transition: color 0.3s;
        }
        
        .social-icon:hover {
            color: var(--accent-color);
            transform: translateY(-3px);
        }
        
        .navbar-brand {
            font-weight: 700;
            color: var(--accent-color) !important;
        }
        
        .nav-link {
            color: var(--text-secondary) !important;
            transition: color 0.3s;
            position: relative;
        }
        
        .nav-link:hover, .nav-link.active {
            color: var(--accent-color) !important;
        }
        
        .nav-link::after {
            content: '';
            position: absolute;
            bottom: 0;
            left: 0;
            width: 0;
            height: 2px;
            background-color: var(--accent-color);
            transition: width 0.3s;
            transition: width 0.3s;
        }
        
        .nav-link:hover::after, .nav-link.active::after {
            width: 100%;
        }
        
        .bg-pattern {
            position: relative;
            overflow: hidden;
        }
        
        .bg-pattern::before {
            content: '';
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background-image: 
                radial-gradient(circle at 10% 20%, rgba(100, 255, 218, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 90% 80%, rgba(30, 100, 200, 0.05) 0%, transparent 20%),
                radial-gradient(circle at 50% 50%, rgba(100, 150, 255, 0.05) 0%, transparent 30%);
            pointer-events: none;
        }
        
        /* Download Styles */
        .download-filter {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-bottom: 30px;
        }
        
        .filter-btn {
            background: var(--secondary-color);
            border: 1px solid rgba(100, 255, 218, 0.2);
            color: var(--text-primary);
            padding: 8px 20px;
            border-radius: 30px;
            transition: all 0.3s ease;
        }
        
        .filter-btn:hover, .filter-btn.active {
            background: var(--accent-color);
            color: var(--primary-color);
            border-color: var(--accent-color);
        }
        
        .download-item {
            padding: 20px;
            border-radius: 10px;
            background: var(--secondary-color);
            margin-bottom: 20px;
            transition: all 0.3s ease;
            border-left: 4px solid var(--accent-color);
        }
        
        .download-item:hover {
            transform: translateX(5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }
        
        .file-icon {
            font-size: 2.5rem;
            margin-right: 15px;
            color: var(--accent-color);
        }
        
        .file-info {
            flex: 1;
        }
        
        .file-size {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        .file-meta {
            display: flex;
            gap: 15px;
            margin-top: 10px;
            color: var(--text-secondary);
            font-size: 0.85rem;
        }
        
        .download-count {
            display: flex;
            align-items: center;
        }
        
        .download-btn {
            background: var(--accent-color);
            color: var(--primary-color);
            border: none;
            padding: 8px 15px;
            border-radius: 5px;
            font-weight: 600;
            transition: all 0.3s ease;
        }
        
        .download-btn:hover {
            background: #52e3c2;
            transform: translateY(-2px);
        }
        
        .stats-container {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 20px;
            margin-bottom: 40px;
        }
        
        .stat-card {
            background: var(--secondary-color);
            border-radius: 10px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
        }
        
        .stat-number {
            font-size: 2.5rem;
            font-weight: 700;
            color: var(--accent-color);
            margin-bottom: 5px;
        }
        
        .stat-label {
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        .category-card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .category-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }
        
        .category-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--accent-color);
        }
        
        .progress {
            height: 8px;
            background-color: rgba(255, 255, 255, 0.1);
            border-radius: 4px;
            overflow: hidden;
            margin-top: 10px;
        }
        
        .progress-bar {
            background-color: var(--accent-color);
            border-radius: 4px;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .download-filter {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 80%;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
            
            .file-meta {
                flex-direction: column;
                gap: 5px;
            }
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .download-item {
            animation: fadeIn 0.5s ease forwards;
            opacity: 0;
        }
        
        .download-item:nth-child(1) { animation-delay: 0.1s; }
        .download-item:nth-child(2) { animation-delay: 0.2s; }
        .download-item:nth-child(3) { animation-delay: 0.3s; }
        .download-item:nth-child(4) { animation-delay: 0.4s; }
        .download-item:nth-child(5) { animation-delay: 0.5s; }
        .download-item:nth-child(6) { animation-delay: 0.6s; }
        
        /* Search Box */
        .search-box {
            position: relative;
            margin-bottom: 30px;
        }
        
        .search-input {
            width: 100%;
            padding: 15px 20px;
            border-radius: 50px;
            border: none;
            background: var(--secondary-color);
            color: var(--text-primary);
            padding-left: 50px;
        }
        
        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: var(--text-secondary);
        }
        
        /* File type colors */
        .file-type-pdf { color: #f40f02; }
        .file-type-doc { color: #295b9f; }
        .file-type-xls { color: #217346; }
        .file-type-zip { color: #ffac2f; }
        .file-type-img { color: #5b63d4; }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="index.php">
                <i class="fas fa-laptop-code me-2"></i>
                HMJ-MI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link" href="index.php">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="profil.php">Profil</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="program-kerja.php">Program Kerja</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="download.php">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="kontak.php">Kontak</a>
                    </li>
                    <li class="nav-item">
                        <a class="btn btn-primary ms-2" href="login.php">
                            <i class="fas fa-lock me-1"></i> Login Admin
                        </a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section class="hero-section">
        <div class="container text-center">
            <h1 class="display-4 fw-bold">DOWNLOAD HMJ-MI</h1>
            <p class="lead">Kumpulan materi, template, dan dokumen penting untuk mendukung kegiatan akademik dan organisasi</p>
        </div>
    </section>

    <!-- Download Stats -->
    <section class="container mb-5">
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-number">128</div>
                <div class="stat-label">Total File</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">4.2GB</div>
                <div class="stat-label">Total Ukuran</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">2,458</div>
                <div class="stat-label">Total Download</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">96</div>
                <div class="stat-label">Pengguna Aktif</div>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section class="container mb-4">
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="search-box">
                    <i class="fas fa-search search-icon"></i>
                    <input type="text" class="search-input" placeholder="Cari file, materi, atau dokumen...">
                </div>
            </div>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="container mb-5">
        <div class="download-filter">
            <button class="filter-btn active" data-filter="all">Semua File</button>
            <button class="filter-btn" data-filter="modul">Modul Pembelajaran</button>
            <button class="filter-btn" data-filter="template">Template</button>
            <button class="filter-btn" data-filter="sertifikat">Sertifikat</button>
            <button class="filter-btn" data-filter="laporan">Laporan</button>
            <button class="filter-btn" data-filter="lainnya">Lainnya</button>
        </div>
    </section>

    <!-- Category Section -->
    <section class="container mb-5">
        <h2 class="section-title">Kategori File</h2>
        <div class="row">
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="category-card card bg-pattern">
                    <div class="card-body">
                        <i class="fas fa-book category-icon"></i>
                        <h5>Modul Pembelajaran</h5>
                        <p class="text-muted">42 file</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 65%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="category-card card bg-pattern">
                    <div class="card-body">
                        <i class="fas fa-file-alt category-icon"></i>
                        <h5>Template</h5>
                        <p class="text-muted">28 file</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 45%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="category-card card bg-pattern">
                    <div class="card-body">
                        <i class="fas fa-award category-icon"></i>
                        <h5>Sertifikat</h5>
                        <p class="text-muted">15 file</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 30%"></div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-3 col-sm-6 mb-4">
                <div class="category-card card bg-pattern">
                    <div class="card-body">
                        <i class="fas fa-chart-bar category-icon"></i>
                        <h5>Laporan</h5>
                        <p class="text-muted">23 file</p>
                        <div class="progress">
                            <div class="progress-bar" style="width: 40%"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Download List -->
    <section class="container mb-5">
        <h2 class="section-title">File Terbaru</h2>
        
        <!-- File 1 -->
        <div class="download-item" data-category="modul">
            <div class="d-flex align-items-center">
                <div class="file-icon">
                    <i class="fas fa-file-pdf file-type-pdf"></i>
                </div>
                <div class="file-info">
                    <h5>Modul Pemrograman Web Lengkap</h5>
                    <p class="file-size">15.2 MB • PDF</p>
                    <div class="file-meta">
                        <span class="download-count"><i class="fas fa-download me-1"></i> 328 downloads</span>
                        <span><i class="fas fa-calendar me-1"></i> 5 Des 2023</span>
                        <span><i class="fas fa-user me-1"></i> Admin HMJ-MI</span>
                    </div>
                </div>
                <div class="ms-3">
                    <button class="download-btn"><i class="fas fa-download me-1"></i> Download</button>
                </div>
            </div>
        </div>
        
        <!-- File 2 -->
        <div class="download-item" data-category="template">
            <div class="d-flex align-items-center">
                <div class="file-icon">
                    <i class="fas fa-file-word file-type-doc"></i>
                </div>
                <div class="file-info">
                    <h5>Template Proposal Kegiatan HMJ</h5>
                    <p class="file-size">2.4 MB • DOCX</p>
                    <div class="file-meta">
                        <span class="download-count"><i class="fas fa-download me-1"></i> 215 downloads</span>
                        <span><i class="fas fa-calendar me-1"></i> 3 Des 2023</span>
                        <span><i class="fas fa-user me-1"></i> Sekretaris HMJ-MI</span>
                    </div>
                </div>
                <div class="ms-3">
                    <button class="download-btn"><i class="fas fa-download me-1"></i> Download</button>
                </div>
            </div>
        </div>
        
        <!-- File 3 -->
        <div class="download-item" data-category="sertifikat">
            <div class="d-flex align-items-center">
                <div class="file-icon">
                    <i class="fas fa-file-image file-type-img"></i>
                </div>
                <div class="file-info">
                    <h5>Template Sertifikat Seminar</h5>
                    <p class="file-size">8.7 MB • PSD</p>
                    <div class="file-meta">
                        <span class="download-count"><i class="fas fa-download me-1"></i> 142 downloads</span>
                        <span><i class="fas fa-calendar me-1"></i> 1 Des 2023</span>
                        <span><i class="fas fa-user me-1"></i> Divisi Acara</span>
                    </div>
                </div>
                <div class="ms-3">
                    <button class="download-btn"><i class="fas fa-download me-1"></i> Download</button>
                </div>
            </div>
        </div>
        
        <!-- File 4 -->
        <div class="download-item" data-category="modul">
            <div class="d-flex align-items-center">
                <div class="file-icon">
                    <i class="fas fa-file-excel file-type-xls"></i>
                </div>
                <div class="file-info">
                    <h5>Database Anggota HMJ-MI 2023</h5>
                    <p class="file-size">1.2 MB • XLSX</p>
                    <div class="file-meta">
                        <span class="download-count"><i class="fas fa-download me-1"></i> 89 downloads</span>
                        <span><i class="fas fa-calendar me-1"></i> 28 Nov 2023</span>
                        <span><i class="fas fa-user me-1"></i> Bendahara HMJ-MI</span>
                    </div>
                </div>
                <div class="ms-3">
                    <button class="download-btn"><i class="fas fa-download me-1"></i> Download</button>
                </div>
            </div>
        </div>
        
        <!-- File 5 -->
        <div class="download-item" data-category="laporan">
            <div class="d-flex align-items-center">
                <div class="file-icon">
                    <i class="fas fa-file-pdf file-type-pdf"></i>
                </div>
                <div class="file-info">
                    <h5>Laporan Kegiatan Tahunan 2023</h5>
                    <p class="file-size">5.3 MB • PDF</p>
                    <div class="file-meta">
                        <span class="download-count"><i class="fas fa-download me-1"></i> 176 downloads</span>
                        <span><i class="fas fa-calendar me-1"></i> 25 Nov 2023</span>
                        <span><i class="fas fa-user me-1"></i> Ketua HMJ-MI</span>
                    </div>
                </div>
                <div class="ms-3">
                    <button class="download-btn"><i class="fas fa-download me-1"></i> Download</button>
                </div>
            </div>
        </div>
        
        <!-- File 6 -->
        <div class="download-item" data-category="lainnya">
            <div class="d-flex align-items-center">
                <div class="file-icon">
                    <i class="fas fa-file-archive file-type-zip"></i>
                </div>
                <div class="file-info">
                    <h5>Resource Design HMJ-MI Package</h5>
                    <p class="file-size">42.8 MB • ZIP</p>
                    <div class="file-meta">
                        <span class="download-count"><i class="fas fa-download me-1"></i> 94 downloads</span>
                        <span><i class="fas fa-calendar me-1"></i> 20 Nov 2023</span>
                        <span><i class="fas fa-user me-1"></i> Divisi Media</span>
                    </div>
                </div>
                <div class="ms-3">
                    <button class="download-btn"><i class="fas fa-download me-1"></i> Download</button>
                </div>
            </div>
        </div>

        <!-- Pagination -->
        <nav aria-label="Page navigation" class="mt-5">
            <ul class="pagination justify-content-center">
                <li class="page-item disabled">
                    <a class="page-link" href="#" tabindex="-1" aria-disabled="true">Previous</a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                    <a class="page-link" href="#">Next</a>
                </li>
            </ul>
        </nav>
    </section>

    <!-- Upload Guidelines -->
    <section class="container mb-5">
        <div class="card bg-pattern">
            <div class="card-header">
                <h4 class="mb-0"><i class="fas fa-info-circle me-2"></i>Panduan Upload File</h4>
            </div>
            <div class="card-body">
                <div class="row">
                    <div class="col-md-6">
                        <h5>Ketentuan File:</h5>
                        <ul>
                            <li>Maksimal ukuran file: 50MB</li>
                            <li>Format yang didukung: PDF, DOCX, XLSX, PPTX, ZIP, RAR, JPG, PNG</li>
                            <li>File harus bebas dari virus dan malware</li>
                            <li>Pastikan file tidak melanggar hak cipta</li>
                        </ul>
                    </div>
                    <div class="col-md-6">
                        <h5>Untuk Anggota HMJ-MI:</h5>
                        <p>Login terlebih dahulu untuk mengupload file. File yang diupload akan diverifikasi oleh admin sebelum dipublikasikan.</p>
                        <a href="login.php" class="btn btn-primary mt-2">Login Sekarang</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="container">
            <div class="row">
                <div class="col-md-4 mb-4">
                    <h4>HMJ-MI</h4>
                    <p>Himpunan Mahasiswa Manajemen Informatika</p>
                    <p>Fakultas Ilmu Komputer</p>
                    <p>Universitas Teknologi Nusantara</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>Kontak Kami</h4>
                    <p><i class="fas fa-map-marker-alt me-2"></i> Jl. Teknologi No. 123, Jakarta</p>
                    <p><i class="fas fa-envelope me-2"></i> info@hmj-mi.org</p>
                    <p><i class="fas fa-phone me-2"></i> (021) 1234-5678</p>
                </div>
                <div class="col-md-4 mb-4">
                    <h4>Ikuti Kami</h4>
                    <a href="#" class="social-icon"><i class="fab fa-facebook"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-youtube"></i></a>
                    <a href="#" class="social-icon"><i class="fab fa-linkedin"></i></a>
                    
                    <div class="mt-3">
                        <h5>Subscribe Newsletter</h5>
                        <div class="input-group">
                            <input type="email" class="form-control" placeholder="Email Anda" required>
                            <button class="btn btn-primary" type="button">Subscribe</button>
                        </div>
                    </div>
                </div>
            </div>
            <hr class="mt-0 mb-4">
            <div class="text-center">
                <p>&copy; 2023 HMJ-MI - Himpunan Mahasiswa Jurusan Manajemen Informatika. All Rights Reserved.</p>
            </div>
        </div>
    </footer>

    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    <script>
        // Filter functionality
        document.addEventListener('DOMContentLoaded', function() {
            const filterButtons = document.querySelectorAll('.filter-btn');
            const downloadItems = document.querySelectorAll('.download-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    downloadItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'flex';
                            setTimeout(() => {
                                item.style.opacity = 1;
                                item.style.transform = 'translateY(0)';
                            }, 50);
                        } else {
                            item.style.opacity = 0;
                            item.style.transform = 'translateY(20px)';
                            setTimeout(() => {
                                item.style.display = 'none';
                            }, 500);
                        }
                    });
                });
            });
            
            // Download button functionality
            const downloadButtons = document.querySelectorAll('.download-btn');
            downloadButtons.forEach(button => {
                button.addEventListener('click', function() {
                    const fileName = this.closest('.download-item').querySelector('h5').textContent;
                    
                    // Simulate download
                    this.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Downloading...';
                    this.disabled = true;
                    
                    setTimeout(() => {
                        this.innerHTML = '<i class="fas fa-check me-1"></i> Downloaded';
                        this.classList.add('btn-success');
                        
                        // Update download count
                        const downloadCount = this.closest('.download-item').querySelector('.download-count');
                        let count = parseInt(downloadCount.textContent.match(/\d+/)[0]);
                        count++;
                        downloadCount.innerHTML = `<i class="fas fa-download me-1"></i> ${count} downloads`;
                        
                        // Show notification
                        showNotification(`File "${fileName}" berhasil diunduh`);
                    }, 2000);
                });
            });
            
            // Search functionality
            const searchInput = document.querySelector('.search-input');
            searchInput.addEventListener('keyup', function() {
                const searchValue = this.value.toLowerCase();
                
                downloadItems.forEach(item => {
                    const title = item.querySelector('h5').textContent.toLowerCase();
                    if (title.includes(searchValue)) {
                        item.style.display = 'flex';
                        setTimeout(() => {
                            item.style.opacity = 1;
                            item.style.transform = 'translateY(0)';
                        }, 50);
                    } else {
                        item.style.opacity = 0;
                        item.style.transform = 'translateY(20px)';
                        setTimeout(() => {
                            item.style.display = 'none';
                        }, 500);
                    }
                });
            });
            
            // Animation for download items
            const animatedItems = document.querySelectorAll('.download-item');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            animatedItems.forEach(item => {
                item.style.opacity = 0;
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(item);
            });
            
            // Notification function
            function showNotification(message) {
                const notification = document.createElement('div');
                notification.className = 'notification alert alert-success';
                notification.innerHTML = `
                    <i class="fas fa-check-circle me-2"></i>
                    ${message}
                    <button type="button" class="btn-close" data-bs-dismiss="alert"></button>
                `;
                
                notification.style.position = 'fixed';
                notification.style.top = '20px';
                notification.style.right = '20px';
                notification.style.zIndex = '9999';
                notification.style.minWidth = '300px';
                notification.style.boxShadow = '0 5px 15px rgba(0, 0, 0, 0.2)';
                
                document.body.appendChild(notification);
                
                // Auto remove after 3 seconds
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 3000);
            }
        });
    </script>
</body>
</html>