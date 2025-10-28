<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Profil - HMJ-MI - Himpunan Mahasiswa Jurusan - Manajemen Informatika</title>
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
        
        .timeline {
            position: relative;
            padding: 20px 0;
        }
        
        .timeline::before {
            content: '';
            position: absolute;
            left: 50%;
            width: 2px;
            height: 100%;
            background: var(--accent-color);
            transform: translateX(-50%);
        }
        
        .timeline-item {
            position: relative;
            margin-bottom: 40px;
            width: 50%;
            padding: 0 40px;
            box-sizing: border-box;
        }
        
        .timeline-item:nth-child(odd) {
            left: 0;
            text-align: right;
        }
        
        .timeline-item:nth-child(even) {
            left: 50%;
        }
        
        .timeline-content {
            background: var(--secondary-color);
            padding: 20px;
            border-radius: 10px;
            position: relative;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .timeline-item:nth-child(odd) .timeline-content::after {
            content: '';
            position: absolute;
            top: 20px;
            right: -10px;
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-left: 10px solid var(--secondary-color);
            border-bottom: 10px solid transparent;
        }
        
        .timeline-item:nth-child(even) .timeline-content::after {
            content: '';
            position: absolute;
            top: 20px;
            left: -10px;
            width: 0;
            height: 0;
            border-top: 10px solid transparent;
            border-right: 10px solid var(--secondary-color);
            border-bottom: 10px solid transparent;
        }
        
        .timeline-dot {
            position: absolute;
            top: 20px;
            width: 20px;
            height: 20px;
            background: var(--accent-color);
            border-radius: 50%;
            z-index: 1;
        }
        
        .timeline-item:nth-child(odd) .timeline-dot {
            right: -10px;
        }
        
        .timeline-item:nth-child(even) .timeline-dot {
            left: -10px;
        }
        
        .value-card {
            text-align: center;
            padding: 30px 20px;
            border-radius: 10px;
            transition: all 0.3s ease;
        }
        
        .value-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.4);
        }
        
        .value-icon {
            font-size: 3rem;
            margin-bottom: 20px;
            color: var(--accent-color);
        }
        
        @media (max-width: 768px) {
            .timeline::before {
                left: 30px;
            }
            
            .timeline-item {
                width: 100%;
                padding-left: 70px;
                padding-right: 20px;
            }
            
            .timeline-item:nth-child(even) {
                left: 0;
            }
            
            .timeline-item:nth-child(odd) .timeline-content::after,
            .timeline-item:nth-child(even) .timeline-content::after {
                left: -10px;
                right: auto;
                border-right: 10px solid var(--secondary-color);
                border-left: none;
            }
            
            .timeline-dot {
                left: 20px;
            }
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
                        <a class="nav-link active" href="profil.php">Profil</a>
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
            <h1 class="display-4 fw-bold">PROFIL HMJ-MI</h1>
            <p class="lead">Mengenal lebih dekat Himpunan Mahasiswa Jurusan Manajemen Informatika</p>
        </div>
    </section>

    <!-- Sejarah Section -->
    <section class="container mb-5">
        <div class="row align-items-center">
            <div class="col-lg-6">
                <h2 class="section-title">Sejarah HMJ-MI</h2>
                <p class="lead">HMJ-MI didirikan pada tahun 2005 dengan tujuan menjadi wadah bagi mahasiswa Manajemen Informatika untuk mengembangkan potensi diri.</p>
                <p>Sejak berdiri, HMJ-MI telah konsisten menyelenggarakan berbagai kegiatan yang mendukung pengembangan akademik dan non-akademik mahasiswa.</p>
                <p>Kami telah meluluskan lebih dari 500 anggota yang kini berkontribusi di berbagai perusahaan teknologi ternama di Indonesia.</p>
            </div>
            <div class="col-lg-6">
                <div class="card bg-pattern">
                    <img src="https://images.unsplash.com/photo-1522202176988-66273c2fd55f?ixlib=rb-4.0.3&auto=format&fit=crop&w=800&q=80" class="card-img-top" alt="Sejarah HMJ-MI">
                    <div class="card-body">
                        <h5 class="card-title">Foto Pendirian HMJ-MI (2005)</h5>
                        <p class="card-text">Dokumentasi pertama kali pendirian HMJ-MI oleh para founding fathers.</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Visi Misi Section -->
    <section class="container mb-5">
        <h2 class="section-title">Visi & Misi</h2>
        <div class="row">
            <div class="col-md-6 mb-4">
                <div class="card bg-pattern h-100">
                    <div class="card-header">
                        <h4><i class="fas fa-bullseye me-2"></i>Visi</h4>
                    </div>
                    <div class="card-body">
                        <p class="card-text">Menjadi himpunan mahasiswa yang unggul dalam pengembangan teknologi informasi dan manajemen, serta mampu berkontribusi positif bagi masyarakat dan bangsa Indonesia.</p>
                    </div>
                </div>
            </div>
            <div class="col-md-6 mb-4">
                <div class="card bg-pattern h-100">
                    <div class="card-header">
                        <h4><i class="fas fa-tasks me-2"></i>Misi</h4>
                    </div>
                    <div class="card-body">
                        <ol>
                            <li>Meningkatkan kualitas anggota melalui berbagai kegiatan akademik dan non-akademik</li>
                            <li>Membangun jaringan kerjasama dengan berbagai pihak terkait</li>
                            <li>Mengadakan kegiatan yang bermanfaat bagi masyarakat</li>
                            <li>Mengembangkan soft skill dan hard skill anggota</li>
                            <li>Menjadi wadah aspirasi bagi mahasiswa Manajemen Informatika</li>
                        </ol>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Nilai-nilai Section -->
    <section class="container mb-5">
        <h2 class="section-title">Nilai-nilai Kami</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="value-card card bg-pattern h-100">
                    <div class="value-icon">
                        <i class="fas fa-users"></i>
                    </div>
                    <h4>Kolaborasi</h4>
                    <p>Kami percaya bahwa kerja sama tim adalah kunci kesuksesan dalam mencapai tujuan bersama.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-card card bg-pattern h-100">
                    <div class="value-icon">
                        <i class="fas fa-lightbulb"></i>
                    </div>
                    <h4>Inovasi</h4>
                    <p>Kami terus mendorong terciptanya ide-ide kreatif dan inovatif dalam setiap kegiatan.</p>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="value-card card bg-pattern h-100">
                    <div class="value-icon">
                        <i class="fas fa-hand-holding-heart"></i>
                    </div>
                    <h4>Integritas</h4>
                    <p>Kami menjunjung tinggi kejujuran, transparansi, dan tanggung jawab dalam setiap tindakan.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Timeline Section -->
    <section class="container mb-5">
        <h2 class="section-title">Linimasa Kegiatan</h2>
        <div class="timeline">
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>2005</h4>
                    <p>Pendirian HMJ-MI oleh mahasiswa angkatan pertama Manajemen Informatika.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>2008</h4>
                    <p>Penyelenggaraan seminar teknologi pertama dengan pembicara dari industri.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>2012</h4>
                    <p>Peresmian ruang sekretariat HMJ-MI oleh dekan Fakultas Ilmu Komputer.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>2015</h4>
                    <p>Perayaan 10 tahun HMJ-MI dengan serangkaian acara dan kegiatan amal.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>2018</h4>
                    <p>Kerjasama pertama dengan perusahaan teknologi untuk program magang.</p>
                </div>
            </div>
            <div class="timeline-item">
                <div class="timeline-dot"></div>
                <div class="timeline-content">
                    <h4>2022</h4>
                    <p>Penghargaan sebagai organisasi mahasiswa terbaik tingkat universitas.</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Struktur Organisasi Section -->
    <section class="container mb-5">
        <h2 class="section-title">Struktur Organisasi</h2>
        <div class="row justify-content-center">
            <div class="col-md-8">
                <div class="card bg-pattern">
                    <div class="card-header text-center">
                        <h4>Struktur Kepengurusan HMJ-MI 2023/2024</h4>
                    </div>
                    <div class="card-body text-center">
                        <img src="https://images.unsplash.com/photo-1607746882042-944635dfe10e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1000&q=80" class="img-fluid rounded mb-4" alt="Struktur Organisasi">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <h5>Ketua Umum</h5>
                                <p class="mb-1">Alex Pratama</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h5>Wakil Ketua</h5>
                                <p class="mb-1">Dewi Anggraini</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h5>Sekretaris</h5>
                                <p class="mb-1">Rizky Maulana</p>
                            </div>
                            <div class="col-md-6 mb-3">
                                <h5>Bendahara</h5>
                                <p class="mb-1">Sinta Wulandari</p>
                            </div>
                        </div>
                        <a href="struktur-organisasi.php" class="btn btn-primary mt-3">Lihat Detail Struktur</a>
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
        // Animasi untuk timeline
        document.addEventListener('DOMContentLoaded', function() {
            const timelineItems = document.querySelectorAll('.timeline-content');
            
            const observer = new IntersectionObserver((entries) => {
                entries.forEach(entry => {
                    if (entry.isIntersecting) {
                        entry.target.style.opacity = 1;
                        entry.target.style.transform = 'translateY(0)';
                    }
                });
            }, { threshold: 0.1 });
            
            timelineItems.forEach(item => {
                item.style.opacity = 0;
                item.style.transform = 'translateY(20px)';
                item.style.transition = 'opacity 0.5s ease, transform 0.5s ease';
                observer.observe(item);
            });
            
            // Animasi untuk value cards
            const valueCards = document.querySelectorAll('.value-card');
            
            valueCards.forEach(card => {
                card.addEventListener('mouseenter', function() {
                    this.querySelector('.value-icon').style.transform = 'scale(1.2)';
                    this.querySelector('.value-icon').style.transition = 'transform 0.3s ease';
                });
                
                card.addEventListener('mouseleave', function() {
                    this.querySelector('.value-icon').style.transform = 'scale(1)';
                });
            });
        });
    </script>
</body>
</html>