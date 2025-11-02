<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Login - AsliBogor</title>
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
        
        .login-container {
            display: flex;
            min-height: 100vh;
            max-width: 1200px;
            margin: 0 auto;
            padding: 20px;
        }
        
        .left-panel {
            flex: 1;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            background-color: white;
        }
        
        .logo {
            color: #ff7a00;
            font-weight: bold;
            margin-bottom: 20px;
            font-size: 1.2rem;
        }
        
        .left-panel h1 {
            font-size: 2.5rem;
            margin-bottom: 20px;
            color: #333;
        }
        
        .left-panel h1 span {
            color: #ff7a00;
        }
        
        .left-panel p {
            margin-bottom: 30px;
            color: #666;
            font-size: 1rem;
        }
        
        .features-list {
            margin-bottom: 30px;
        }
        
        .feature-item {
            display: flex;
            align-items: flex-start;
            margin-bottom: 15px;
        }
        
        .feature-dot {
            width: 10px;
            height: 10px;
            background-color: #ff7a00;
            border-radius: 50%;
            margin-right: 10px;
            margin-top: 5px;
        }
        
        .feature-text {
            font-size: 0.95rem;
            color: #555;
        }
        
        .illustration {
            width: 100%;
            max-width: 400px;
            margin-top: 30px;
        }
        
        .right-panel {
            flex: 1;
            background-color: #fff8f0;
            padding: 40px 30px;
            display: flex;
            flex-direction: column;
            justify-content: center;
            border-radius: 10px;
            box-shadow: 0 4px 20px rgba(0,0,0,0.05);
        }
        
        .right-panel h2 {
            font-size: 2rem;
            margin-bottom: 10px;
            color: #333;
            text-align: center;
        }
        
        .right-panel p {
            text-align: center;
            color: #666;
            margin-bottom: 30px;
            font-size: 0.95rem;
        }
        
        .social-login {
            display: flex;
            flex-direction: column;
            gap: 15px;
            margin-bottom: 25px;
        }
        
        .social-btn {
            padding: 12px 20px;
            border: 2px solid #ddd;
            border-radius: 8px;
            background: white;
            color: #333;
            font-weight: 500;
            cursor: pointer;
            transition: all 0.3s;
            display: flex;
            align-items: center;
            justify-content: center;
            gap: 10px;
        }
        
        .social-btn:hover {
            background-color: #f8f8f8;
            border-color: #ccc;
        }
        
        .social-btn i {
            font-size: 1.2rem;
        }
        
        .divider {
            display: flex;
            align-items: center;
            margin: 20px 0;
            color: #666;
            font-size: 0.9rem;
        }
        
        .divider::before,
        .divider::after {
            content: '';
            flex: 1;
            height: 1px;
            background-color: #ddd;
            margin: 0 10px;
        }
        
        .form-group {
            margin-bottom: 20px;
        }
        
        .form-label {
            display: block;
            margin-bottom: 8px;
            color: #333;
            font-weight: 500;
        }
        
        .form-input {
            width: 100%;
            padding: 12px 15px;
            border: 2px solid #ddd;
            border-radius: 8px;
            font-size: 1rem;
            transition: border-color 0.3s;
        }
        
        .form-input:focus {
            outline: none;
            border-color: #ff7a00;
        }
        
        .remember-forgot {
            display: flex;
            justify-content: space-between;
            align-items: center;
            margin-bottom: 20px;
        }
        
        .remember-me {
            display: flex;
            align-items: center;
            gap: 8px;
        }
        
        .remember-me input {
            width: 16px;
            height: 16px;
            accent-color: #ff7a00;
        }
        
        .forgot-password {
            color: #ff7a00;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .forgot-password:hover {
            color: #e66d00;
            text-decoration: underline;
        }
        
        .login-btn {
            width: 100%;
            padding: 15px;
            background-color: #ff7a00;
            color: white;
            border: none;
            border-radius: 8px;
            font-size: 1.1rem;
            font-weight: 500;
            cursor: pointer;
            transition: background-color 0.3s, transform 0.2s;
        }
        
        .login-btn:hover {
            background-color: #e66d00;
            transform: translateY(-2px);
        }
        
        .signup-link {
            text-align: center;
            margin-top: 20px;
            color: #666;
        }
        
        .signup-link a {
            color: #ff7a00;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .signup-link a:hover {
            color: #e66d00;
            text-decoration: underline;
        }
        
        .terms {
            text-align: center;
            margin-top: 20px;
            font-size: 0.85rem;
            color: #666;
        }
        
        .terms a {
            color: #ff7a00;
            text-decoration: none;
            font-weight: 500;
            transition: color 0.3s;
        }
        
        .terms a:hover {
            color: #e66d00;
            text-decoration: underline;
        }
        
        /* Responsive Design */
        @media (max-width: 768px) {
            .login-container {
                flex-direction: column;
            }
            
            .left-panel {
                padding: 30px 20px;
            }
            
            .right-panel {
                padding: 30px 20px;
                margin-top: 20px;
            }
            
            .left-panel h1 {
                font-size: 2rem;
            }
            
            .right-panel h2 {
                font-size: 1.8rem;
            }
            
            .illustration {
                max-width: 300px;
            }
        }
        
        @media (max-width: 480px) {
            .login-container {
                padding: 10px;
            }
            
            .left-panel, .right-panel {
                padding: 20px 15px;
            }
            
            .left-panel h1 {
                font-size: 1.5rem;
            }
            
            .right-panel h2 {
                font-size: 1.5rem;
            }
            
            .social-btn {
                padding: 10px 15px;
                font-size: 0.9rem;
            }
            
            .form-input {
                padding: 10px 12px;
                font-size: 0.95rem;
            }
            
            .login-btn {
                padding: 12px;
                font-size: 1rem;
            }
        }
    </style>
