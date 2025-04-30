<!DOCTYPE html>
<html lang="id">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>WDObat</title>
    <link rel="icon" href="https://img.icons8.com/?size=100&id=4359&format=png&color=198754">
    
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/css/bootstrap.min.css" rel="stylesheet">
    
    <!-- Font Awesome -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.7.0/css/all.min.css">
    
    <!-- Google Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;400;500;600;700&display=swap" rel="stylesheet">
    
    <!-- AOS Animation -->
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    
    <style>
        :root {
            --primary: #198754;
            --primary-dark: #14532d;
            --primary-dark2:#157046;
            --secondary: #6c757d;
            --light: #f8f9fa;
            --dark: #212529;
            --success: #28a745;
        }
        
        body {
            font-family: 'Poppins', sans-serif;
            color: var(--dark);
            overflow-x: hidden;
        }
        
        .navbar {
            padding: 20px 0;
            transition: all 0.3s;
            background-color: var(--primary-dark2) !important;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        .navbar.scrolled {
            padding: 10px 0;
            box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        }
        
        /* .navbar.scrolled .nav-link {
            color: var(--dark) !important;
        }
        
        .navbar.scrolled .nav-link.active {
            color: var(--primary) !important;
            font-weight: 600;
        } */
        
        /* .navbar.scrolled .btn-outline-primary {
            border-color: var(--primary);
            color: var(--primary);
        }
        
        .navbar.scrolled .btn-outline-primary:hover {
            background: var(--primary);
            color: white;
        } */
        
        .hero-section {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            padding: 180px 0 80px;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        /* .hero-section::before {
            content: "";
            position: absolute;
            bottom: -50px;
            left: 0;
            right: 0;
            height: 100px;
            background: white;  
            transform: skewY(-3deg);
        } */
        
        .feature-card {
            border: none;
            border-radius: 15px;
            overflow: hidden;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            height: 100%;
            background: white;
        }
        
        .feature-card:hover {
            transform: translateY(-10px);
            box-shadow: 0 15px 30px rgba(0, 0, 0, 0.1);
        }
        
        .section-title h2 {
            position: relative;
            display: inline-block;
            padding-bottom: 15px;
        }
        
        .section-title h2::after {
            content: '';
            position: absolute;
            left: 50%;
            bottom: 0;
            width: 80px;
            height: 3px;
            background: var(--primary);
            transform: translateX(-50%);
        }
        
        .stats-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            text-align: center;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            transition: all 0.3s;
            height: 100%;
        }
        
        .stats-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 10px 25px rgba(0, 0, 0, 0.1);
        }
        
        .stats-card .icon {
            width: 70px;
            height: 70px;
            border-radius: 50%;
            display: flex;
            align-items: center;
            justify-content: center;
            margin: 0 auto 20px;
            font-size: 30px;
            color: white;
        }
        
        .testimonial-card {
            background: white;
            border-radius: 15px;
            padding: 30px;
            box-shadow: 0 5px 15px rgba(0, 0, 0, 0.05);
            height: 100%;
            position: relative;
        }
        
        .testimonial-card::before {
            content: '\201C';
            font-family: Georgia, serif;
            font-size: 60px;
            color: rgba(42, 127, 186, 0.1);
            position: absolute;
            top: 20px;
            left: 20px;
        }
        
        .testimonial-img {
            width: 60px;
            height: 60px;
            border-radius: 50%;
            overflow: hidden;
            margin-right: 20px;
        }
        
        .cta-section {
            background: linear-gradient(135deg, var(--primary), var(--primary-dark));
            padding: 80px 0;
            color: white;
            position: relative;
            overflow: hidden;
        }
        
        /* .cta-section::before {
            content: "";
            position: absolute;
            top: -50px;
            left: 0;
            right: 0;
            height: 100px;
            background: white;
            transform: skewY(3deg);
        } */
        
        .btn-primary {
            background-color: var(--primary);
            border-color: var(--primary);
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 500;
        }
        
        .btn-primary:hover {
            background-color: var(--primary-dark);
            border-color: var(--primary-dark);
        }
        
        .btn-outline-primary {
            border-color: white;
            color: white;
            padding: 10px 25px;
            border-radius: 50px;
            font-weight: 500;
        }
        
        .btn-outline-primary:hover {
            background: white;
            color: var(--primary);
        }
        
        .bg-light {
            background-color: #f9fbfd !important;
        }
    </style>
</head>

