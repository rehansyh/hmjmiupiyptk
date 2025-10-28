<?php
// Include file konfigurasi
require_once 'config/database.php';
require_once 'includes/functions.php';

// Inisialisasi database
$database = new Database();
$connectionStatus = $database->checkConnection();
$stats = $database->getStats();

// Ambil data dari database
$news = getNews(3);
$events = getEvents(3);
$management = getManagement();
?>
<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>HMJ-MI - Himpunan Mahasiswa Jurusan - Manajemen Informatika</title>
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
            padding: 120px 0;
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
        
        .event-card {
            border-left: 4px solid var(--accent-color);
        }
        
        .news-card {
            border-left: 4px solid #64b5ff;
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
        
        .database-status {
            padding: 15px;
            border-radius: 5px;
            margin-bottom: 20px;
            background: rgba(17, 34, 64, 0.7);
            border: 1px solid rgba(100, 255, 218, 0.1);
        }
        
        .progress {
            background-color: rgba(0, 0, 0, 0.2);
            height: 8px;
            border-radius: 4px;
        }
        
        .progress-bar {
            border-radius: 4px;
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
        
        .form-control {
            background-color: rgba(17, 34, 64, 0.7);
            border: 1px solid rgba(100, 255, 218, 0.2);
            color: var(--text-primary);
        }
        
        .form-control:focus {
            background-color: rgba(17, 34, 64, 0.9);
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.25rem rgba(100, 255, 218, 0.25);
            color: var(--text-primary);
        }
        
        .bg-light {
            background-color: rgba(17, 34, 64, 0.7) !important;
        }
        
        .text-muted {
            color: var(--text-secondary) !important;
        }
        
        /* Background patterns */
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
        
        /* Animated background elements */
        .floating-element {
            position: absolute;
            border-radius: 50%;
            background: rgba(100, 255, 218, 0.1);
            filter: blur(40px);
            z-index: -1;
        }
        
        #float1 {
            width: 300px;
            height: 300px;
            top: -150px;
            right: -150px;
            animation: float 15s ease-in-out infinite;
        }
        
        #float2 {
            width: 200px;
            height: 200px;
            bottom: -100px;
            left: -100px;
            animation: float 12s ease-in-out infinite reverse;
        }
        
        @keyframes float {
            0% { transform: translate(0, 0) rotate(0deg); }
            50% { transform: translate(20px, 20px) rotate(180deg); }
            100% { transform: translate(0, 0) rotate(360deg); }
        }
    </style>
