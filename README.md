## Cara Memasang Project Ini Menggunakan Git

Untuk memasang project ini, ikuti langkah-langkah berikut:

1. Clone repository ini ke dalam komputer Anda:

    ```bash
    git clone https://github.com/Dimascndra/wisata-majalengka.git
    ```

2. Masuk ke direktori project:

    ```bash
    cd wisata-majalengka
    ```

3. Install dependensi PHP menggunakan Composer:

    ```bash
    composer install
    ```

4. Salin file `.env.example` menjadi `.env`:

    ```bash
    cp .env.example .env
    ```

5. Generate key aplikasi:

    ```bash
    php artisan key:generate
    ```

6. Jalankan migrasi database:

    ```bash
    php artisan migrate
    ```

7. Install dependensi JavaScript menggunakan npm:

    ```bash
    npm install
    ```

8. Bangun project:

    ```bash
    npm run build
    ```

9. Jalankan server lokal:
    ```bash
    php artisan serve
    ```

Website ini dibangun menggunakan teknologi Laravel dan Breeze, serta memanfaatkan MySQL untuk manajemen database. Desain antarmuka menggunakan HTML, CSS, dan Tailwind CSS untuk memberikan pengalaman pengguna yang responsif dan menarik. Berikut merupakan beberapa screenshoot website :

Beranda
![alt text](public/img/beranda.png)

Login
![alt text](public/img/login.png)

Register
![alt text](public/img/register.png)

Grafik
![alt text](public/img/grafik.png)

Form Pemesanan
![alt text](public/img/pesan.png)

Form Validasi Pemesanan
![alt text](public/img/validasi-pemesanan.png)

Daftar Pemesanan
![alt text](public/img/daftar.png)

Print Invoice
![alt text](public/img/print-invoice.png)

<p align="center"><a href="https://laravel.com" target="_blank"><img src="https://raw.githubusercontent.com/laravel/art/master/logo-lockup/5%20SVG/2%20CMYK/1%20Full%20Color/laravel-logolockup-cmyk-red.svg" width="400" alt="Laravel Logo"></a></p>

<p align="center">
<a href="https://github.com/laravel/framework/actions"><img src="https://github.com/laravel/framework/workflows/tests/badge.svg" alt="Build Status"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/dt/laravel/framework" alt="Total Downloads"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/v/laravel/framework" alt="Latest Stable Version"></a>
<a href="https://packagist.org/packages/laravel/framework"><img src="https://img.shields.io/packagist/l/laravel/framework" alt="License"></a>
</p>