<body>
    <!-- Navbar -->
    <nav class="navbar navbar-expand-lg fixed-top navbar-dark">
        <div class="container">
            <a class="navbar-brand fw-bold" href="#">
                <i class="fas fa-clinic-medical me-2"></i>WDObat
            </a>
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarNav">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarNav">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item">
                        <a class="nav-link active" href="#home">Beranda</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#fitur">Fitur</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#keunggulan">Keunggulan</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#testimoni">Testimoni</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#kontak">Kontak</a>
                    </li>
                </ul>
                <div class="ms-lg-3 mt-3 mt-lg-0">
                    <a href="/login" class="btn btn-outline-primary me-2">Masuk</a>
                    <a href="/register" class="btn btn-outline-primary">Daftar</a>
                </div>
            </div>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="home" class="hero-section">
        <div class="container">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <h1 class="display-4 fw-bold mb-4">Kelola Kesehatan dengan Lebih Efisien</h1>
                    <p class="lead mb-4">Sistem manajemen kesehatan terintegrasi untuk rumah sakit, klinik, dan praktik dokter. Tingkatkan pelayanan pasien dengan solusi digital kami.</p>
                    <div class="d-flex flex-wrap gap-3">
                        <a href="/register" class="btn btn-light btn-lg px-4 text-success">
                            Mulai Sekarang <i class="fas fa-arrow-right ms-2"></i>
                        </a>
                        <a href="#fitur" class="btn btn-outline-light btn-lg px-4">
                            Pelajari Lebih Lanjut
                        </a>
                    </div>
                </div>
                <div class="col-lg-6 text-center" data-aos="fade-left">
                    <img src="https://images.unsplash.com/photo-1579684385127-1ef15d508118" alt="Healthcare Management"
                    class="img-fluid rounded-3 shadow-lg" style="max-height: 400px;">
                </div>
            </div>
        </div>
    </section>

    <!-- Stats Section -->
    <section class="py-5">
        <div class="container">
            <div class="row g-4">
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="stats-card">
                        <div class="icon bg-primary">
                            <i class="fas fa-hospital"></i>
                        </div>
                        <h3 class="fw-bold">500+</h3>
                        <p class="text-muted mb-0">Fasilitas Kesehatan</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="stats-card">
                        <div class="icon bg-success">
                            <i class="fas fa-user-md"></i>
                        </div>
                        <h3 class="fw-bold">5,000+</h3>
                        <p class="text-muted mb-0">Tenaga Medis</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="stats-card">
                        <div class="icon bg-warning">
                            <i class="fas fa-procedures"></i>
                        </div>
                        <h3 class="fw-bold">1M+</h3>
                        <p class="text-muted mb-0">Pasien Terlayani</p>
                    </div>
                </div>
                <div class="col-md-3 col-sm-6" data-aos="fade-up" data-aos-delay="400">
                    <div class="stats-card">
                        <div class="icon bg-danger">
                            <i class="fas fa-shield-alt"></i>
                        </div>
                        <h3 class="fw-bold">100%</h3>
                        <p class="text-muted mb-0">Keamanan Data</p>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Features Section -->
    <section id="fitur" class="py-5 bg-light">
        <div class="container py-5">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Fitur Unggulan Kami</h2>
                <p class="lead text-muted">Solusi lengkap untuk manajemen kesehatan modern</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="feature-card">
                        <div class="card-body p-4">
                            <div class="icon-box bg-primary bg-opacity-10 text-primary mb-4">
                                <i class="fas fa-user-injured fa-2x"></i>
                            </div>
                            <h4>Manajemen Pasien</h4>
                            <p class="text-muted">Kelola data pasien secara digital, mulai dari pendaftaran hingga riwayat medis lengkap.</p>
                            <ul class="text-muted">
                                <li>Rekam medis elektronik</li>
                                <li>Penjadwalan janji temu</li>
                                <li>Notifikasi otomatis</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="feature-card">
                        <div class="card-body p-4">
                            <div class="icon-box bg-success bg-opacity-10 text-success mb-4">
                                <i class="fas fa-pills fa-2x"></i>
                            </div>
                            <h4>Manajemen Obat</h4>
                            <p class="text-muted">Pantau stok obat, resep digital, dan manajemen inventaris farmasi.</p>
                            <ul class="text-muted">
                                <li>Stok real-time</li>
                                <li>Peringatan kadaluarsa</li>
                                <li>Integrasi dengan BPJS</li>
                            </ul>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="feature-card">
                        <div class="card-body p-4">
                            <div class="icon-box bg-info bg-opacity-10 text-info mb-4">
                                <i class="fas fa-chart-line fa-2x"></i>
                            </div>
                            <h4>Analitik Kesehatan</h4>
                            <p class="text-muted">Dashboard lengkap dengan laporan dan analisis data kesehatan.</p>
                            <ul class="text-muted">
                                <li>Visualisasi data</li>
                                <li>Laporan keuangan</li>
                                <li>Kinerja fasilitas</li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Keunggulan Section -->
    <section id="keunggulan" class="py-5">
        <div class="container py-5">
            <div class="row align-items-center">
                <div class="col-lg-6 mb-5 mb-lg-0" data-aos="fade-right">
                    <img src="https://img.freepik.com/free-vector/telemedicine-concept-illustration_114360-7473.jpg" alt="Healthcare Benefits" class="img-fluid rounded-3 shadow">
                </div>
                <div class="col-lg-6" data-aos="fade-left">
                    <div class="ps-lg-5">
                        <h2 class="fw-bold mb-4">Mengapa Memilih WDObat?</h2>
                        <p class="lead text-muted mb-5">Solusi terintegrasi untuk transformasi digital fasilitas kesehatan Anda.</p>
                        
                        <div class="d-flex mb-4">
                            <div class="me-4">
                                <div class="icon-box bg-primary text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <div>
                                <h5>Mudah Digunakan</h5>
                                <p class="text-muted mb-0">Antarmuka intuitif yang dirancang untuk tenaga medis dengan berbagai tingkat kemampuan teknis.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-4">
                                <div class="icon-box bg-primary text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <div>
                                <h5>Cloud-Based</h5>
                                <p class="text-muted mb-0">Akses data pasien kapan saja, di mana saja tanpa perlu instalasi rumit.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex mb-4">
                            <div class="me-4">
                                <div class="icon-box bg-primary text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <div>
                                <h5>Keamanan Terjamin</h5>
                                <p class="text-muted mb-0">Proteksi data pasien dengan enkripsi tingkat tinggi dan backup otomatis.</p>
                            </div>
                        </div>
                        
                        <div class="d-flex">
                            <div class="me-4">
                                <div class="icon-box bg-primary text-white">
                                    <i class="fas fa-check"></i>
                                </div>
                            </div>
                            <div>
                                <h5>Dukungan 24/7</h5>
                                <p class="text-muted mb-0">Tim support siap membantu kapan pun Anda membutuhkan.</p>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Testimoni Section -->
    <section id="testimoni" class="py-5 bg-light">
        <div class="container py-5">
            <div class="section-title text-center mb-5" data-aos="fade-up">
                <h2 class="fw-bold">Apa Kata Mereka?</h2>
                <p class="lead text-muted">Testimoni dari pelanggan yang telah menggunakan WDObat</p>
            </div>
            
            <div class="row g-4">
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <div class="testimonial-img">
                                <img src="https://randomuser.me/api/portraits/women/45.jpg" alt="Testimoni 1" class="img-fluid">
                            </div>
                            <div>
                                <h5 class="mb-0">Dr. Sarah Wijaya</h5>
                                <p class="text-muted mb-0">RS Sehat Sentosa</p>
                            </div>
                        </div>
                        <p class="fst-italic">"Sistem ini sangat membantu dalam manajemen pasien kami. Antarmukanya sederhana tapi powerful, mengurangi waktu administrasi hingga 50%."</p>
                        <div class="rating text-warning mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <div class="testimonial-img">
                                <img src="https://randomuser.me/api/portraits/men/32.jpg" alt="Testimoni 2" class="img-fluid">
                            </div>
                            <div>
                                <h5 class="mb-0">Dr. Ahmad Fauzi</h5>
                                <p class="text-muted mb-0">Klinik Pratama Sejahtera</p>
                            </div>
                        </div>
                        <p class="fst-italic">"Dengan WDObat, kami bisa fokus pada pelayanan pasien tanpa khawatir dengan administrasi. Fitur rekam medis elektronik sangat membantu."</p>
                        <div class="rating text-warning mt-3">
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star"></i>
                            <i class="fas fa-star-half-alt"></i>
                        </div>
                    </div>
                </div>
                
                <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
                    <div class="testimonial-card">
                        <div class="d-flex align-items-center mb-4">
                            <div class="testimonial-img">
                                <img src="https://randomuser.me/api/portraits/women/68.jpg" alt="Testimoni 3" class="img-fluid">
                            </div>
                            <div>
                                <h5 class="mb-0">Nurul Hidayati, S.Kep</h5>
                                <p class="text-muted mb-0">Rumah Sakit Ibu Anak</p>
                            </div>
                        </div>
                        <p class="fst-italic">"Integrasi dengan BPJS membuat proses klaim lebih cepat. Tim support juga sangat responsif membantu saat kami ada kendala teknis."</p>
                        <div class="rating text-warning mt-3">
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
    </section>

    <!-- CTA Section -->
    <section id="kontak" class="cta-section py-5">
        <div class="container py-5">
            <div class="row justify-content-center">
                <div class="col-lg-8 text-center" data-aos="fade-up">
                    <h2 class="display-5 fw-bold mb-4">Siap Mengubah Manajemen Kesehatan Anda?</h2>
                    <p class="lead mb-5">Mulai gratis selama 14 hari. Tidak perlu kartu kredit.</p>
                    <div class="d-flex flex-wrap justify-content-center gap-3">
                        <a href="/register" class="btn btn-light btn-lg px-4 py-2 fw-bold text-success">
                            Daftar Sekarang
                        </a>
                        <a href="#kontak" class="btn btn-outline-light btn-lg px-4 py-2 fw-bold">
                            Hubungi Kami
                        </a>
                    </div>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer class="footer bg-dark text-white py-5">
    <div class="container">
        <div class="row">
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h3 class="h5 text-white">
                    <i class="fas fa-clinic-medical me-2"></i>WDObat
                </h3>
                <p class="text-white-50">
                    Sistem Manajemen Kesehatan Terintegrasi untuk fasilitas kesehatan modern di Indonesia.
                </p>
                <div class="mt-4">
                    <a href="#" class="text-white me-3"><i class="fab fa-facebook-f"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-twitter"></i></a>
                    <a href="#" class="text-white me-3"><i class="fab fa-instagram"></i></a>
                    <a href="#" class="text-white"><i class="fab fa-linkedin-in"></i></a>
                </div>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h4 class="h6 text-white">Produk</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#fitur" class="text-white-50 text-decoration-none">Fitur</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Harga</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Integrasi</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Update</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h4 class="h6 text-white">Perusahaan</h4>
                <ul class="list-unstyled">
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Tentang Kami</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Karir</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Blog</a></li>
                    <li class="mb-2"><a href="#" class="text-white-50 text-decoration-none">Partner</a></li>
                </ul>
            </div>
            <div class="col-lg-3 col-md-6 mb-4 mb-lg-0">
                <h4 class="h6 text-white">Legal</h4>
                <ul class="list-unstyled text-white-50">
                    <li class="mb-2"><i class=""></i>Kebijakan Privasi</li>
                    <li class="mb-2"><i class=""></i>Syarat Layanan</li>
                    <li class="mb-2"><i class=""></i>Kepatuhan HIPAA</li>
                    <li class="mb-2"><i class=""></i>Keamanan </li>
                </ul>
            </div>
        </div>
        <div class="border-top border-secondary mt-5 pt-4 text-center text-white-50">
            Copyright &copy; 2025 <a href="#" class="text-success text-decoration-none">WDObat</a>.
            All rights reserved.
        </div>
    </div>
