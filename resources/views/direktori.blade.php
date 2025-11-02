<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Direktori UMKM Bogor</title>
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
            padding: 20px;
        }
        
        .container {
            max-width: 1200px;
            margin: 0 auto;
        }
        
        .header {
            display: flex;
            align-items: center;
            justify-content: space-between;
            margin-bottom: 30px;
        }
        
        .back-btn {
            padding: 8px 16px;
            border: 2px solid #ddd;
            border-radius: 8px;
            background: white;
            color: #333;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .back-btn:hover {
            background-color: #f8f8f8;
            border-color: #ccc;
        }
        
        .header h1 {
            font-size: 2rem;
            color: #333;
        }
        
        .header h1 span {
            color: #ff7a00;
        }
        
        .header p {
            color: #666;
            font-size: 0.9rem;
            margin-top: 5px;
        }
        
        .search-container {
            margin-bottom: 30px;
            position: relative;
        }
        
        .search-input {
            width: 100%;
            padding: 15px 20px;
            border: 2px solid #ff7a00;
            border-radius: 8px;
            font-size: 1rem;
            color: #666;
            transition: border-color 0.3s;
        }
        
        .search-input:focus {
            outline: none;
            border-color: #e66d00;
        }
        
        .search-icon {
            position: absolute;
            left: 20px;
            top: 50%;
            transform: translateY(-50%);
            color: #ff7a00;
            font-size: 1.2rem;
        }
        
        .filter-buttons {
            display: flex;
            gap: 10px;
            flex-wrap: wrap;
            margin-bottom: 30px;
        }
        
        .filter-btn {
            padding: 10px 20px;
            border: 2px solid #ff7a00;
            border-radius: 20px;
            background: none;
            color: #ff7a00;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
        }
        
        .filter-btn.active {
            background-color: #ff7a00;
            color: white;
        }
        
        .filter-btn:hover {
            background-color: #ff7a00;
            color: white;
        }
        
        .umkm-grid {
            display: grid;
            grid-template-columns: repeat(auto-fill, minmax(300px, 1fr));
            gap: 20px;
        }
        
        .umkm-card {
            background-color: #fff;
            border-radius: 10px;
            overflow: hidden;
            box-shadow: 0 4px 15px rgba(0,0,0,0.05);
            transition: transform 0.3s, box-shadow 0.3s;
        }
        
        .umkm-card:hover {
            transform: translateY(-5px);
            box-shadow: 0 6px 20px rgba(0,0,0,0.1);
        }
        
        .card-header {
            background-color: #ff7a00;
            padding: 15px 20px;
            display: flex;
            justify-content: space-between;
            align-items: center;
        }
        
        .rating {
            background-color: white;
            color: #ff7a00;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        .category {
            background-color: white;
            color: #ff7a00;
            padding: 5px 10px;
            border-radius: 20px;
            font-weight: 500;
            font-size: 0.9rem;
        }
        
        .card-body {
            padding: 20px;
        }
        
        .card-title {
            font-size: 1.1rem;
            font-weight: 600;
            color: #333;
            margin-bottom: 10px;
        }
        
        .card-desc {
            color: #666;
            margin-bottom: 15px;
            font-size: 0.95rem;
        }
        
        .card-info {
            margin-bottom: 15px;
        }
        
        .info-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 8px;
        }
        
        .info-label {
            color: #ff7a00;
            font-weight: 500;
            margin-right: 5px;
        }
        
        .info-text {
            color: #666;
            font-size: 0.95rem;
        }
        
        .detail-btn {
            width: 100%;
            padding: 10px 15px;
            background-color: #ff7a00;
            color: white;
            border: none;
            border-radius: 8px;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        
        .detail-btn:hover {
            background-color: #e66d00;
            transform: translateY(-2px);
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .container {
                padding: 10px;
            }
            
            .header {
                flex-direction: column;
                align-items: flex-start;
                gap: 10px;
            }
            
            .header h1 {
                font-size: 1.5rem;
            }
            
            .search-input {
                padding: 12px 15px;
                font-size: 0.95rem;
            }
            
            .filter-buttons {
                flex-direction: column;
                align-items: stretch;
            }
            
            .filter-btn {
                width: 100%;
                text-align: center;
            }
            
            .umkm-grid {
                grid-template-columns: 1fr;
            }
            
            .card-header {
                padding: 12px 15px;
            }
            
            .card-body {
                padding: 15px;
            }
            
            .card-title {
                font-size: 1rem;
            }
        }
        
        @media (max-width: 480px) {
            .header h1 {
                font-size: 1.2rem;
            }
            
            .search-input {
                padding: 10px 12px;
                font-size: 0.9rem;
            }
            
            .detail-btn {
                padding: 8px 12px;
                font-size: 0.9rem;
            }
        }
    </style>
</head>
<body>
    <div class="container">
        <div class="header">
            <button class="back-btn">&lt; Kembali</button>
            <div>
                <h1>Direktori <span>UMKM Bogor</span></h1>
                <p>Temukan 10 UMKM terbaik di Kota Bogor</p>
            </div>
        </div>
        
        <div class="search-container">
            <i class="fas fa-search search-icon"></i>
            <input type="text" class="search-input" placeholder="Cari berdasarkan nama, deskripsi, atau alamat....">
        </div>
        
        <div class="filter-buttons">
            <button class="filter-btn active">Semua</button>
            <button class="filter-btn">Makanan</button>
            <button class="filter-btn">Minuman</button>
            <button class="filter-btn">Jasa</button>
        </div>
        
        <div class="umkm-grid">
            <!-- UMKM Card 1 -->
            <div class="umkm-card">
                <div class="card-header">
                    <div class="rating">4.8 (247)</div>
                    <div class="category">Minuman</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Kopi Kenangan Bogor</h3>
                    <p class="card-desc">Kedai kopi modern dengan berbagai varian kopi nusantara dan signature drinks. Tempat favorit anak muda Bogor untuk nongkrong dan bekerja.</p>
                    <div class="card-info">
                        <div class="info-item">
                            <span class="info-label">Jl.</span>
                            <span class="info-text">Lodaya II Bogor</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">087889191</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Setiap hari:</span>
                            <span class="info-text">08:00 - 22:00 WIB</span>
                        </div>
                    </div>
                    <button class="detail-btn">Detail</button>
                </div>
            </div>
            
            <!-- UMKM Card 2 -->
            <div class="umkm-card">
                <div class="card-header">
                    <div class="rating">4.8 (247)</div>
                    <div class="category">Minuman</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Kopi Kenangan Bogor</h3>
                    <p class="card-desc">Kedai kopi modern dengan berbagai varian kopi nusantara dan signature drinks. Tempat favorit anak muda Bogor untuk nongkrong dan bekerja.</p>
                    <div class="card-info">
                        <div class="info-item">
                            <span class="info-label">Jl.</span>
                            <span class="info-text">Lodaya II Bogor</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">087889191</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Setiap hari:</span>
                            <span class="info-text">08:00 - 22:00 WIB</span>
                        </div>
                    </div>
                    <button class="detail-btn">Detail</button>
                </div>
            </div>
            
            <!-- UMKM Card 3 -->
            <div class="umkm-card">
                <div class="card-header">
                    <div class="rating">4.8 (247)</div>
                    <div class="category">Minuman</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Kopi Kenangan Bogor</h3>
                    <p class="card-desc">Kedai kopi modern dengan berbagai varian kopi nusantara dan signature drinks. Tempat favorit anak muda Bogor untuk nongkrong dan bekerja.</p>
                    <div class="card-info">
                        <div class="info-item">
                            <span class="info-label">Jl.</span>
                            <span class="info-text">Lodaya II Bogor</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">087889191</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Setiap hari:</span>
                            <span class="info-text">08:00 - 22:00 WIB</span>
                        </div>
                    </div>
                    <button class="detail-btn">Detail</button>
                </div>
            </div>
            
            <!-- UMKM Card 4 -->
            <div class="umkm-card">
                <div class="card-header">
                    <div class="rating">4.8 (247)</div>
                    <div class="category">Minuman</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Kopi Kenangan Bogor</h3>
                    <p class="card-desc">Kedai kopi modern dengan berbagai varian kopi nusantara dan signature drinks. Tempat favorit anak muda Bogor untuk nongkrong dan bekerja.</p>
                    <div class="card-info">
                        <div class="info-item">
                            <span class="info-label">Jl.</span>
                            <span class="info-text">Lodaya II Bogor</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">087889191</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Setiap hari:</span>
                            <span class="info-text">08:00 - 22:00 WIB</span>
                        </div>
                    </div>
                    <button class="detail-btn">Detail</button>
                </div>
            </div>
            
            <!-- UMKM Card 5 -->
            <div class="umkm-card">
                <div class="card-header">
                    <div class="rating">4.8 (247)</div>
                    <div class="category">Minuman</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Kopi Kenangan Bogor</h3>
                    <p class="card-desc">Kedai kopi modern dengan berbagai varian kopi nusantara dan signature drinks. Tempat favorit anak muda Bogor untuk nongkrong dan bekerja.</p>
                    <div class="card-info">
                        <div class="info-item">
                            <span class="info-label">Jl.</span>
                            <span class="info-text">Lodaya II Bogor</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">087889191</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Setiap hari:</span>
                            <span class="info-text">08:00 - 22:00 WIB</span>
                        </div>
                    </div>
                    <button class="detail-btn">Detail</button>
                </div>
            </div>
            
            <!-- UMKM Card 6 -->
            <div class="umkm-card">
                <div class="card-header">
                    <div class="rating">4.8 (247)</div>
                    <div class="category">Minuman</div>
                </div>
                <div class="card-body">
                    <h3 class="card-title">Kopi Kenangan Bogor</h3>
                    <p class="card-desc">Kedai kopi modern dengan berbagai varian kopi nusantara dan signature drinks. Tempat favorit anak muda Bogor untuk nongkrong dan bekerja.</p>
                    <div class="card-info">
                        <div class="info-item">
                            <span class="info-label">Jl.</span>
                            <span class="info-text">Lodaya II Bogor</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">087889191</span>
                        </div>
                        <div class="info-item">
                            <span class="info-label">Setiap hari:</span>
                            <span class="info-text">08:00 - 22:00 WIB</span>
                        </div>
                    </div>
                    <button class="detail-btn">Detail</button>
                </div>
            </div>
        </div>
    </div>

    <script>
        // Filter buttons functionality
        document.querySelectorAll('.filter-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Remove active class from all buttons
                document.querySelectorAll('.filter-btn').forEach(btn => btn.classList.remove('active'));
                // Add active class to clicked button
                this.classList.add('active');
                
                // In a real application, you would filter the cards based on the selected category
                // For now, we'll just show an alert
                alert('Filtering by: ' + this.textContent);
            });
        });
        
        // Search functionality
        document.querySelector('.search-input').addEventListener('keyup', function() {
            const searchTerm = this.value.toLowerCase();
            
            if (searchTerm.length > 0) {
                alert('Searching for: ' + searchTerm);
                // In a real application, you would filter the cards based on the search term
            }
        });
        
        // Detail buttons functionality
        document.querySelectorAll('.detail-btn').forEach(button => {
            button.addEventListener('click', function() {
                // Get the card's information
                const card = this.closest('.umkm-card');
                const title = card.querySelector('.card-title').textContent;
                const desc = card.querySelector('.card-desc').textContent;
                
                alert(`Anda memilih: ${title}\n\n${desc}\n\nSilakan kunjungi halaman detail untuk informasi lebih lanjut.`);
                // In a real application, you would redirect to a detail page or show a modal
            });
        });
        
        // Back button functionality
        document.querySelector('.back-btn').addEventListener('click', function() {
            alert('Kembali ke halaman sebelumnya');
            // In a real application, you would navigate back
            // window.history.back();
        });
    </script>
</body>
</html>

