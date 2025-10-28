<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Program Kerja - HMJ-MI - Himpunan Mahasiswa Jurusan - Manajemen Informatika</title>
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
                        url('https://images.unsplash.com/photo-1552664730-d307ca884978?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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
        
        .program-category {
            margin-bottom: 40px;
        }
        
        .program-card {
            border-left: 4px solid var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .program-card:hover {
            border-left: 4px solid #e6f1ff;
        }
        
        .status-badge {
            position: absolute;
            top: 15px;
            right: 15px;
            font-size: 0.8rem;
        }
        
        .program-img {
            height: 200px;
            object-fit: cover;
            width: 100%;
        }
        
        .program-date {
            color: var(--accent-color);
            font-weight: 600;
        }
        
        .program-stats {
            display: flex;
            justify-content: space-between;
            margin-top: 15px;
            padding-top: 15px;
            border-top: 1px solid rgba(100, 255, 218, 0.1);
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 1.2rem;
            font-weight: 700;
            color: var(--accent-color);
        }
        
        .stat-label {
            font-size: 0.8rem;
            color: var(--text-secondary);
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
        
        .calendar-highlight {
            background: rgba(100, 255, 218, 0.1);
            border-radius: 5px;
            padding: 20px;
            margin-bottom: 30px;
        }
        
        .calendar-date {
            font-size: 2rem;
            font-weight: 700;
            color: var(--accent-color);
            line-height: 1;
        }
        
        .calendar-month {
            font-size: 1.2rem;
            color: var(--text-secondary);
        }
        
        .upcoming-event {
            border-left: 3px solid var(--accent-color);
            padding: 10px 15px;
            margin-bottom: 15px;
            background: rgba(17, 34, 64, 0.5);
        }
        
        @media (max-width: 768px) {
            .filter-buttons {
                flex-direction: column;
                align-items: center;
            }
            
            .filter-btn {
                width: 80%;
            }
            
            .program-stats {
                flex-direction: column;
                gap: 10px;
            }
            
            .stat-item {
                display: flex;
                justify-content: space-between;
            }
        }
        
        /* Animation for program cards */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .program-item {
            animation: fadeIn 0.5s ease forwards;
            opacity: 0;
        }
        
        .program-item:nth-child(1) { animation-delay: 0.1s; }
        .program-item:nth-child(2) { animation-delay: 0.2s; }
        .program-item:nth-child(3) { animation-delay: 0.3s; }
        .program-item:nth-child(4) { animation-delay: 0.4s; }
        .program-item:nth-child(5) { animation-delay: 0.5s; }
        .program-item:nth-child(6) { animation-delay: 0.6s; }
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
                        <a class="nav-link active" href="program-kerja.php">Program Kerja</a>
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
            <h1 class="display-4 fw-bold">PROGRAM KERJA HMJ-MI</h1>
            <p class="lead">Berbagai kegiatan dan program unggulan untuk pengembangan anggota</p>
        </div>
    </section>

    <!-- Filter Section -->
    <section class="container mb-5">
        <div class="row">
            <div class="col-lg-8">
                <h2 class="section-title">Program Unggulan</h2>
                <div class="filter-buttons">
                    <button class="filter-btn active" data-filter="all">Semua Program</button>
                    <button class="filter-btn" data-filter="akademik">Akademik</button>
                    <button class="filter-btn" data-filter="kemandirian">Kemandirian</button>
                    <button class="filter-btn" data-filter="sosial">Sosial</button>
                    <button class="filter-btn" data-filter="kewirausahaan">Kewirausahaan</button>
                </div>
            </div>
            <div class="col-lg-4">
                <div class="calendar-highlight">
                    <h4 class="mb-3">Event Mendatang</h4>
                    
                    <div class="upcoming-event">
                        <div class="d-flex align-items-center mb-2">
                            <div class="calendar-date me-2">15</div>
                            <div class="calendar-month">Des 2023</div>
                        </div>
                        <h6>Web Development Bootcamp</h6>
                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i> Lab. Komputer FTIK</small>
                    </div>
                    
                    <div class="upcoming-event">
                        <div class="d-flex align-items-center mb-2">
                            <div class="calendar-date me-2">20</div>
                            <div class="calendar-month">Des 2023</div>
                        </div>
                        <h6>Seminar Cyber Security</h6>
                        <small class="text-muted"><i class="fas fa-map-marker-alt me-1"></i> Aula Kampus</small>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program List Section -->
    <section class="container mb-5">
        <div class="row">
            <!-- Program 1 -->
            <div class="col-md-6 col-lg-4 program-item" data-category="akademik">
                <div class="card program-card bg-pattern">
                    <span class="status-badge badge bg-success">Aktif</span>
                    <img src="https://images.unsplash.com/photo-1553877522-43269d4ea984?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="program-img" alt="Web Development Bootcamp">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Akademik</span>
                        <h5 class="card-title">Web Development Bootcamp</h5>
                        <p class="card-text">Pelatihan intensif pembuatan website modern dengan teknologi terkini untuk meningkatkan skill programming.</p>
                        <div class="program-date">
                            <i class="far fa-calendar me-1"></i> 15 Des 2023
                        </div>
                        <div class="program-stats">
                            <div class="stat-item">
                                <div class="stat-number">42</div>
                                <div class="stat-label">Peserta</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">5</div>
                                <div class="stat-label">Sesi</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">80%</div>
                                <div class="stat-label">Progress</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-outline-primary w-100">Detail Program</a>
                    </div>
                </div>
            </div>
            
            <!-- Program 2 -->
            <div class="col-md-6 col-lg-4 program-item" data-category="akademik">
                <div class="card program-card bg-pattern">
                    <span class="status-badge badge bg-success">Aktif</span>
                    <img src="https://images.unsplash.com/photo-1543269865-cbf427effbad?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="program-img" alt="Seminar Cyber Security">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Akademik</span>
                        <h5 class="card-title">Seminar Cyber Security</h5>
                        <p class="card-text">Seminar tentang keamanan siber dengan pembicara ahli dari industri untuk meningkatkan awareness tentang cyber security.</p>
                        <div class="program-date">
                            <i class="far fa-calendar me-1"></i> 20 Des 2023
                        </div>
                        <div class="program-stats">
                            <div class="stat-item">
                                <div class="stat-number">75</div>
                                <div class="stat-label">Peserta</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">1</div>
                                <div class="stat-label">Sesi</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">60%</div>
                                <div class="stat-label">Progress</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-outline-primary w-100">Detail Program</a>
                    </div>
                </div>
            </div>
            
            <!-- Program 3 -->
            <div class="col-md-6 col-lg-4 program-item" data-category="kemandirian">
                <div class="card program-card bg-pattern">
                    <span class="status-badge badge bg-warning">Akan Datang</span>
                    <img src="https://images.unsplash.com/photo-1573164713714-d95e436ab8d6?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="program-img" alt="Leadership Training">
                    <div class="card-body">
                        <span class="badge bg-success mb-2">Kemandirian</span>
                        <h5 class="card-title">Leadership Training</h5>
                        <p class="card-text">Pelatihan kepemimpinan untuk pengurus HMJ-MI guna meningkatkan kemampuan manajerial dan organisasi.</p>
                        <div class="program-date">
                            <i class="far fa-calendar me-1"></i> 5 Jan 2024
                        </div>
                        <div class="program-stats">
                            <div class="stat-item">
                                <div class="stat-number">25</div>
                                <div class="stat-label">Peserta</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">3</div>
                                <div class="stat-label">Sesi</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">30%</div>
                                <div class="stat-label">Progress</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-outline-primary w-100">Detail Program</a>
                    </div>
                </div>
            </div>
            
            <!-- Program 4 -->
            <div class="col-md-6 col-lg-4 program-item" data-category="sosial">
                <div class="card program-card bg-pattern">
                    <span class="status-badge badge bg-info">Berjalan</span>
                    <img src="https://images.unsplash.com/photo-1516321318423-f06f85e504b3?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="program-img" alt="Desa Digital">
                    <div class="card-body">
                        <span class="badge bg-info mb-2">Sosial</span>
                        <h5 class="card-title">Desa Digital</h5>
                        <p class="card-text">Program pengabdian masyarakat dengan menerapkan teknologi digital untuk membantu masyarakat desa.</p>
                        <div class="program-date">
                            <i class="far fa-calendar me-1"></i> 12 Jan 2024
                        </div>
                        <div class="program-stats">
                            <div class="stat-item">
                                <div class="stat-number">15</div>
                                <div class="stat-label">Relawan</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">4</div>
                                <div class="stat-label">Lokasi</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">45%</div>
                                <div class="stat-label">Progress</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-outline-primary w-100">Detail Program</a>
                    </div>
                </div>
            </div>
            
            <!-- Program 5 -->
            <div class="col-md-6 col-lg-4 program-item" data-category="kewirausahaan">
                <div class="card program-card bg-pattern">
                    <span class="status-badge badge bg-success">Aktif</span>
                    <img src="https://images.unsplash.com/photo-1556761175-b413da4baf72?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="program-img" alt="Startup Competition">
                    <div class="card-body">
                        <span class="badge bg-warning mb-2">Kewirausahaan</span>
                        <h5 class="card-title">Startup Competition</h5>
                        <p class="card-text">Kompetisi startup untuk mahasiswa dengan hadiah total 50 juta rupiah dan pendampingan dari praktisi industri.</p>
                        <div class="program-date">
                            <i class="far fa-calendar me-1"></i> 25 Feb 2024
                        </div>
                        <div class="program-stats">
                            <div class="stat-item">
                                <div class="stat-number">32</div>
                                <div class="stat-label">Tim</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">5</div>
                                <div class="stat-label">Mentor</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">25%</div>
                                <div class="stat-label">Progress</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-outline-primary w-100">Detail Program</a>
                    </div>
                </div>
            </div>
            
            <!-- Program 6 -->
            <div class="col-md-6 col-lg-4 program-item" data-category="akademik">
                <div class="card program-card bg-pattern">
                    <span class="status-badge badge bg-secondary">Selesai</span>
                    <img src="https://images.unsplash.com/photo-1517245386807-bb43f82c33c4?ixlib=rb-4.0.3&auto=format&fit=crop&w=600&q=80" class="program-img" alt="Workshop UI/UX Design">
                    <div class="card-body">
                        <span class="badge bg-primary mb-2">Akademik</span>
                        <h5 class="card-title">Workshop UI/UX Design</h5>
                        <p class="card-text">Workshop desain antarmuka pengguna dan pengalaman pengguna untuk aplikasi mobile dan web.</p>
                        <div class="program-date">
                            <i class="far fa-calendar me-1"></i> 10 Nov 2023
                        </div>
                        <div class="program-stats">
                            <div class="stat-item">
                                <div class="stat-number">38</div>
                                <div class="stat-label">Peserta</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">2</div>
                                <div class="stat-label">Sesi</div>
                            </div>
                            <div class="stat-item">
                                <div class="stat-number">100%</div>
                                <div class="stat-label">Progress</div>
                            </div>
                        </div>
                    </div>
                    <div class="card-footer bg-transparent border-top-0">
                        <a href="#" class="btn btn-outline-primary w-100">Detail Program</a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Program Stats Section -->
    <section class="container mb-5">
        <div class="card bg-pattern">
            <div class="card-header text-center">
                <h3>Statistik Program Kerja</h3>
            </div>
            <div class="card-body">
                <div class="row text-center">
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-number" style="font-size: 2.5rem; color: var(--accent-color);">15</div>
                        <div class="stat-label">Total Program</div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-number" style="font-size: 2.5rem; color: var(--accent-color);">8</div>
                        <div class="stat-label">Program Aktif</div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-number" style="font-size: 2.5rem; color: var(--accent-color);">325</div>
                        <div class="stat-label">Total Peserta</div>
                    </div>
                    <div class="col-md-3 col-6 mb-4">
                        <div class="stat-number" style="font-size: 2.5rem; color: var(--accent-color);">92%</div>
                        <div class="stat-label">Kepuasan Peserta</div>
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
            const programItems = document.querySelectorAll('.program-item');
            
            filterButtons.forEach(button => {
                button.addEventListener('click', function() {
                    // Remove active class from all buttons
                    filterButtons.forEach(btn => btn.classList.remove('active'));
                    
                    // Add active class to clicked button
                    this.classList.add('active');
                    
                    const filterValue = this.getAttribute('data-filter');
                    
                    programItems.forEach(item => {
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
            
            // Animation for program cards
            const animatedItems = document.querySelectorAll('.program-item');
            
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