<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Kontak - HMJ-MI - Himpunan Mahasiswa Jurusan - Manajemen Informatika</title>
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
                        url('https://images.unsplash.com/photo-1516387938699-a93567ec168e?ixlib=rb-4.0.3&auto=format&fit=crop&w=1200&q=80');
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
        
        /* Contact Styles */
        .contact-info {
            padding: 30px;
            border-radius: 10px;
            background: var(--secondary-color);
            height: 100%;
        }
        
        .contact-icon {
            width: 60px;
            height: 60px;
            background: rgba(100, 255, 218, 0.1);
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin-bottom: 20px;
            font-size: 1.5rem;
            color: var(--accent-color);
        }
        
        .contact-form {
            padding: 30px;
            border-radius: 10px;
            background: var(--secondary-color);
        }
        
        .form-control {
            background: rgba(255, 255, 255, 0.05);
            border: 1px solid rgba(100, 255, 218, 0.2);
            color: var(--text-primary);
            padding: 12px 15px;
            border-radius: 8px;
            transition: all 0.3s ease;
        }
        
        .form-control:focus {
            background: rgba(255, 255, 255, 0.1);
            border-color: var(--accent-color);
            box-shadow: 0 0 0 0.25rem rgba(100, 255, 218, 0.25);
            color: var(--text-primary);
        }
        
        .form-label {
            color: var(--text-primary);
            margin-bottom: 8px;
            font-weight: 500;
        }
        
        .map-container {
            border-radius: 10px;
            overflow: hidden;
            height: 400px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.3);
        }
        
        .map-container iframe {
            width: 100%;
            height: 100%;
            border: none;
        }
        
        .team-member {
            text-align: center;
            padding: 20px;
            border-radius: 10px;
            background: var(--secondary-color);
            transition: all 0.3s ease;
            height: 100%;
        }
        
        .team-member:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.4);
        }
        
        .team-img {
            width: 120px;
            height: 120px;
            border-radius: 50%;
            object-fit: cover;
            margin-bottom: 15px;
            border: 3px solid var(--accent-color);
        }
        
        .social-links {
            display: flex;
            justify-content: center;
            gap: 10px;
            margin-top: 15px;
        }
        
        .social-link {
            width: 36px;
            height: 36px;
            border-radius: 50%;
            background: rgba(100, 255, 218, 0.1);
            display: flex;
            align-items: center;
            justify-content: center;
            color: var(--accent-color);
            transition: all 0.3s ease;
        }
        
        .social-link:hover {
            background: var(--accent-color);
            color: var(--primary-color);
            transform: translateY(-3px);
        }
        
        .office-hours {
            margin-top: 20px;
        }
        
        .hour-item {
            display: flex;
            justify-content: space-between;
            padding: 8px 0;
            border-bottom: 1px solid rgba(100, 255, 218, 0.1);
        }
        
        .hour-item:last-child {
            border-bottom: none;
        }
        
        /* FAQ Styles */
        .accordion-button {
            background: rgba(17, 34, 64, 0.8);
            color: var(--text-primary);
            font-weight: 500;
            border: none;
            box-shadow: none;
        }
        
        .accordion-button:not(.collapsed) {
            background: var(--accent-color);
            color: var(--primary-color);
        }
        
        .accordion-body {
            background: var(--secondary-color);
            color: var(--text-primary);
        }
        
        .accordion-item {
            border: 1px solid rgba(100, 255, 218, 0.2);
            margin-bottom: 15px;
            border-radius: 8px;
            overflow: hidden;
        }
        
        /* Responsive */
        @media (max-width: 768px) {
            .contact-info, .contact-form {
                padding: 20px;
            }
            
            .team-member {
                margin-bottom: 20px;
            }
        }
        
        /* Animations */
        @keyframes fadeIn {
            from { opacity: 0; transform: translateY(20px); }
            to { opacity: 1; transform: translateY(0); }
        }
        
        .contact-item {
            animation: fadeIn 0.5s ease forwards;
            opacity: 0;
        }
        
        .contact-item:nth-child(1) { animation-delay: 0.1s; }
        .contact-item:nth-child(2) { animation-delay: 0.2s; }
        .contact-item:nth-child(3) { animation-delay: 0.3s; }
        .contact-item:nth-child(4) { animation-delay: 0.4s; }
        
        /* Notification */
        .notification {
            position: fixed;
            top: 20px;
            right: 20px;
            z-index: 9999;
            min-width: 300px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.2);
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
                        <a class="nav-link" href="berita.php">Berita</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="galeri.php">Galeri</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="download.php">Download</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link active" href="kontak.php">Kontak</a>
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
            <h1 class="display-4 fw-bold">HUBUNGI KAMI</h1>
            <p class="lead">Kami siap membantu dan menjawab semua pertanyaan Anda seputar HMJ Manajemen Informatika</p>
        </div>
    </section>

    <!-- Contact Info -->
    <section class="container mb-5">
        <div class="row">
            <div class="col-md-4 mb-4 contact-item">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fas fa-map-marker-alt"></i>
                    </div>
                    <h4>Alamat</h4>
                    <p>Gedung Fakultas Ilmu Komputer<br>Universitas Teknologi Nusantara<br>Jl. Teknologi No. 123, Jakarta 12520</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 contact-item">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fas fa-phone"></i>
                    </div>
                    <h4>Telepon</h4>
                    <p>+62 21 1234 5678<br>+62 21 8765 4321</p>
                    <p class="text-muted">Senin - Jumat, 08:00 - 16:00</p>
                </div>
            </div>
            <div class="col-md-4 mb-4 contact-item">
                <div class="contact-info">
                    <div class="contact-icon">
                        <i class="fas fa-envelope"></i>
                    </div>
                    <h4>Email</h4>
                    <p>info@hmj-mi.org<br>hmjmi@utn.ac.id</p>
                    <p class="text-muted">Response time: within 24 hours</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Contact Form & Map -->
    <section class="container mb-5">
        <div class="row">
            <div class="col-lg-8 mb-4">
                <div class="contact-form">
                    <h2 class="section-title">Kirim Pesan</h2>
                    <form id="contactForm">
                        <div class="row">
                            <div class="col-md-6 mb-3">
                                <label for="name" class="form-label">Nama Lengkap</label>
                                <input type="text" class="form-control" id="name" required>
                            </div>
                            <div class="col-md-6 mb-3">
                                <label for="email" class="form-label">Alamat Email</label>
                                <input type="email" class="form-control" id="email" required>
                            </div>
                        </div>
                        <div class="mb-3">
                            <label for="subject" class="form-label">Subjek</label>
                            <input type="text" class="form-control" id="subject" required>
                        </div>
                        <div class="mb-3">
                            <label for="message" class="form-label">Pesan</label>
                            <textarea class="form-control" id="message" rows="5" required></textarea>
                        </div>
                        <button type="submit" class="btn btn-primary">Kirim Pesan</button>
                    </form>
                </div>
            </div>
            <div class="col-lg-4 mb-4">
                <div class="map-container">
                    <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3966.521260322283!2d106.81956135063955!3d-6.194661395493371!2m3!1f0!2f0!3f0!4m13!3e2!4m5!1s0x2e69f5397167e8dd%3A0x3a3c8f2d040b45ae!2sMonas!3m2!1d-6.1753924!2d106.8271528!4m5!1s0x2e69f3e945e34b9d%3A0x5371bf0fdad786a2!2sJakarta!5e0!3m2!1sen!2sid!4v1644742272488!5m2!1sen!2sid" allowfullscreen="" loading="lazy"></iframe>
                </div>
                <div class="office-hours mt-4">
                    <h5>Jam Operasional</h5>
                    <div class="hour-item">
                        <span>Senin - Kamis</span>
                        <span>08:00 - 16:00</span>
                    </div>
                    <div class="hour-item">
                        <span>Jumat</span>
                        <span>08:00 - 14:00</span>
                    </div>
                    <div class="hour-item">
                        <span>Sabtu - Minggu</span>
                        <span>Tutup</span>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section class="container mb-5">
        <h2 class="section-title">Tim Penghubung</h2>
        <div class="row">
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Ketua HMJ-MI" class="team-img">
                    <h5>Alex Pratama</h5>
                    <p class="text-muted">Ketua HMJ-MI</p>
                    <p>Bertanggung jawab atas keseluruhan kegiatan HMJ-MI dan hubungan eksternal.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-linkedin"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/women/44.jpg" alt="Sekretaris" class="team-img">
                    <h5>Dewi Anggraini</h5>
                    <p class="text-muted">Sekretaris</p>
                    <p>Menangani administrasi, korespondensi, dan dokumentasi kegiatan.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-instagram"></i></a>
                        <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
            <div class="col-md-4 mb-4">
                <div class="team-member">
                    <img src="https://randomuser.me/api/portraits/men/22.jpg" alt="Bendahara" class="team-img">
                    <h5>Rizky Maulana</h5>
                    <p class="text-muted">Bendahara</p>
                    <p>Mengelola keuangan dan pelaporan keuangan organisasi.</p>
                    <div class="social-links">
                        <a href="#" class="social-link"><i class="fab fa-whatsapp"></i></a>
                        <a href="#" class="social-link"><i class="fab fa-line"></i></a>
                        <a href="#" class="social-link"><i class="fas fa-envelope"></i></a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- FAQ Section -->
    <section class="container mb-5">
        <h2 class="section-title">Pertanyaan Umum</h2>
        <div class="accordion" id="faqAccordion">
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button" type="button" data-bs-toggle="collapse" data-bs-target="#faq1">
                        Bagaimana cara bergabung dengan HMJ-MI?
                    </button>
                </h2>
                <div id="faq1" class="accordion-collapse collapse show" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Untuk bergabung dengan HMJ-MI, Anda harus terdaftar sebagai mahasiswa Jurusan Manajemen Informatika. Proses pendaftaran biasanya dibuka setiap awal semester melalui open recruitment. Informasi lengkap dapat diperoleh melalui sosial media kami atau menghubungi sekretariat.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq2">
                        Apakah ada biaya keanggotaan?
                    </button>
                </h2>
                <div id="faq2" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Ya, terdapat iuran keanggotaan yang digunakan untuk mendukung kegiatan operasional dan program kerja HMJ-MI. Besaran iuran ditentukan melalui musyawarah anggota dan digunakan secara transparan untuk kepentingan bersama.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq3">
                        Bagaimana cara mengajukan proposal kegiatan?
                    </button>
                </h2>
                <div id="faq3" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Proposal kegiatan dapat diajukan melalui sekretariat HMJ-MI dengan mengisi formulir yang telah disediakan. Proposal akan ditinjau oleh pengurus inti dan disampaikan dalam rapat pleno untuk mendapatkan persetujuan. Template proposal dapat diunduh di halaman download kami.
                    </div>
                </div>
            </div>
            <div class="accordion-item">
                <h2 class="accordion-header">
                    <button class="accordion-button collapsed" type="button" data-bs-toggle="collapse" data-bs-target="#faq4">
                        Apakah non-anggota boleh mengikuti kegiatan HMJ-MI?
                    </button>
                </h2>
                <div id="faq4" class="accordion-collapse collapse" data-bs-parent="#faqAccordion">
                    <div class="accordion-body">
                        Beberapa kegiatan HMJ-MI terbuka untuk umum, seperti seminar dan workshop. Namun, untuk kegiatan tertentu yang khusus ditujukan untuk anggota, prioritas akan diberikan kepada anggota HMJ-MI. Informasi keterbukaan kegiatan selalu diumumkan melalui media sosial dan website kami.
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Social Media Section -->
    <section class="container mb-5">
        <h2 class="section-title">Ikuti Kami di Media Sosial</h2>
        <div class="row text-center">
            <div class="col-md-3 col-6 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card bg-pattern h-100">
                        <div class="card-body">
                            <i class="fab fa-instagram fa-3x mb-3" style="color: #E1306C;"></i>
                            <h5>Instagram</h5>
                            <p class="text-muted">@hmjmi_utn</p>
                            <span class="badge bg-primary">4.5K Followers</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card bg-pattern h-100">
                        <div class="card-body">
                            <i class="fab fa-facebook fa-3x mb-3" style="color: #3b5998;"></i>
                            <h5>Facebook</h5>
                            <p class="text-muted">HMJ MI UTN</p>
                            <span class="badge bg-primary">2.3K Followers</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card bg-pattern h-100">
                        <div class="card-body">
                            <i class="fab fa-youtube fa-3x mb-3" style="color: #FF0000;"></i>
                            <h5>YouTube</h5>
                            <p class="text-muted">HMJ MI Channel</p>
                            <span class="badge bg-primary">1.7K Subscribers</span>
                        </div>
                    </div>
                </a>
            </div>
            <div class="col-md-3 col-6 mb-4">
                <a href="#" class="text-decoration-none">
                    <div class="card bg-pattern h-100">
                        <div class="card-body">
                            <i class="fab fa-telegram fa-3x mb-3" style="color: #0088cc;"></i>
                            <h5>Telegram</h5>
                            <p class="text-muted">HMJ MI Group</p>
                            <span class="badge bg-primary">800 Members</span>
                        </div>
                    </div>
                </a>
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
        // Form submission handling
        document.addEventListener('DOMContentLoaded', function() {
            const contactForm = document.getElementById('contactForm');
            
            contactForm.addEventListener('submit', function(e) {
                e.preventDefault();
                
                // Get form values
                const name = document.getElementById('name').value;
                const email = document.getElementById('email').value;
                const subject = document.getElementById('subject').value;
                const message = document.getElementById('message').value;
                
                // Simulate form submission
                const submitBtn = contactForm.querySelector('button[type="submit"]');
                submitBtn.innerHTML = '<i class="fas fa-spinner fa-spin me-1"></i> Mengirim...';
                submitBtn.disabled = true;
                
                // Simulate API call
                setTimeout(() => {
                    // Show success notification
                    showNotification('Pesan Anda berhasil dikirim! Kami akan menghubungi Anda segera.', 'success');
                    
                    // Reset form
                    contactForm.reset();
                    
                    // Reset button
                    submitBtn.innerHTML = 'Kirim Pesan';
                    submitBtn.disabled = false;
                }, 2000);
            });
            
            // Animation for contact items
            const animatedItems = document.querySelectorAll('.contact-item');
            
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
            function showNotification(message, type = 'success') {
                const notification = document.createElement('div');
                notification.className = `notification alert alert-${type} alert-dismissible fade show`;
                notification.innerHTML = `
                    <i class="fas ${type === 'success' ? 'fa-check-circle' : 'fa-exclamation-circle'} me-2"></i>
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
                
                // Auto remove after 5 seconds
                setTimeout(() => {
                    if (notification.parentNode) {
                        notification.parentNode.removeChild(notification);
                    }
                }, 5000);
            }
        });
    </script>
</body>
</html>