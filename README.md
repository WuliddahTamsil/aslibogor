# AsliBogor
AsliBogor adalah sebuah platform web berbasis Laravel yang berfungsi sebagai direktori untuk Usaha Mikro, Kecil, dan Menengah (UMKM) lokal di Bogor. Sistem ini bertujuan untuk membantu masyarakat menemukan, menjelajahi, dan mendukung bisnis lokal melalui antarmuka yang interaktif dan informatif.
-----

## Teknologi yang Digunakan
  * Framework: Laravel 10
  * Template Engine: Blade
  * Frontend: Bootstrap 5
  * Bahasa: PHP 8+
  * Database: MySQL
  * Lingkungan Lokal: Laragon / XAMPP
-----

## Panduan Instalasi dan Konfigurasi
Pastikan server lokal (Laragon/XAMPP) sudah aktif dan *database* dengan nama `mia` telah dibuat di phpMyAdmin sebelum melanjutkan.
1.  Clone Repository
    git clone https://github.com/WuliddahTamsil/aslibogor.git
    cd aslibogor

2.  Instalasi Dependensi
    composer install

3.  Konfigurasi Environment
    Salin file `.env.example` menjadi `.env`.
    cp .env.example .env
    *Sesuaikan pengaturan database (DB\_DATABASE, DB\_USERNAME, DB\_PASSWORD) di dalam file `.env` agar sesuai dengan konfigurasi lokal Anda.*

4.  Generate Application Key
    php artisan key:generate

5.  Jalankan Server Pengembangan
    php artisan serve
    
6.  Akses Aplikasi
    Buka browser dan akses alamat berikut: `http://127.0.0.1:8000`