</head>
<body>
    <div class="login-container">
        <div class="left-panel">
            <div class="logo">Logo AsliBogor</div>
            <h1>Bergabung dengan <span>Komunitas UMKM</span></h1>
            <p>Daftarkan bisnis Anda atau mulai jelajahi ribuan UMKM lokal terbaik di Kota Bogor</p>
            
            <div class="features-list">
                <div class="feature-item">
                    <div class="feature-dot"></div>
                    <div class="feature-text">Akses ke direktori UMKM terlengkap</div>
                </div>
                <div class="feature-item">
                    <div class="feature-dot"></div>
                    <div class="feature-text">Temukan bisnis lokal terdekat</div>
                </div>
                <div class="feature-item">
                    <div class="feature-dot"></div>
                    <div class="feature-text">Dukung ekonomi lokal Bogor</div>
                </div>
                <div class="feature-item">
                    <div class="feature-dot"></div>
                    <div class="feature-text">Gratis untuk semua pengguna</div>
                </div>
            </div>
            
            <img src="https://placehold.co/400x300" alt="Illustration" class="illustration">
        </div>
        
        <div class="right-panel">
            <h2>Selamat Datang!</h2>
            <p>Masuk ke akun Anda untuk melanjutkan</p>
            
            <div class="social-login">
                <button class="social-btn">
                    <i class="fab fa-google"></i>
                    Masuk dengan Google
                </button>
                <button class="social-btn">
                    <i class="fab fa-facebook-f"></i>
                    Masuk dengan Facebook
                </button>
            </div>
            
            <div class="divider">atau</div>
            
            <form id="loginForm">
                <div class="form-group">
                    <label for="email" class="form-label">Email</label>
                    <input type="email" id="email" class="form-input" value="aisyahputrihhh16@gmail.com" required>
                </div>
                
                <div class="form-group">
                    <label for="password" class="form-label">Password</label>
                    <input type="password" id="password" class="form-input" value="aisyahputrihhh16@gmail.com" required>
                </div>
                
                <div class="remember-forgot">
                    <div class="remember-me">
                        <input type="checkbox" id="remember" name="remember">
                        <label for="remember">Ingat saya</label>
                    </div>
                    <a href="#" class="forgot-password">Lupa password?</a>
                </div>
                
                <button type="submit" class="login-btn">Masuk</button>
            </form>
            
            <div class="signup-link">
                Belum punya akun? <a href="#">Daftar sekarang</a>
            </div>
            
            <div class="terms">
                Dengan masuk, Anda menyetujui <a href="#">Syarat & Ketentuan</a> dan <a href="#">Kebijakan Privasi</a>
            </div>
        </div>
    </div>

    <script>
        // Form submission
        document.getElementById('loginForm').addEventListener('submit', function(e) {
            e.preventDefault();
            
            const email = document.getElementById('email').value;
            const password = document.getElementById('password').value;
            
            if (email && password) {
                alert('Login berhasil! Selamat datang di AsliBogor.');
                // In a real application, you would redirect to the dashboard or home page
                // window.location.href = 'dashboard.html';
            } else {
                alert('Harap isi semua field!');
            }
        });
        
        // Social login buttons
        document.querySelectorAll('.social-btn').forEach(btn => {
            btn.addEventListener('click', function() {
                alert('Fitur login dengan ' + this.textContent.replace('Masuk dengan ', '') + ' akan segera tersedia!');
            });
        });
        
        // Forgot password link
        document.querySelector('.forgot-password').addEventListener('click', function(e) {
            e.preventDefault();
            alert('Silakan klik tautan "Lupa password?" untuk mengatur ulang kata sandi Anda.');
        });
        
        // Sign up link
        document.querySelector('.signup-link a').addEventListener('click', function(e) {
            e.preventDefault();
            alert('Halaman pendaftaran akan segera tersedia!');
        });
        
        // Terms and conditions links
        document.querySelectorAll('.terms a').forEach(link => {
            link.addEventListener('click', function(e) {
                e.preventDefault();
                alert('Anda akan diarahkan ke halaman ' + this.textContent);
            });
        });
    </script>
</body>
</html>

