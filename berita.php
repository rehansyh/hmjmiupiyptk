<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Berita - HMJ-MI - Himpunan Mahasiswa Jurusan - Manajemen Informatika</title>
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
                        url('https://images.unsplash.com/photo-1499750310107-5fef28a66643?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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
        
        .news-card {
            border-left: 4px solid var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .news-card:hover {
            border-left: 4px solid #e6f1ff;
        }
        
        .news-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .news-date {
            color: var(--accent-color);
            font-weight: 600;
        }
        
        .news-category {
            position: absolute;
            top: 15px;
            left: 15px;
            font-size: 0.8rem;
        }
        
        .news-excerpt {
            display: -webkit-box;
            -webkit-line-clamp:3;
            -webkit-box-orient: vertical;
            overflow: hidden;
        }
        
        .news-meta {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(100, 255, 218, 0.1);
        }
        
        .meta-item {
            display: flex;
            align-items: center;
            color: var(--text-secondary);
            font-size: 0.9rem;
        }
        
        .filter-buttons {
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
        
        .sidebar-widget {
            background: var(--secondary-color);
            border-radius: 10px;
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .sidebar-title {
            border-bottom: 2px solid var(--accent-color);
            padding-bottom: 10px;
            margin-bottom: 20px;
            color: var(--accent-color);
        }
        
        .popular-news {
            margin-bottom: 15px;
            padding-bottom: 15px;
            border-bottom: 1px solid rgba(100, 255, 218, 0.1);
        }
        
        .popular-news:last-child {
            border-bottom: none;
            margin-bottom: 0;
            padding-bottom: 0;
        }
        
        .news-tag {
            display: inline-block;
            background: rgba(100, 255, 218, 0.1);
            color: var(--accent-color);
            padding: 5px 10px;
            border-radius: 20px;
            font-size: 0.8rem;
            margin-right: 5px;
            margin-bottom: 5px;
            transition: all 0.3s ease;
        }
        
        .news-tag:hover {
            background: var(--accent-color);
            color: var(--primary-color);
        }
        
        .pagination {
            justify-content: center;
        }
        
        .page-link {
            background: var(--secondary-color);
            border: 1px solid rgba(100, 255, 218, 0.2);
            color: var(--text-primary);
        }
        
        .page-link:hover {
            background: var(--accent-color);
            border-color: var(--accent-color);
            color: var(--primary-color);
        }
        
        .page-item.active .page-link {
            background: var(--accent-color);
            border-color: var(--accent-color);
            color: var(--primary-color);
        }
        
        @media (max-width: 768px) {
            .filter-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 80%;
            }
            
            .news-meta {
                flex-direction: column;
                gap: 10px;
            }
        }
        
        /* Animation for news cards */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .news-item {
            animation: fadeIn 0.5s ease forwards;
            opacity: 0;
        }
        
        .news-item:nth-child(1) { animation-delay: 0.1s; }
        .news-item:nth-child(2) { animation-delay: 0.2s; }
        .news-item:nth-child(3) { animation-delay: 0.3s; }
        .news-item:nth-child(4) { animation-delay: 0.4s; }
        .news-item:nth-child(5) { animation-delay: 0.5s; }
        .news-item:nth-child(6) { animation-delay: 0.6s; }
        
        /* Featured news */
        .featured-news {
            position: relative;
            border-radius: 10px;
            overflow: hidden;
            margin-bottom: 30px;
            height: 400px;
        }
        
        .featured-img {
            width: 100%;
            height: 100%;
            object-fit: cover;
        }
        
        .featured-overlay {
            position: absolute;
            bottom: 0;
            left: 0;
            right: 0;
            background: linear-gradient(transparent, rgba(10, 25, 47, 0.9));
            padding: 30px;
            color: white;
        }
        
        .featured-badge {
            position: absolute;
            top: 20px;
            right: 20px;
        }
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
                        <a class="nav-link active" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="download.php">Download</a>
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
            <h1 class="display-4 fw-bold">BERITA HMJ-MI</h1>
            <p class="lead">Informasi terbaru seputar kegiatan dan prestasi Himpunan Mahasiswa Jurusan Manajemen Informatika</p>
        </div>
    </section>

    <!-- Featured News -->
    <section class="container mb-5">
        <div class="featured-news">
            <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80" class="featured-img" alt="Featured News">
            <span class="featured-badge badge bg-danger">Featured</span>
            <div class="featured-overlay">
                <span class="badge bg-primary mb-2">Prestasi</span>
                <h2 class="featured-title">HMJ-MI Raih Penghargaan Organisasi Terbaik Tingkat Nasional</h2>
                <p class="featured-excerpt">Organisasi HMJ-MI berhasil meraih penghargaan sebagai organisasi mahasiswa terbaik tahun 2023 dalam ajang National Organization Award.</p>
                <div class="d-flex align-items-center">
                    <span class="news-date me-3"><i class="far fa-calendar me-1"></i> 5 Desember 2023</span>
                    <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                </div>
            </div>
        </div>
    </section>

    <!-- Main Content -->
    <section class="container mb-5">
        <div class="row">
            <div class="col-lg-8">
                <!-- Filter Section -->
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Semua Berita</button>
                    <button class="filter-btn" data-filter="prestasi">Prestasi</button>
                    <button class="filter-btn" data-filter="kegiatan">Kegiatan</button>
                    <button class="filter-btn" data-filter="pengumuman">Pengumuman</button>
                    <button class="filter-btn" data-filter="kerjasama">Kerjasama</button>
                </div>

                <!-- News List -->
                <h2 class="section-title">Berita Terbaru</h2>
                
                <!-- News 1 -->
                <div class="news-item" data-category="kegiatan">
                    <div class="card news-card bg-pattern mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="news-img w-100 h-100" alt="Web Development Bootcamp">
                                <span class="news-category badge bg-primary">Kegiatan</span>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Web Development Bootcamp Sukses Digelar, Diikuti 50 Peserta</h5>
                                    <p class="card-text news-excerpt">Program pelatihan pengembangan web yang diselenggarakan HMJ-MI berhasil menarik minat 50 peserta dari berbagai angkatan. Bootcamp ini berlangsung selama 5 sesi dengan materi lengkap dari dasar hingga advanced.</p>
                                    <div class="news-meta">
                                        <div class="meta-item">
                                            <i class="far fa-calendar me-1"></i> 3 Des 2023
                                        </div>
                                        <div class="meta-item">
                                            <i class="far fa-user me-1"></i> Admin HMJ-MI
                                        </div>
                                        <div class="meta-item">
                                            <i class="far fa-eye me-1"></i> 245
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary mt-3">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- News 2 -->
                <div class="news-item" data-category="kerjasama">
                    <div class="card news-card bg-pattern mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1563986768609-322da13575f3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="news-img w-100 h-100" alt="Kerjasama dengan Microsoft">
                                <span class="news-category badge bg-info">Kerjasama</span>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">HMJ-MI Jalin Kerjasama dengan Microsoft Indonesia</h5>
                                    <p class="card-text news-excerpt">Kerjasama strategis antara HMJ-MI dan Microsoft Indonesia resmi diteken, membuka peluang magang dan pelatihan sertifikasi bagi anggota HMJ-MI.</p>
                                    <div class="news-meta">
                                        <div class="meta-item">
                                            <i class="far fa-calendar me-1"></i> 28 Nov 2023
                                        </div>
                                        <div class="meta-item">
                                            <i class="far fa-user me-1"></i> Admin HMJ-MI
                                        </div>
                                        <div class="meta-item">
                                            <i class="far fa-eye me-1"></i> 189
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary mt-3">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- News 3 -->
                <div class="news-item" data-category="prestasi">
                    <div class="card news-card bg-pattern mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="news-img w-100 h-100" alt="Juara Hackathon">
                                <span class="news-category badge bg-success">Prestasi</span>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Tim HMJ-MI Raih Juara 1 Nasional Hackathon Fintech 2023</h5>
                                    <p class="card-text news-excerpt">Tim yang terdiri dari anggota HMJ-MI berhasil menyabet gelar juara 1 dalam kompetisi hackathon fintech nasional yang diikuti oleh 150 tim dari seluruh Indonesia.</p>
                                    <div class="news-meta">
                                        <div class="meta-item">
                                            <i class="far fa-calendar me-1"></i> 20 Nov 2023
                                        </div>
                                        <div class="meta-item">
                                            <i class="far fa-user me-1"></i> Admin HMJ-MI
                                        </div>
                                        <div class="meta-item">
                                            <i class="far fa-eye me-1"></i> 312
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary mt-3">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                
                <!-- News 4 -->
                <div class="news-item" data-category="pengumuman">
                    <div class="card news-card bg-pattern mb-4">
                        <div class="row g-0">
                            <div class="col-md-4">
                                <img src="https://images.unsplash.com/photo-1571260899304-425eee4c7efc?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="news-img w-100 h-100" alt="Open Recruitment">
                                <span class="news-category badge bg-warning">Pengumuman</span>
                            </div>
                            <div class="col-md-8">
                                <div class="card-body">
                                    <h5 class="card-title">Open Recruitment Pengurus HMJ-MI Periode 2024/2025</h5>
                                    <p class="card-text news-excerpt">Bagi mahasiswa Manajemen Informatika yang ingin berkembang dan berkontribusi, HMJ-MI membuka pendaftaran pengurus baru untuk periode 2024/2025. Daftar sekarang!</p>
                                    <div class="news-meta">
                                        <div class="meta-item">
                                            <i class="far fa-calendar me-1"></i> 15 Nov 2023
                                        </div>
                                        <div class="meta-item">
                                            <i class="far fa-user me-1"></i> Admin HMJ-MI
                                        </div>
                                        <div class="meta-item">
                                            <i class="far fa-eye me-1"></i> 421
                                        </div>
                                    </div>
                                    <a href="#" class="btn btn-outline-primary mt-3">Baca Selengkapnya</a>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                <!-- Pagination -->
                <nav aria-label="Page navigation">
                    <ul class="pagination">
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
            </div>

            <!-- Sidebar -->
            <div class="col-lg-4">
                <!-- Search Widget -->
                <div class="sidebar-widget mb-4">
                    <h4 class="sidebar-title">Cari Berita</h4>
                    <div class="input-group">
                        <input type="text" class="form-control" placeholder="Kata kunci...">
                        <button class="btn btn-primary" type="button">
                            <i class="fas fa-search"></i>
                        </button>
                    </div>
                </div>

                <!-- Categories Widget -->
                <div class="sidebar-widget mb-4">
                    <h4 class="sidebar-title">Kategori Berita</h4>
                    <ul class="list-group list-group-flush">
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent text-white border-0">
                            <a href="#" class="text-decoration-none text-primary">Prestasi</a>
                            <span class="badge bg-primary rounded-pill">12</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent text-white border-0">
                            <a href="#" class="text-decoration-none text-primary">Kegiatan</a>
                            <span class="badge bg-primary rounded-pill">24</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent text-white border-0">
                            <a href="#" class="text-decoration-none text-primary">Pengumuman</a>
                            <span class="badge bg-primary rounded-pill">8</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent text-white border-0">
                            <a href="#" class="text-decoration-none text-primary">Kerjasama</a>
                            <span class="badge bg-primary rounded-pill">5</span>
                        </li>
                        <li class="list-group-item d-flex justify-content-between align-items-center bg-transparent text-white border-0">
                            <a href="#" class="text-decoration-none text-primary">Lainnya</a>
                            <span class="badge bg-primary rounded-pill">7</span>
                        </li>
                    </ul>
                </div>

                <!-- Popular News Widget -->
                <div class="sidebar-widget mb-4">
                    <h4 class="sidebar-title">Berita Populer</h4>
                    
                    <div class="popular-news">
                        <h6><a href="#" class="text-decoration-none text-primary">HMJ-MI Raih Penghargaan Organisasi Terbaik</a></h6>
                        <div class="meta-item">
                            <i class="far fa-eye me-1"></i> 512 views
                        </div>
                    </div>
                    
                    <div class="popular-news">
                        <h6><a href="#" class="text-decoration-none text-primary">Web Development Bootcamp Sukses Digelar</a></h6>
                        <div class="meta-item">
                            <i class="far fa-eye me-1"></i> 421 views
                        </div>
                    </div>
                    
                    <div class="popular-news">
                        <h6><a href="#" class="text-decoration-none text-primary">Kerjasama dengan Microsoft Indonesia</a></h6>
                        <div class="meta-item">
                            <i class="far fa-eye me-1"></i> 389 views
                        </div>
                    </div>
                    
                    <div class="popular-news">
                        <h6><a href="#" class="text-decoration-none text-primary">Juara 1 Nasional Hackathon Fintech 2023</a></h6>
                        <div class="meta-item">
                            <i class="far fa-eye me-1"></i> 356 views
                        </div>
                    </div>
                </div>

                <!-- Tags Widget -->
                <div class="sidebar-widget mb-4">
                    <h4 class="sidebar-title">Tag Populer</h4>
                    <div class="tags-container">
                        <a href="#" class="news-tag">#teknologi</a>
                        <a href="#" class="news-tag">#programming</a>
                        <a href="#" class="news-tag">#webdevelopment</a>
                        <a href="#" class="news-tag">#cybersecurity</a>
                        <a href="#" class="news-tag">#hackathon</a>
                        <a href="#" class="news-tag">#seminar</a>
                        <a href="#" class="news-tag">#workshop</a>
                        <a href="#" class="news-tag">#prestasi</a>
                    </div>
                </div>

                <!-- Subscription Widget -->
                <div class="sidebar-widget">
                    <h4 class="sidebar-title">Berlangganan Berita</h4>
                    <p>Dapatkan update berita terbaru langsung ke email Anda</p>
                    <div class="input-group mb-3">
                        <input type="email" class="form-control" placeholder="Alamat email">
                        <button class="btn btn-primary" type="button">Subscribe</button>
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
            const newsItems = document.querySelectorAll('.news-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    newsItems.forEach(item => {
                        if (filterValue === 'all' || item.getAttribute('data-category') === filterValue) {
                            item.style.display = 'block';
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
            
            // Animation for news cards
            const animatedItems = document.querySelectorAll('.news-item');
            
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
        });
    </script>
</body>
</html>