</footer>

    <!-- Bootstrap JS -->
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.0/dist/js/bootstrap.bundle.min.js"></script>
    
    <!-- AOS Animation -->
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    
    <!-- Custom JS -->
    <script>
        // Initialize AOS animation
        AOS.init({
            duration: 800,
            easing: 'ease-in-out',
            once: true
        });
        
        // Navbar scroll effect
        window.addEventListener('scroll', function() {
            const navbar = document.querySelector('.navbar');
            if (window.scrollY > 50) {
                navbar.classList.add('scrolled');
            } else {
                navbar.classList.remove('scrolled');
            }
        });
        
        // Smooth scrolling for anchor links
        document.querySelectorAll('a[href^="#"]').forEach(anchor => {
            anchor.addEventListener('click', function(e) {
                e.preventDefault();
                
                const targetId = this.getAttribute('href');
                if (targetId === '#') return;
                
                const targetElement = document.querySelector(targetId);
                if (targetElement) {
                    window.scrollTo({
                        top: targetElement.offsetTop - 70,
                        behavior: 'smooth'
                    });
                    
                    // Close mobile menu if open
                    const navbarCollapse = document.querySelector('.navbar-collapse');
                    if (navbarCollapse.classList.contains('show')) {
                        navbarCollapse.classList.remove('show');
                    }
                }
            });
        });
        
        // Active nav link on scroll
        const sections = document.querySelectorAll('section[id]');
        const navLinks = document.querySelectorAll('.navbar-nav .nav-link');
        
        window.addEventListener('scroll', function() {
            let scrollPosition = window.scrollY + 100;
            
            sections.forEach(section => {
                const sectionTop = section.offsetTop;
                const sectionHeight = section.offsetHeight;
                const sectionId = section.getAttribute('id');
                
                if (scrollPosition >= sectionTop && scrollPosition < sectionTop + sectionHeight) {
                    navLinks.forEach(link => {
                        link.classList.remove('active');
                        if (link.getAttribute('href') === '#' + sectionId) {
                            link.classList.add('active');
                        }
                    });
                }
            });
        });
    </script>
</body>

</html>