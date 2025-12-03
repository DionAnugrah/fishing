# 🎣 FishingGear System

**Sistem Informasi Katalog & Penjualan Alat Pancing**

Selamat datang di **FishingGear System**\! Aplikasi ini adalah platform berbasis web untuk menampilkan katalog alat pancing, mengelola stok barang, dan memfasilitasi pengguna (pemancing) untuk melihat detail produk. Aplikasi ini dibangun dengan teknologi web modern yang cepat dan aman.

  

-----

## 📋 Daftar Isi

1.  [Tentang Aplikasi](#-tentang-aplikasi)
2.  [Arsitektur Sistem](#-arsitektur-sistem)
3.  [Persyaratan Sistem (Wajib Install)](#-persyaratan-sistem)
4.  [Cara Instalasi (Langkah demi Langkah)](#-cara-instalasi)
5.  [Cara Menjalankan Aplikasi](#️-cara-menjalankan-aplikasi)
6.  [Akun Login (Demo)](#-akun-login-demo)

-----

## 📖 Tentang Aplikasi

Aplikasi ini memiliki dua peran pengguna:

1.  **Admin:** Memiliki akses penuh untuk menambah, mengedit, dan menghapus data alat pancing (CRUD).
2.  **User (Member):** Dapat melihat katalog, mendaftar akun, login, dan melihat dashboard member.

**Fitur Utama:**

  * Halaman Depan (Landing Page) yang menarik.
  * Katalog Produk dengan Gambar.
  * Sistem Login & Register yang aman.
  * **Dark Mode** otomatis (mengikuti settingan sistem).
  * Manajemen Produk (Khusus Admin).

-----

## 🏗 Arsitektur Sistem

Aplikasi ini menggunakan pola desain **MVC (Model-View-Controller)** yang memisahkan logika data, tampilan antarmuka, dan pemrosesan alur aplikasi.

  * **Frontend (Tampilan):** Menggunakan **Blade Templates** dan **Tailwind CSS** agar desain responsif dan modern.
  * **Backend (Logika):** Menggunakan **Laravel** (PHP Framework) untuk menangani keamanan, routing, dan logika bisnis.
  * **Database:** Menggunakan **PostgreSQL** untuk menyimpan data pengguna dan produk dengan aman.

-----

## 🛠 Persyaratan Sistem

Sebelum memulai, pastikan komputer kamu sudah terinstall software berikut:

1.  **PHP** (Minimal versi 8.2) - Bahasa pemrograman utama.
2.  **Laravel 12** - Framework yang digunakan.
3.  **Composer** - Untuk menginstall pustaka Laravel.
4.  **PostgreSQL** - Aplikasi database.
5.  **Node.js & NPM** - Untuk mengatur tampilan (CSS/Javascript).
6.  **Git** (Opsional) - Untuk mengunduh kode.

-----

## 🚀 Cara Instalasi

Ikuti langkah ini satu per satu di terminal (Command Prompt / PowerShell / Terminal VS Code).

### 1\. Dapatkan Kode Program

Jika kamu memiliki file zip, ekstrak dahulu. Jika menggunakan Git, jalankan:

```bash
git clone https://github.com/username-kamu/fishing-app.git
cd fishing-app
```

### 2\. Install Pustaka (Dependencies)

Jalankan perintah ini untuk mengunduh semua file pendukung Laravel:

```bash
composer install
```

### 3\. Konfigurasi Database

1.  Duplikat file `.env.example` dan ubah namanya menjadi `.env`.
    Windows: `copy .env.example .env`
    Mac/Linux: `cp .env.example .env`
2.  Buka file `.env` tersebut dengan teks editor.
3.  Cari bagian `DB_CONNECTION` dan ubah menjadi seperti ini (Sesuaikan password dengan settingan PostgreSQL kamu):

<!-- end list -->

```ini
DB_CONNECTION=pgsql
DB_HOST=127.0.0.1
DB_PORT=5432
DB_DATABASE=fishing_db
DB_USERNAME=postgres
DB_PASSWORD=password_kamu_disini
```

4.  **PENTING:** Buka aplikasi PostgreSQL (pgAdmin atau SQL Shell) dan buat database baru bernama `fishing_db`.

### 4\. Generate Kunci Aplikasi

Agar aplikasi aman, jalankan perintah ini:

```bash
php artisan key:generate
```

### 5\. Setup Database & Data Contoh

Perintah ini akan membuat tabel otomatis dan mengisinya dengan **data dummy (palsu)** agar aplikasi tidak kosong:

```bash
php artisan migrate:fresh --seed
```

### 6\. Siapkan Tampilan (Frontend)

Jalankan perintah ini untuk menyusun file CSS:

```bash
npm install
npm run build
```

-----

## ▶️ Cara Menjalankan Aplikasi

Setelah instalasi selesai, jalankan perintah ini untuk menyalakan server:

```bash
php artisan serve
```

Jika berhasil, akan muncul tulisan:
`Server running on [http://127.0.0.1:8000]`

Buka browser (Chrome/Edge) dan kunjungi alamat: **[http://127.0.0.1:8000](https://www.google.com/url?sa=E&source=gmail&q=http://127.0.0.1:8000)**

-----

## 🔑 Akun Login (Demo)

Gunakan akun berikut yang sudah dibuatkan otomatis oleh sistem untuk mencoba aplikasi:

### 1\. Akun ADMIN

  * **Email:** `admin@fishing.com`
  * **Password:** `password`
  * *Akses:* Bisa masuk ke menu `/admin/products` untuk tambah/hapus barang.

### 2\. Akun USER (Member)

  * **Email:** `user@fishing.com`
  * **Password:** `password`
  * *Akses:* Hanya bisa melihat dashboard member dan katalog.

-----

### ⚠️ Catatan Tambahan (Troubleshooting)

  * **Gambar Produk:** Jika gambar produk tidak muncul (broken image), pastikan kamu sudah menaruh file gambar `.jpg` di dalam folder `public/images/`.
  * **Eror Database:** Jika muncul error "Connection Refused", pastikan aplikasi PostgreSQL kamu sudah berjalan (Service Active).

-----

*Dibuat dengan ❤️ menggunakan Laravel & PostgreSQL.*