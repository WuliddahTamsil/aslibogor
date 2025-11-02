<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bakso Beranak Pinak - Detail UMKM</title>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css">
    <style>
        * {
            margin: 0;
            padding: 0;
            box-sizing: border-box;
        }
        
        body {
            font-family: 'Segoe UI', Tahoma, Geneva, Verdana, sans-serif;
            background-color: #f8f9fa;
            color: #333;
            line-height: 1.6;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .header {
            position: relative;
            width: 100%;
            height: 300px;
            overflow: hidden;
            margin-bottom: 20px;
        }
        
        .header-image {
            width: 100%;
            height: 100%;
            object-fit: cover;
            object-position: center;
        }
        
        .header-content {
            position: absolute;
            bottom: 20px;
            left: 20px;
            color: white;
        }
        
        .back-btn {
            position: absolute;
            top: 20px;
            left: 20px;
            padding: 8px 16px;
            border: 2px solid white;
            border-radius: 8px;
            background: rgba(0,0,0,0.5);
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .back-btn:hover {
            background: rgba(0,0,0,0.7);
            transform: scale(1.05);
        }
        
        .share-btn {
            position: absolute;
            top: 20px;
            right: 20px;
            padding: 8px 16px;
            border: 2px solid white;
            border-radius: 8px;
            background: rgba(0,0,0,0.5);
            color: white;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .share-btn:hover {
            background: rgba(0,0,0,0.7);
            transform: scale(1.05);
        }
        
        .rating-badge {
            position: absolute;
            bottom: 20px;
            left: 20px;
            padding: 5px 10px;
            background-color: rgba(255,255,255,0.8);
            color: #333;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        .header-title {
            font-size: 2.5rem;
            margin-bottom: 10px;
            text-shadow: 2px 2px 4px rgba(0,0,0,0.5);
        }
        
        .main-content {
            display: grid;
            grid-template-columns: repeat(auto-fit, minmax(300px, 1fr));
            gap: 20px;
            margin-bottom: 30px;
        }
        
        .contact-info {
            background-color: #fff8f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        
        .section-title {
            font-size: 1.5rem;
            color: #333;
            margin-bottom: 20px;
            padding-bottom: 10px;
            border-bottom: 2px solid #ff7a00;
        }
        
        .info-item {
            margin-bottom: 20px;
        }
        
        .info-label {
            font-weight: 600;
            color: #333;
            margin-bottom: 5px;
            font-size: 1.1rem;
        }
        
        .info-text {
            color: #666;
            font-size: 1rem;
        }
        
        .get-directions {
            width: 100%;
            padding: 10px 15px;
            background-color: transparent;
            color: #ff7a00;
            border: 2px solid #ff7a00;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .get-directions:hover {
            background-color: #ff7a00;
            color: white;
        }
        
        .visit-section {
            background-color: #ff7a00;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            color: white;
        }
        
        .visit-section h3 {
            margin-bottom: 15px;
            font-size: 1.5rem;
        }
        
        .visit-section p {
            margin-bottom: 20px;
            font-size: 0.95rem;
        }
        
        .visit-btn {
            width: 100%;
            padding: 10px 15px;
            background-color: white;
            color: #ff7a00;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            margin-bottom: 10px;
        }
        
        .visit-btn:hover {
            background-color: #f8f8f8;
            transform: translateY(-2px);
        }
        
        .rating-section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        
        .rating-title {
            color: #ff7a00;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .rating-number {
            font-size: 3rem;
            color: #ff7a00;
            margin-bottom: 5px;
        }
        
        .rating-count {
            color: #666;
            font-size: 0.9rem;
        }
        
        .about-section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
        
        .about-title {
            color: #ff7a00;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .about-text {
            color: #666;
            line-height: 1.8;
        }
        
        .tips-section {
            background-color: #fff8f0;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        
        .tips-title {
            color: #ff7a00;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .tips-list {
            list-style-type: disc;
            padding-left: 20px;
        }
        
        .tips-list li {
            margin-bottom: 10px;
            color: #666;
        }
        
        .gallery-section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            margin-bottom: 20px;
        }
        
        .gallery-title {
            color: #ff7a00;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .gallery-image {
            width: 100%;
            height: 200px;
            object-fit: cover;
            border-radius: 8px;
            margin-bottom: 10px;
        }
        
        .gallery-thumbnails {
            display: flex;
            gap: 10px;
        }
        
        .thumbnail {
            width: 30px;
            height: 30px;
            background-color: #ff7a00;
            border-radius: 4px;
            cursor: pointer;
            transition: transform 0.3s;
        }
        
        .thumbnail:hover {
            transform: scale(1.2);
        }
        
        .map-section {
            background-color: white;
            padding: 20px;
            border-radius: 10px;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
        }
        
        .map-title {
            color: #ff7a00;
            margin-bottom: 20px;
            font-size: 1.5rem;
        }
        
        .map-image {
            width: 100%;
            height: 200px;
            background-color: #ddd;
            border-radius: 8px;
            margin-bottom: 15px;
            background-image: url('https://placehold.co/600x200');
            background-size: cover;
            background-position: center;
        }
        
        .map-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
        }
        
        .map-btn {
            padding: 10px 15px;
            border: 2px solid #ff7a00;
            border-radius: 8px;
            background: none;
            color: #ff7a00;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .map-btn:hover {
            background-color: #ff7a00;
            color: white;
        }
        
        .copy-btn {
            padding: 10px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            background: none;
            color: #333;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .copy-btn:hover {
            background-color: #f8f8f8;
            border-color: #ccc;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            
            .header {
                height: 200px;
            }
            
            .header-title {
                font-size: 2rem;
            }
            
            .main-content {
                grid-template-columns: 1fr;
            }
            
            .header-content {
                bottom: 10px;
                left: 10px;
            }
            
            .back-btn, .share-btn {
                top: 10px;
                padding: 6px 12px;
                font-size: 0.9rem;
            }
            
            .rating-badge {
                bottom: 10px;
                left: 10px;
                padding: 3px 8px;
                font-size: 0.8rem;
            }
            
            .section-title {
                font-size: 1.3rem;
            }
            
            .info-label {
                font-size: 1rem;
            }
            
            .info-text {
                font-size: 0.95rem;
            }
            
            .rating-number {
                font-size: 2.5rem;
            }
            
            .about-title, .tips-title, .gallery-title, .map-title {
                font-size: 1.3rem;
            }
            
            .gallery-image {
                height: 150px;
            }
            
            .map-image {
                height: 150px;
            }
        }
        
        @media (max-width: 480px) {
            .header {
                height: 150px;
            }
            
            .header-title {
                font-size: 1.5rem;
            }
            
            .section-title {
                font-size: 1.2rem;
            }
            
            .rating-number {
                font-size: 2rem;
            }
            
            .about-title, .tips-title, .gallery-title, .map-title {
                font-size: 1.2rem;
            }
            
            .gallery-image {
                height: 120px;
            }
            
            .map-image {
                height: 120px;
            }
            
            .map-buttons {
                flex-direction: column;
            }
            
            .map-btn, .copy-btn {
                width: 100%;
                text-align: center;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <!-- Header -->
        <div class="header">
            <img src="https://placehold.co/1200x600" alt="Bakso Beranak Pinak" class="header-image">
            <button class="back-btn">&lt; Kembali</button>
            <button class="share-btn">Bagikan</button>
            <div class="header-content">
                <h1 class="header-title">Bakso Beranak Pinak</h1>
            </div>
            <div class="rating-badge">4.9 (900 ulasan)</div>
        </div>
        
        <!-- Main Content -->
        <div class="main-content">
            <!-- Contact Information -->
            <div class="contact-info">
                <h2 class="section-title">Informasi Kontak</h2>
                
                <div class="info-item">
                    <h3 class="info-label">Alamat</h3>
                    <p class="info-text">Jl Bogor Barat</p>
                </div>
                
                <div class="info-item">
                    <h3 class="info-label">Telepon</h3>
                    <p class="info-text">6382173120</p>
                </div>
                
                <div class="info-item">
                    <h3 class="info-label">Jam Operasional</h3>
                    <p class="info-text">Setiap hari: 10:00 - 22:00 WIB</p>
                </div>
                
                <button class="get-directions">Dapatkan Arah</button>
            </div>
            
            <!-- Visit Section -->
            <div class="visit-section">
                <h3>Kunjungi Kami</h3>
                <p>Nikmati pengalaman terbaik di Bakso Beranak Malang. Kami siap melayani Anda!</p>
                <button class="visit-btn">Petunjuk Arah</button>
                <button class="visit-btn">Hubungi</button>
                <button class="visit-btn">Bagikan</button>
            </div>
            
            <!-- Rating Section -->
            <div class="rating-section">
                <h3 class="rating-title">Rating & Ulasan</h3>
                <div class="rating-number">4.9</div>
                <div class="rating-count">Berdasarkan 789 ulasan</div>
            </div>
        </div>
        
        <!-- About Section -->
        <div class="about-section">
            <h2 class="about-title">Tentang Bakso Beranak</h2>
            <p class="about-text">
                Bakso Beranak Malang menghadirkan sensasi makan bakso yang unik dan berbeda. Bakso beranak adalah bakso berukuran besar yang di dalamnya terdapat bakso-bakso kecil, menciptakan surprise di setiap gigitan. Menggunakan daging sapi pilihan tanpa campuran, bakso kami memiliki tekstur kenyal yang pas dengan rasa gurih alami. Kuah kaldu sapi yang segar dimasak selama berjam-jam dengan tulang sumsum memberikan cita rasa yang kaya. Dilengkapi dengan mie kuning, tahu, siomay, dan pangsit goreng, setiap mangkok bakso kami sangat mengenyangkan. Tersedia berbagai level kepedasan dari sambal kami yang bikin nagih. Porsi jumbo dengan harga yang sangat terjangkau menjadikan kami favorit pelajar dan mahasiswa.
            </p>
        </div>
        
        <!-- Tips Section -->
        <div class="tips-section">
            <h2 class="tips-title">Tips Berkunjung</h2>
            <ul class="tips-list">
                <li>Datang saat jam operasional untuk pengalaman terbaik</li>
                <li>Hubungi terlebih dahulu untuk memastikan ketersediaan</li>
                <li>Gunakan Google Maps untuk petunjuk arah yang akurat</li>
            </ul>
        </div>
        
        <!-- Gallery Section -->
        <div class="gallery-section">
            <h2 class="gallery-title">Galaeri Foto</h2>
            <img src="https://placehold.co/600x200" alt="Bakso Beranak Pinak" class="gallery-image">
            <div class="gallery-thumbnails">
                <div class="thumbnail"></div>
                <div class="thumbnail"></div>
                <div class="thumbnail"></div>
            </div>
        </div>
        
        <!-- Map Section -->
        <div class="map-section">
            <h2 class="map-title">Lokasi di Peta</h2>
            <img src="https://placehold.co/600x200" alt="Map Location" class="map-image">
            <div class="map-buttons">
                <button class="map-btn">Buka di google maps</button>
                <button class="copy-btn">Salin alamat</button>
            </div>
        </div>
    </div>

    <script>
        // Back button functionality
        document.querySelector('.back-btn').addEventListener('click', function() {
            alert('Kembali ke halaman sebelumnya');
            // In a real application, you would navigate back
            // window.history.back();
        });
        
        // Share button functionality
        document.querySelector('.share-btn').addEventListener('click', function() {
            if (navigator.share) {
                navigator.share({
                    title: 'Bakso Beranak Pinak',
                    text: 'Coba Bakso Beranak Pinak, bakso unik dengan isi bakso kecil di dalamnya!',
                    url: window.location.href
                }).catch(() => {
                    alert('Share tidak didukung di browser ini');
                });
            } else {
                alert('Fitur share tidak tersedia di browser ini. Salin link dan bagikan secara manual.');
            }
        });
        
        // Get directions button
        document.querySelector('.get-directions').addEventListener('click', function() {
            alert('Membuka aplikasi peta untuk mendapatkan arah ke Bakso Beranak Pinak');
            // In a real application, you would open the map app
            // window.open('https://www.google.com/maps/dir/?api=1&destination=Jl+Bogor+Barat', '_blank');
        });
        
        // Visit buttons
        document.querySelectorAll('.visit-btn').forEach(button => {
            button.addEventListener('click', function() {
                const action = this.textContent;
                if (action === 'Petunjuk Arah') {
                    alert('Membuka petunjuk arah ke Bakso Beranak Pinak');
                    // window.open('https://www.google.com/maps/dir/?api=1&destination=Jl+Bogor+Barat', '_blank');
                } else if (action === 'Hubungi') {
                    alert('Menghubungi Bakso Beranak Pinak...');
                    window.location.href = 'tel:6382173120';
                } else if (action === 'Bagikan') {
                    if (navigator.share) {
                        navigator.share({
                            title: 'Bakso Beranak Pinak',
                            text: 'Coba Bakso Beranak Pinak, bakso unik dengan isi bakso kecil di dalamnya!',
                            url: window.location.href
                        }).catch(() => {
                            alert('Share tidak didukung di browser ini');
                        });
                    } else {
                        alert('Fitur share tidak tersedia di browser ini. Salin link dan bagikan secara manual.');
                    }
                }
            });
        });
        
        // Copy address button
        document.querySelector('.copy-btn').addEventListener('click', function() {
            navigator.clipboard.writeText('Jl Bogor Barat')
                .then(() => {
                    alert('Alamat telah disalin ke clipboard!');
                    this.textContent = 'Disalin!';
                    setTimeout(() => {
                        this.textContent = 'Salin alamat';
                    }, 2000);
                })
                .catch(err => {
                    alert('Gagal menyalin alamat. Silakan salin secara manual.');
                });
        });
        
        // Gallery thumbnails
        document.querySelectorAll('.thumbnail').forEach((thumbnail, index) => {
            thumbnail.addEventListener('click', function() {
                const galleryImage = document.querySelector('.gallery-image');
                galleryImage.src = `https://placehold.co/600x200?text=Foto+${index + 1}`;
                // In a real application, you would show different images
            });
        });
        
        // Map buttons
        document.querySelector('.map-btn').addEventListener('click', function() {
            alert('Membuka Google Maps untuk lokasi Bakso Beranak Pinak');
            // window.open('https://www.google.com/maps/place/Jl+Bogor+Barat', '_blank');
        });
    </script>
</body>
</html>

