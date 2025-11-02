<!DOCTYPE html>
<html lang="id" style="scroll-behavior: smooth;">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Asli Bogor - Platform UMKM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        /* Reset & Base Styles */
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            line-height: 1.6;
            color: #333;
            background-color: #fff;
        }
        
        /* Navbar */
        nav {
            position: fixed;
            top: 0;
            left: 0;
            width: 100%;
            background-color: #f8f8f8;
            padding: 15px 5%;
            display: flex;
            justify-content: space-between;
            align-items: center;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
            z-index: 1000;
        }
        
        .logo {
            font-size: 1rem;
            font-weight: bold;
            color: #333;
        }
        
        .nav-links {
            display: flex;
            list-style: none;
            gap: 25px;
        }
        
        .nav-links a {
            text-decoration: none;
            color: #333;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .nav-links a:hover {
            color: #ff7a00;
        }
        
        .nav-buttons {
            display: flex;
            gap: 15px;
        }
        
        .login-btn {
            background: none;
            border: none;
            color: #ff7a00;
            font-weight: 500;
            cursor: pointer;
        }
        
        .signup-btn {
            background-color: #ff7a00;
            color: white;
            border: none;
            padding: 8px 16px;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s;
        }
        
        .signup-btn:hover {
            background-color: #e66d00;
        }
        
        /* Section Base */
        section {
            padding: 60px 5%;
            min-height: 100vh;
        }
        
        .section-title {
            text-align: center;
            font-size: 2.5rem;
            margin-bottom: 2rem;
            color: #333;
        }
        
        /* Hero Section */
        #beranda {
            background-color: #fff;
            padding-top: 100px;
            display: flex;
            align-items: center;
            justify-content: space-between;
            gap: 50px;
        }
        
        .hero-content {
            max-width: 600px;
        }
        
        .hero-content h1 {
            font-size: 3rem;
            color: #333;
            margin-bottom: 1rem;
            line-height: 1.2;
        }
        
        .hero-content h1 span {
            color: #ff7a00;
        }
        
        .hero-content p {
            font-size: 1rem;
            color: #666;
            margin-bottom: 2rem;
        }
        
        .hero-buttons {
            display: flex;
            gap: 15px;
            margin-bottom: 2rem;
        }
        
        .btn {
            padding: 12px 24px;
            border: none;
            border-radius: 4px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .btn-primary {
            background-color: #ff7a00;
            color: white;
        }
        
        .btn-primary:hover {
            background-color: #e66d00;
        }
        
        .btn-secondary {
            background-color: #fff;
            color: #ff7a00;
            border: 2px solid #ff7a00;
        }
        
        .btn-secondary:hover {
            background-color: #ff7a00;
            color: white;
        }
        
        .stats {
            display: flex;
            justify-content: space-between;
            gap: 30px;
            margin-top: 30px;
        }
        
        .stat-item {
            text-align: center;
        }
        
        .stat-number {
            font-size: 1.5rem;
            font-weight: bold;
            color: #ff7a00;
        }
        
        .stat-label {
            font-size: 0.9rem;
            color: #666;
        }
        
        .hero-image {
            width: 40%;
            max-width: 400px;
        }
        
        /* Features Section */
        #fitur {
            background-color: #fff;
            padding-top: 60px;
        }
        
        .section-subtitle {
            text-align: center;
            color: #666;
            margin-bottom: 40px;
        }
        
        .features-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .feature-card {
            background-color: #f8f8f8;
            border-radius: 8px;
            padding: 20px;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
            position: relative;
            overflow: hidden;
        }
        
        .feature-card:hover {
            transform: translateY(-5px);
        }
        
        .feature-image {
            width: 100%;
            height: 200px;
            background-color: #ddd;
            margin-bottom: 15px;
            border-radius: 4px;
        }
        
        .feature-title {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        
        .feature-desc {
            color: #666;
            margin-bottom: 15px;
        }
        
        .feature-link {
            color: #ff7a00;
            text-decoration: none;
            font-weight: 500;
            display: inline-flex;
            align-items: center;
        }
        
        .feature-link::after {
            content: "→";
            margin-left: 5px;
        }
        
        /* Search Section */
        .search-section {
            padding: 60px 5%;
            background-color: #fff;
            text-align: center;
        }
        
        .search-box {
            background-color: #e8e8e8;
            border-radius: 8px;
            padding: 15px 20px;
            display: flex;
            align-items: center;
            max-width: 800px;
            margin: 0 auto;
            box-shadow: 0 2px 5px rgba(0,0,0,0.1);
        }
        
        .search-icon {
            color: #666;
            margin-right: 10px;
        }
        
        .search-input {
            flex: 1;
            background: none;
            border: none;
            outline: none;
            font-size: 1rem;
            color: #333;
        }
        
        .category-buttons {
            display: flex;
            justify-content: center;
            flex-wrap: wrap;
            gap: 10px;
            margin-top: 20px;
        }
        
        .category-btn {
            padding: 10px 20px;
            border: 2px solid #ff7a00;
            border-radius: 20px;
            background: none;
            color: #ff7a00;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .category-btn.active {
            background-color: #ff7a00;
            color: white;
        }
        
        .category-btn:hover {
            background-color: #ff7a00;
            color: white;
        }
        
        .results-count {
            margin-top: 20px;
            color: #666;
        }
        
        /* UMKM Cards */
        .umkm-section {
            padding: 60px 5%;
            background-color: #fff;
        }
        
        .umkm-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .umkm-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            overflow: hidden;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
            transition: transform 0.3s;
        }
        
        .umkm-card:hover {
            transform: translateY(-5px);
        }
        
        .umkm-category {
            background-color: #ff7a00;
            color: white;
            padding: 8px 15px;
            border-radius: 20px;
            font-size: 0.9rem;
            font-weight: 500;
            text-align: center;
            margin: 10px;
        }
        
        .umkm-image {
            width: 100%;
            height: 200px;
            background-color: #ddd;
        }
        
        .umkm-content {
            padding: 15px;
        }
        
        /* Team Section */
        #tim-kami {
            padding: 60px 5%;
            background-color: #fff;
        }
        
        .team-grid {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(250px, 1fr));
            gap: 30px;
        }
        
        .team-card {
            border: 1px solid #ddd;
            border-radius: 8px;
            padding: 20px;
            text-align: center;
            box-shadow: 0 4px 8px rgba(0,0,0,0.1);
        }
        
        .team-photo {
            width: 100px;
            height: 100px;
            background-color: #ddd;
            border-radius: 50%;
            margin: 0 auto 15px;
        }
        
        .team-name {
            font-size: 1.2rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
        }
        
        .team-role {
            color: #ff7a00;
            font-weight: 500;
            margin-bottom: 15px;
        }
        
        .team-social {
            display: flex;
            justify-content: center;
            gap: 10px;
        }
        
        .social-icon {
            color: #ff7a00;
            font-size: 1.2rem;
            cursor: pointer;
        }
        
        /* Footer */
        footer {
            background-color: #333;
            color: white;
            padding: 40px 5%;
        }
        
        .footer-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(200px, 1fr));
            gap: 30px;
        }
        
        .footer-column h3 {
            color: #ff7a00;
            margin-bottom: 15px;
            font-size: 1.2rem;
        }
        
        .footer-column p {
            color: #bbb;
            margin-bottom: 15px;
            font-size: 0.9rem;
        }
        
        .footer-links {
            list-style: none;
        }
        
        .footer-links li {
            margin-bottom: 8px;
        }
        
        .footer-links a {
            color: #bbb;
            text-decoration: none;
            font-size: 0.9rem;
            transition: color 0.3s;
        }
        
        .footer-links a:hover {
            color: #ff7a00;
        }
        
        .footer-social {
            display: flex;
            gap: 15px;
            margin-top: 15px;
        }
        
        .footer-social .social-icon {
            color: #ff7a00;
            font-size: 1.5rem;
            cursor: pointer;
        }
        
        .copyright {
            text-align: center;
            margin-top: 30px;
            padding-top: 20px;
            border-top: 1px solid #555;
            color: #bbb;
            font-size: 0.9rem;
        }
        
        .copyright span {
            color: #ff7a00;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            nav {
                padding: 15px 3%;
            }
            
            .nav-links {
                display: none;
            }
            
            section {
                padding: 50px 3%;
            }
            
            #beranda {
                flex-direction: column;
                text-align: center;
                padding-top: 80px;
            }
            
            .hero-content h1 {
                font-size: 2rem;
            }
            
            .hero-content p {
                font-size: 1rem;
            }
            
            .hero-buttons {
                flex-direction: column;
                align-items: stretch;
            }
            
            .stats {
                flex-direction: column;
                gap: 15px;
            }
            
            .hero-image {
                width: 100%;
                max-width: 100%;
                margin-top: 30px;
            }
            
            .features-grid {
                grid-template-columns: 1fr;
            }
            
            .search-box {
                flex-direction: column;
            }
            
            .umkm-grid {
                grid-template-columns: 1fr;
            }
            
            .team-grid {
                grid-template-columns: 1fr;
            }
            
            .footer-content {
                grid-template-columns: 1fr;
            }
        }
        
        @media (max-width: 480px) {
            .hero-content h1 {
                font-size: 1.5rem;
            }
            
            .section-title {
                font-size: 1.5rem;
            }
            
            .category-buttons {
                flex-direction: column;
                align-items: stretch;
            }
            
            .category-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <!-- Navbar -->
    <nav>
        <div class="logo">Logo AsliBogor</div>
        <ul class="nav-links">
            <li><a href="#beranda">Beranda</a></li>
            <li><a href="#fitur">Fitur</a></li>
            <li><a href="#direktori-umkm">Direktori UMKM</a></li>
            <li><a href="#tim-kami">Tim Kami</a></li>
            <li><a href="#jelajahi-umkm">Jelajahi UMKM</a></li>
        </ul>
        <div class="nav-buttons">
            <button class="login-btn">Login</button>
            <button class="signup-btn">Sign up</button>
        </div>
    </nav>

    <!-- Hero Section -->
    <section id="beranda">
        <div class="hero-content">
            <h1>Temukan UMKM <span>Asli Bogor</span> di Sekitar Anda</h1>
            <p>Platform direktori digital yang memudahkan Anda menemukan dan mendukung usaha lokal di Kota Bogor. Dari kuliner legendaris hingga jasa terpercaya, semua ada di sini!</p>
            <div class="hero-buttons">
                <button class="btn btn-primary">Jelajahi Sekarang</button>
                <button class="btn btn-secondary">Pelajari Lebih Lanjut</button>
            </div>
            <div class="stats">
                <div class="stat-item">
                    <div class="stat-number">100+</div>
                    <div class="stat-label">UMKM Terdaftar</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">10+</div>
                    <div class="stat-label">Kategori</div>
                </div>
                <div class="stat-item">
                    <div class="stat-number">5K</div>
                    <div class="stat-label">Pengunjung</div>
                </div>
            </div>
        </div>
        <img src="https://placehold.co/400x400" alt="Illustration" class="hero-image">
    </section>

    <!-- Features Section -->
    <section id="fitur">
        <h2 class="section-title">Kenapa pilih <span>AsliBogor?</span></h2>
        <p class="section-subtitle">Platform terlengkap untuk menemukan dan mendukung UMKM lokal di Kota Bogor</p>
        <div class="features-grid">
            <!-- Feature 1 -->
            <div class="feature-card">
                <div class="feature-image"></div>
                <h3 class="feature-title">Cari UMKM favorit Anda</h3>
                <p class="feature-desc">dengan mudah menggunakan search bar yang responsif</p>
                <a href="#" class="feature-link">Pencarian Mudah →</a>
            </div>
            
            <!-- Feature 2 -->
            <div class="feature-card">
                <div class="feature-image"></div>
                <h3 class="feature-title">Filter berdasarkan kategori:</h3>
                <p class="feature-desc">Makanan, Minuman, Jasa, dan lainnya</p>
                <a href="#" class="feature-link">Filter Kategori →</a>
            </div>
            
            <!-- Feature 3 -->
            <div class="feature-card">
                <div class="feature-image"></div>
                <h3 class="feature-title">Lihat lokasi UMKM secara akurat</h3>
                <p class="feature-desc">dengan Google Maps terintegrasi</p>
                <a href="#" class="feature-link">Peta Interaktif →</a>
            </div>
            
            <!-- Feature 4 -->
            <div class="feature-card">
                <div class="feature-image"></div>
                <h3 class="feature-title">Jelajahi foto produk, menu, dan suasana</h3>
                <p class="feature-desc">dari setiap UMKM</p>
                <a href="#" class="feature-link">Galeri Foto →</a>
            </div>
            
            <!-- Feature 5 -->
            <div class="feature-card">
                <div class="feature-image"></div>
                <h3 class="feature-title">Bantu UMKM lokal berkembang</h3>
                <p class="feature-desc">dengan menemukan dan mengunjungi mereka</p>
                <a href="#" class="feature-link">Dukung Lokal →</a>
            </div>
            
            <!-- Feature 6 -->
            <div class="feature-card">
                <div class="feature-image"></div>
                <h3 class="feature-title">Akses dari perangkat apapun</h3>
                <p class="feature-desc">kapan saja dan di mana saja</p>
                <a href="#" class="feature-link">Mobile Friendly →</a>
            </div>
        </div>
    </section>

    <!-- Search Section -->
    <section id="jelajahi-umkm" class="search-section">
        <h2 class="section-title">Jelajahi UMKM Lokal</h2>
        <p class="section-subtitle">Temukan UMKM Terbaik di Kota Bogor</p>
        <div class="search-box">
            <span class="search-icon">✈️</span>
            <input type="text" class="search-input" placeholder="Cari UMKM berdasarkan nama....">
        </div>
        <div class="category-buttons">
            <button class="category-btn active">Semua</button>
            <button class="category-btn">Makanan</button>
            <button class="category-btn">Minuman</button>
            <button class="category-btn">Jasa</button>
        </div>
        <p class="results-count">Menampilkan 10 dari 10 UMKM</p>
    </section>

    <!-- UMKM Cards -->
    <section id="direktori-umkm" class="umkm-section">
        <div class="umkm-grid">
            <!-- UMKM Card 1 -->
            <div class="umkm-card">
                <div class="umkm-category">Makanan</div>
                <div class="umkm-image"></div>
                <div class="umkm-content">
                    <h3>Warung Sederhana</h3>
                    <p>Jalan Raya Bogor No. 123</p>
                    <p>Rating: ★★★★☆ (4.5)</p>
                </div>
            </div>
            
            <!-- UMKM Card 2 -->
            <div class="umkm-card">
                <div class="umkm-category">Makanan</div>
                <div class="umkm-image"></div>
                <div class="umkm-content">
                    <h3>Rumah Makan Enak</h3>
                    <p>Jalan Pajajaran No. 456</p>
                    <p>Rating: ★★★★☆ (4.7)</p>
                </div>
            </div>
            
            <!-- UMKM Card 3 -->
            <div class="umkm-card">
                <div class="umkm-category">Makanan</div>
                <div class="umkm-image"></div>
                <div class="umkm-content">
                    <h3>Sate Khas Bogor</h3>
                    <p>Jalan Ahmad Yani No. 789</p>
                    <p>Rating: ★★★★☆ (4.8)</p>
                </div>
            </div>
            
            <!-- UMKM Card 4 -->
            <div class="umkm-card">
                <div class="umkm-category">Makanan</div>
                <div class="umkm-image"></div>
                <div class="umkm-content">
                    <h3>Nasi Goreng Spesial</h3>
                    <p>Jalan Sudirman No. 101</p>
                    <p>Rating: ★★★★☆ (4.6)</p>
                </div>
            </div>
            
            <!-- UMKM Card 5 -->
            <div class="umkm-card">
                <div class="umkm-category">Makanan</div>
                <div class="umkm-image"></div>
                <div class="umkm-content">
                    <h3>Bakso Malam Hari</h3>
                    <p>Jalan Merdeka No. 202</p>
                    <p>Rating: ★★★★☆ (4.4)</p>
                </div>
            </div>
            
            <!-- UMKM Card 6 -->
            <div class="umkm-card">
                <div class="umkm-category">Makanan</div>
                <div class="umkm-image"></div>
                <div class="umkm-content">
                    <h3>Gado-Gado Legendaris</h3>
                    <p>Jalan Diponegoro No. 303</p>
                    <p>Rating: ★★★★☆ (4.9)</p>
                </div>
            </div>
        </div>
    </section>

    <!-- Team Section -->
    <section id="tim-kami">
        <h2 class="section-title">Tim Kami</h2>
        <div class="team-grid">
            <!-- Team Member 1 -->
            <div class="team-card">
                <div class="team-photo"></div>
                <h3 class="team-name">Aisyah Putri</h3>
                <p class="team-role">Front End Developer</p>
                <div class="team-social">
                    <span class="social-icon">📸</span>
                    <span class="social-icon">🐦</span>
                    <span class="social-icon">🌐</span>
                </div>
            </div>
            
            <!-- Team Member 2 -->
            <div class="team-card">
                <div class="team-photo"></div>
                <h3 class="team-name">Ghina Rania</h3>
                <p class="team-role">Project Officer</p>
                <div class="team-social">
                    <span class="social-icon">📸</span>
                    <span class="social-icon">🐦</span>
                    <span class="social-icon">🌐</span>
                </div>
            </div>
            
            <!-- Team Member 3 -->
            <div class="team-card">
                <div class="team-photo"></div>
                <h3 class="team-name">Wuliddah Tamsil</h3>
                <p class="team-role">Back End Developer</p>
                <div class="team-social">
                    <span class="social-icon">📸</span>
                    <span class="social-icon">🐦</span>
                    <span class="social-icon">🌐</span>
                </div>
            </div>
        </div>
    </section>

    <!-- Footer -->
    <footer>
        <div class="footer-content">
            <div class="footer-column">
                <h3>AsliBogor</h3>
                <p>Platform direktori UMKM terlengkap di Kota Bogor. Dukung bisnis lokal, tumbuh bersama!</p>
                <div class="footer-social">
                    <span class="social-icon">📸</span>
                    <span class="social-icon">🐦</span>
                    <span class="social-icon">🌐</span>
                </div>
            </div>
            <div class="footer-column">
                <h3>Tautan Cepat</h3>
                <ul class="footer-links">
                    <li><a href="#">Beranda</a></li>
                    <li><a href="#">Fitur</a></li>
                    <li><a href="#">Direktori UMKM</a></li>
                    <li><a href="#">Tim Kami</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Kategori</h3>
                <ul class="footer-links">
                    <li><a href="#">Makanan</a></li>
                    <li><a href="#">Minuman</a></li>
                    <li><a href="#">Jasa</a></li>
                    <li><a href="#">Semua UMKM</a></li>
                </ul>
            </div>
            <div class="footer-column">
                <h3>Hubungi Kami</h3>
                <p>Jl. Pajajaran Bogor, Jawa Barat</p>
                <p>+62 0000000000000</p>
                <p>info@aslibogor.com</p>
            </div>
        </div>
        <div class="copyright">
            © 2025 AsliBogor. Dibuat dengan <span>❤️</span> untuk UMKM Bogor. Website Direktori UMKM
        </div>
    </footer>
</body>
</html>