</head>
<body>
    <!-- Floating background elements -->
    <div class="floating-element" id="float1"></div>
    <div class="floating-element" id="float2"></div>
    
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg navbar-dark fixed-top">
        <div class="container">
            <a class="navbar-brand" href="">
                <i class="fas fa-laptop-code me-2"></i>
                HMJ-MI
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="index.php">Beranda</a>
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
            <h1 class="display-4 fw-bold">HIMPUNAN MAHASISWA JURUSAN MANAJEMEN INFORMATIKA</h1>
            <p class="lead">Mewadahi, Menginspirasi, dan Menggerakkan Mahasiswa Menuju Masa Depan Teknologi yang Lebih Baik</p>
            <a href="#" class="btn btn-primary btn-lg mt-3">Jelajahi Sekarang</a>
        </div>
    </section>

    <!-- About Section -->
    <section class="container mb-5">
        <h2 class="section-title">Tentang HMJ-MI</h2>
        <div class="row">
            <div class="col-md-6">
                <p class="lead">HMJ-MI adalah organisasi mahasiswa jurusan Manajemen Informatika yang bertujuan untuk mengembangkan potensi mahasiswa dalam bidang teknologi informasi dan manajemen.</p>
                <p>Kami menyelenggarakan berbagai kegiatan seperti seminar, workshop, kompetisi, dan kegiatan sosial untuk meningkatkan kompetensi anggota dan kontribusi kepada masyarakat.</p>
                <a href="#" class="btn btn-outline-primary">Selengkapnya</a>
            </div>
            <div class="col-md-6">
                <div class="card bg-pattern">
                    <div class="card-body text-center">
                        <h3>Visi & Misi</h3>
                        <p><strong>Visi:</strong> Menjadi himpunan mahasiswa yang unggul dalam pengembangan teknologi informasi dan manajemen.</p>
                        <p><strong>Misi:</strong> Meningkatkan kualitas anggota melalui berbagai kegiatan akademik dan non-akademik.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Programs Section -->
    <section class="container py-5">
        <h2 class="section-title">Program Kerja</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card event-card bg-pattern">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Seminar</span>
                        <h5 class="card-title">IT Leadership Summit 2023</h5>
                        <p class="card-text">Seminar tentang kepemimpinan dalam dunia teknologi informasi dengan pembicara dari industri.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> 15 Oktober 2023
                            </small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card bg-pattern">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Workshop</span>
                        <h5 class="card-title">Web Development Bootcamp</h5>
                        <p class="card-text">Pelatihan intensif pembuatan website modern dengan teknologi terkini.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> 22-25 Oktober 2023
                            </small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card event-card bg-pattern">
                    <div class="card-body">
                        <span class="badge bg-warning mb-2">Kompetisi</span>
                        <h5 class="card-title">Hackathon Fintech 2023</h5>
                        <p class="card-text">Kompetisi pengembangan solusi teknologi finansial untuk mahasiswa se-Indonesia.</p>
                        <div class="d-flex justify-content-between align-items-center">
                            <small class="text-muted">
                                <i class="far fa-calendar me-1"></i> 5-7 November 2023
                            </small>
                            <a href="#" class="btn btn-sm btn-outline-primary">Detail</a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="text-center mt-4">
            <a href="#" class="btn btn-primary">Lihat Semua Program</a>
        </div>
    </section>

    <!-- News Section -->
    <section class="container py-5">
        <h2 class="section-title">Berita Terbaru</h2>
        <div class="row">
            <div class="col-md-4">
                <div class="card news-card bg-pattern">
                    <img src="https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title">HMJ-MI Raih Penghargaan Organisasi Terbaik</h5>
                        <p class="card-text">Organisasi HMJ-MI berhasil meraih penghargaan sebagai organisasi mahasiswa terbaik tahun 2023.</p>
                        <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card news-card bg-pattern">
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title">Kerjasama dengan Perusahaan Teknologi Ternama</h5>
                        <p class="card-text">HMJ-MI menjalin kerjasama dengan perusahaan teknologi ternama untuk program magang mahasiswa.</p>
                        <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
            <div class="col-md-4">
                <div class="card news-card bg-pattern">
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="card-img-top" alt="News Image">
                    <div class="card-body">
                        <h5 class="card-title">Pengabdian Masyarakat Desa Digital</h5>
                        <p class="card-text">Anggota HMJ-MI melakukan pengabdian masyarakat dengan program desa digital di daerah terpencil.</p>
                        <a href="#" class="btn btn-sm btn-primary">Baca Selengkapnya</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Management Section -->
    <section class="container py-5">
        <h2 class="section-title">Pengurus HMJ-MI</h2>
        <div class="row">
            <div class="col-md-3 col-6 text-center mb-4">
                <img src="https://randomuser.me/api/portraits/men/32.jpg" class="rounded-circle mb-2" width="120" alt="Profile">
                <h5>Alex Pratama</h5>
                <p class="text-muted">Ketua Umum</p>
            </div>
            <div class="col-md-3 col-6 text-center mb-4">
                <img src="https://randomuser.me/api/portraits/women/44.jpg" class="rounded-circle mb-2" width="120" alt="Profile">
                <h5>Dewi Anggraini</h5>
                <p class="text-muted">Wakil Ketua</p>
            </div>
            <div class="col-md-3 col-6 text-center mb-4">
                <img src="https://randomuser.me/api/portraits/men/22.jpg" class="rounded-circle mb-2" width="120" alt="Profile">
                <h5>Rizky Maulana</h5>
                <p class="text-muted">Sekretaris</p>
            </div>
            <div class="col-md-3 col-6 text-center mb-4">
                <img src="https://randomuser.me/api/portraits/women/65.jpg" class="rounded-circle mb-2" width="120" alt="Profile">
                <h5>Sinta Wulandari</h5>
                <p class="text-muted">Bendahara</p>
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
        // Animasi untuk elemen mengambang
        document.addEventListener('DOMContentLoaded', function() {
            // Efek parallax pada hero section
            const heroSection = document.querySelector('.hero-section');
            if (heroSection) {
                window.addEventListener('scroll', function() {
                    const scrolled = window.pageYOffset;
                    const rate = scrolled * -0.5;
                    heroSection.style.backgroundPosition = 'center ' + rate + 'px';
                });
            }
            
            // Animasi untuk card saat muncul di viewport
            const cards = document.querySelectorAll('.card');
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            cards.forEach(card => {
                card.style.opacity = 0;
                card.style.transform = 'translateY(20px)';
                card.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(card);
            });
        });
    </script>
</body>
</html>