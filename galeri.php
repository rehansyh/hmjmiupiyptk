<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Galeri - HMJ-MI - Himpunan Mahasiswa Jurusan - Manajemen Informatika</title>
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
                        url('https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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
        
        /* Gallery Styles */
        .gallery-filter {
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
        
        .gallery-item {
            margin-bottom: 25px;
            position: relative;
            overflow: hidden;
            border-radius: 10px;
            cursor: pointer;
        }
        
        .gallery-img {
            width: 100%;
            height: 250px;
            object-fit: cover;
            transition: transform 0.5s ease;
        }
        
        .gallery-item:hover .gallery-img {
            transform: scale(1.1);
        }
        
        .gallery-overlay {
            position: absolute;
            top: 0;
            left: 0;
            width: 100%;
            height: 100%;
            background: linear-gradient(transparent, rgba(10, 25, 47, 0.9));
            display: flex;
            flex-direction: column;
            justify-content: flex-end;
            padding: 20px;
            opacity: 0;
            transition: opacity 0.3s ease;
        }
        
        .gallery-item:hover .gallery-overlay {
            opacity: 1;
        }
        
        .gallery-title {
            color: white;
            font-weight: 600;
            margin-bottom: 5px;
        }
        
        .gallery-category {
            color: var(--accent-color);
            font-size: 0.9rem;
        }
        
        .gallery-stats {
            display: flex;
            gap: 15px;
            margin-top: 10px;
        }
        
        .gallery-stat {
            display: flex;
            align-items: center;
            color: rgba(255, 255, 255, 0.8);
            font-size: 0.85rem;
        }
        
        .gallery-stat i {
            margin-right: 5px;
        }
        
        /* Modal Styles */
        .modal-content {
            background: var(--secondary-color);
            color: var(--text-primary);
            border-radius: 15px;
            overflow: hidden;
        }
        
        .modal-header {
            border-bottom: 1px solid rgba(100, 255, 218, 0.2);
            background: rgba(17, 34, 64, 0.8);
        }
        
        .modal-body {
            padding: 0;
        }
        
        .modal-img {
            width: 100%;
            max-height: 70vh;
            object-fit: contain;
        }
        
        .modal-details {
            padding: 20px;
        }
        
        /* Masonry Layout */
        .masonry-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 25px;
        }
        
        .masonry-item {
            break-inside: avoid;
            margin-bottom: 25px;
        }
        
        /* Video Gallery */
        .video-thumbnail {
            position: relative;
            cursor: pointer;
        }
        
        .video-thumbnail::after {
            content: '\f04b';
            font-family: 'Font Awesome 5 Free';
            font-weight: 900;
            position: absolute;
            top: 50%;
            left: 50%;
            transform: translate(-50%, -50%);
            color: white;
            background: rgba(0, 0, 0, 0.7);
            width: 60px;
            height: 60px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            font-size: 20px;
            transition: all 0.3s ease;
        }
        
        .video-thumbnail:hover::after {
            background: var(--accent-color);
            color: var(--primary-color);
        }
        
        /* Statistics */
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
        
        /* Responsive */
        @media (max-width: 768px) {
            .gallery-filter {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 80%;
            }
            
            .masonry-grid {
                grid-template-columns: 1fr;
            }
            
            .stats-container {
                grid-template-columns: 1fr;
            }
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .gallery-item {
            animation: fadeIn 0.5s ease forwards;
            opacity: 0;
        }
        
        .gallery-item:nth-child(1) { animation-delay: 0.1s; }
        .gallery-item:nth-child(2) { animation-delay: 0.2s; }
        .gallery-item:nth-child(3) { animation-delay: 0.3s; }
        .gallery-item:nth-child(4) { animation-delay: 0.4s; }
        .gallery-item:nth-child(5) { animation-delay: 0.5s; }
        .gallery-item:nth-child(6) { animation-delay: 0.6s; }
        .gallery-item:nth-child(7) { animation-delay: 0.7s; }
        .gallery-item:nth-child(8) { animation-delay: 0.8s; }
        .gallery-item:nth-child(9) { animation-delay: 0.9s; }
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
                        <a class="nav-link active" href="galeri.php">Galeri</a>
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
            <h1 class="display-4 fw-bold">GALERI HMJ-MI</h1>
            <p class="lead">Kumpulan dokumentasi kegiatan dan momen berharga Himpunan Mahasiswa Jurusan Manajemen Informatika</p>
        </div>
    </section>

    <!-- Gallery Stats -->
    <section class="container mb-5">
        <div class="stats-container">
            <div class="stat-card">
                <div class="stat-number">156</div>
                <div class="stat-label">Foto Kegiatan</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">24</div>
                <div class="stat-label">Video Dokumentasi</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">18</div>
                <div class="stat-label">Album Kegiatan</div>
            </div>
            <div class="stat-card">
                <div class="stat-number">2023</div>
                <div class="stat-label">Tahun Dimulai</div>
            </div>
        </div>
    </section>

    <!-- Gallery Filter -->
    <section class="container mb-5">
        <div class="gallery-filter">
            <button class="filter-btn active" data-filter="all">Semua Galeri</button>
            <button class="filter-btn" data-filter="seminar">Seminar</button>
            <button class="filter-btn" data-filter="workshop">Workshop</button>
            <button class="filter-btn" data-filter="lomba">Kompetisi</button>
            <button class="filter-btn" data-filter="sosial">Kegiatan Sosial</button>
            <button class="filter-btn" data-filter="kepanitiaan">Kepanitiaan</button>
            <button class="filter-btn" data-filter="video">Video</button>
        </div>
    </section>

    <!-- Gallery Content -->
    <section class="container mb-5">
        <div class="masonry-grid">
            <!-- Item 1 -->
            <div class="masonry-item gallery-item" data-category="seminar">
                <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                     class="gallery-img" alt="Seminar Teknologi 2023">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">Seminar Teknologi 2023</h5>
                    <span class="gallery-category">Seminar</span>
                    <div class="gallery-stats">
                        <span class="gallery-stat"><i class="far fa-calendar"></i> 15 Nov 2023</span>
                        <span class="gallery-stat"><i class="far fa-heart"></i> 42</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 2 -->
            <div class="masonry-item gallery-item" data-category="workshop">
                <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                     class="gallery-img" alt="Web Development Workshop">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">Web Development Workshop</h5>
                    <span class="gallery-category">Workshop</span>
                    <div class="gallery-stats">
                        <span class="gallery-stat"><i class="far fa-calendar"></i> 22 Okt 2023</span>
                        <span class="gallery-stat"><i class="far fa-heart"></i> 38</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 3 -->
            <div class="masonry-item gallery-item" data-category="lomba">
                <img src="https://images.unsplash.com/photo-1550439062-609e1531270e?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                     class="gallery-img" alt="Hackathon Fintech 2023">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">Hackathon Fintech 2023</h5>
                    <span class="gallery-category">Kompetisi</span>
                    <div class="gallery-stats">
                        <span class="gallery-stat"><i class="far fa-calendar"></i> 5 Nov 2023</span>
                        <span class="gallery-stat"><i class="far fa-heart"></i> 56</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 4 -->
            <div class="masonry-item gallery-item" data-category="sosial">
                <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                     class="gallery-img" alt="Desa Digital 2023">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">Desa Digital 2023</h5>
                    <span class="gallery-category">Kegiatan Sosial</span>
                    <div class="gallery-stats">
                        <span class="gallery-stat"><i class="far fa-calendar"></i> 12 Sep 2023</span>
                        <span class="gallery-stat"><i class="far fa-heart"></i> 67</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 5 -->
            <div class="masonry-item gallery-item" data-category="kepanitiaan">
                <img src="https://images.unsplash.com/photo-1581091226033-d5c48150dbaa?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                     class="gallery-img" alt="Pelatihan Kepanitiaan">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">Pelatihan Kepanitiaan</h5>
                    <span class="gallery-category">Kepanitiaan</span>
                    <div class="gallery-stats">
                        <span class="gallery-stat"><i class="far fa-calendar"></i> 28 Agu 2023</span>
                        <span class="gallery-stat"><i class="far fa-heart"></i> 34</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 6 -->
            <div class="masonry-item gallery-item" data-category="video">
                <div class="video-thumbnail">
                    <img src="https://images.unsplash.com/photo-1556761175-4c46a7b47e5c?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                         class="gallery-img" alt="Video Dokumentasi">
                </div>
                <div class="gallery-overlay">
                    <h5 class="gallery-title">Dokumentasi Kegiatan Tahunan</h5>
                    <span class="gallery-category">Video</span>
                    <div class="gallery-stats">
                        <span class="gallery-stat"><i class="far fa-calendar"></i> 10 Des 2023</span>
                        <span class="gallery-stat"><i class="far fa-eye"></i> 128</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 7 -->
            <div class="masonry-item gallery-item" data-category="seminar">
                <img src="https://images.unsplash.com/photo-1540575467063-178a50c2df87?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                     class="gallery-img" alt="Seminar AI dan Machine Learning">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">Seminar AI dan Machine Learning</h5>
                    <span class="gallery-category">Seminar</span>
                    <div class="gallery-stats">
                        <span class="gallery-stat"><i class="far fa-calendar"></i> 8 Okt 2023</span>
                        <span class="gallery-stat"><i class="far fa-heart"></i> 45</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 8 -->
            <div class="masonry-item gallery-item" data-category="workshop">
                <img src="https://images.unsplash.com/photo-1542744094-3a31f272c490?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                     class="gallery-img" alt="UI/UX Design Workshop">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">UI/UX Design Workshop</h5>
                    <span class="gallery-category">Workshop</span>
                    <div class="gallery-stats">
                        <span class="gallery-stat"><i class="far fa-calendar"></i> 17 Sep 2023</span>
                        <span class="gallery-stat"><i class="far fa-heart"></i> 39</span>
                    </div>
                </div>
            </div>
            
            <!-- Item 9 -->
            <div class="masonry-item gallery-item" data-category="lomba">
                <img src="https://images.unsplash.com/photo-1535223289827-42f1e9919769?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" 
                     class="gallery-img" alt="Competitive Programming">
                <div class="gallery-overlay">
                    <h5 class="gallery-title">Competitive Programming</h5>
                    <span class="gallery-category">Kompetisi</span>
                    <div class="gallery-stats">
                        <span class="gallery-stat"><i class="far fa-calendar"></i> 3 Nov 2023</span>
                        <span class="gallery-stat"><i class="far fa-heart"></i> 52</span>
                    </div>
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

    <!-- Modal -->
    <div class="modal fade" id="galleryModal" tabindex="-1" aria-hidden="true">
        <div class="modal-dialog modal-lg modal-dialog-centered">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title" id="modalTitle">Judul Galeri</h5>
                    <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                </div>
                <div class="modal-body">
                    <img src="" id="modalImage" class="modal-img" alt="">
                    <div class="modal-details">
                        <div class="row">
                            <div class="col-md-6">
                                <p><strong>Kategori:</strong> <span id="modalCategory">Seminar</span></p>
                                <p><strong>Tanggal:</strong> <span id="modalDate">15 Nov 2023</span></p>
                            </div>
                            <div class="col-md-6">
                                <p><strong>Lokasi:</strong> <span id="modalLocation">Aula Kampus</span></p>
                                <p><strong>Photographer:</strong> <span id="modalPhotographer">Tim HMJ-MI</span></p>
                            </div>
                        </div>
                        <p class="mt-3" id="modalDescription">Deskripsi lengkap mengenai kegiatan yang ditampilkan dalam gambar.</p>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-outline-secondary" data-bs-dismiss="modal">Tutup</button>
                    <button type="button" class="btn btn-primary"><i class="fas fa-download me-1"></i> Unduh</button>
                </div>
            </div>
        </div>
    </div>

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
            const galleryItems = document.querySelectorAll('.gallery-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    galleryItems.forEach(item => {
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
            
            // Modal functionality
            const galleryModal = new bootstrap.Modal(document.getElementById('galleryModal'));
            const modalTitle = document.getElementById('modalTitle');
            const modalImage = document.getElementById('modalImage');
            const modalCategory = document.getElementById('modalCategory');
            const modalDate = document.getElementById('modalDate');
            const modalLocation = document.getElementById('modalLocation');
            const modalPhotographer = document.getElementById('modalPhotographer');
            const modalDescription = document.getElementById('modalDescription');
            
            // Sample data for modal (in real application, this would come from a database)
            const galleryData = {
                'Seminar Teknologi 2023': {
                    category: 'Seminar',
                    date: '15 November 2023',
                    location: 'Aula Utama Kampus',
                    photographer: 'Budi Santoso',
                    description: 'Seminar teknologi tahunan yang menghadirkan pembicara dari industri IT ternama. Membahas tren terbaru dalam pengembangan software dan artificial intelligence.'
                },
                'Web Development Workshop': {
                    category: 'Workshop',
                    date: '22 Oktober 2023',
                    location: 'Lab. Komputer FTIK',
                    photographer: 'Siti Rahayu',
                    description: 'Workshop intensif selama 2 hari yang membahas pengembangan web modern menggunakan teknologi terkini seperti React, Node.js, dan MongoDB.'
                }
                // Data for other images would be added here
            };
            
            // Add click event to gallery items
            galleryItems.forEach(item => {
                item.addEventListener('click', function() {
                    const title = this.querySelector('.gallery-title').textContent;
                    const imgSrc = this.querySelector('img').src;
                    const category = this.querySelector('.gallery-category').textContent;
                    const date = this.querySelector('.gallery-stat:first-child').textContent.replace(' ', '');
                    
                    // Set modal content
                    modalTitle.textContent = title;
                    modalImage.src = imgSrc;
                    modalCategory.textContent = category;
                    modalDate.textContent = date;
                    
                    // Set additional data if available
                    if (galleryData[title]) {
                        modalLocation.textContent = galleryData[title].location;
                        modalPhotographer.textContent = galleryData[title].photographer;
                        modalDescription.textContent = galleryData[title].description;
                    } else {
                        modalLocation.textContent = 'Aula Kampus';
                        modalPhotographer.textContent = 'Tim HMJ-MI';
                        modalDescription.textContent = 'Dokumentasi kegiatan HMJ-MI yang menunjukkan semangat dan kreativitas anggota dalam berbagai acara dan program kerja.';
                    }
                    
                    // Show modal
                    galleryModal.show();
                });
            });
            
            // Animation for gallery items
            const animatedItems = document.querySelectorAll('.gallery-item');
            
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