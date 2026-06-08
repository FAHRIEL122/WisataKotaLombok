# Wisata Kota Lombok - Portal Informasi Pariwisata

Aplikasi web portal pariwisata Kota Lombok berbasis framework **Laravel (v11)** dan frontend stack **Tailwind CSS + Vite**. Aplikasi ini dilengkapi dengan sistem manajemen konten (CMS) bagi Administrator serta halaman pencarian & detail destinasi bagi Pengunjung.

---

## 🛠️ Fitur Utama
1. **Multi-Role Authentication (Admin & User):**
   * **Admin:** Memiliki akses ke Dashboard statistik dan menu pengelolaan data wisata (CRUD: Tambah, Edit, Hapus data destinasi beserta unggah gambar cover & galeri foto).
   * **User/Pengunjung:** Dapat mencari destinasi wisata, memfilter kategori, melihat detail informasi wisata (deskripsi, tarif tiket, jam operasional, galeri foto, dsb.), dan melakukan pendaftaran akun baru.
2. **Dynamic Search & Filtering:** Pencarian berdasarkan nama/lokasi dan kategori tempat wisata secara real-time.
3. **Galeri Pendukung Wisata:** Setiap destinasi mendukung pengunggahan banyak foto galeri sekaligus.

---

## ⚙️ Persyaratan Sistem
Sebelum memasang aplikasi ini, pastikan komputer Anda telah terinstal:
* **PHP** (minimal versi 8.2)
* **Composer** (untuk dependensi PHP)
* **Node.js & NPM** (untuk pengelolaan aset frontend)
* **XAMPP / MySQL Database Server**

---

## 🚀 Langkah Pemasangan (Instalasi)

Ikuti langkah-langkah di bawah ini untuk memasang proyek ini di komputer lokal Anda:

### 1. Unduh Proyek (Clone Repository)
Buka terminal/PowerShell Anda, lalu jalankan perintah berikut:
```bash
git clone https://github.com/FAHRIEL122/WisataKotaLombok.git
cd WisataKotaLombok
```

### 2. Instal Dependensi Backend & Frontend
Instal semua library PHP dan paket Node.js yang diperlukan proyek:
```bash
composer install
npm install
```

### 3. Konfigurasi File Environment (`.env`)
Salin file template `.env.example` menjadi `.env` baru:
```bash
copy .env.example .env
```
*(Jika di Linux/macOS, gunakan perintah `cp .env.example .env`)*

Buka file `.env` tersebut dengan editor teks (seperti VS Code), lalu sesuaikan konfigurasi database Anda (biasanya cukup default XAMPP seperti di bawah ini):
```env
DB_CONNECTION=mysql
DB_HOST=127.0.0.1
DB_PORT=3306
DB_DATABASE=wisatalombok
DB_USERNAME=root
DB_PASSWORD=
```

### 4. Generate Application Key
Jalankan perintah ini untuk membuat key enkripsi keamanan Laravel Anda:
```bash
php artisan key:generate
```

### 5. Buat Database & Jalankan Migrasi + Seed Data
1. Aktifkan modul **Apache** dan **MySQL** pada XAMPP Control Panel.
2. Buka phpMyAdmin di browser: `http://localhost/phpmyadmin`
3. Buat database baru dengan nama **`wisatalombok`**.
4. Kembali ke terminal, lalu jalankan migrasi tabel database sekaligus mengisi data awal (wisata & admin):
   ```bash
   php artisan migrate:fresh --seed
   ```

### 6. Hubungkan Penyimpanan File (Storage Link)
Agar gambar cover dan galeri foto pariwisata yang diunggah dapat diakses oleh browser, buat symlink penyimpanan:
```bash
php artisan storage:link
```

---

## 💻 Cara Menjalankan Aplikasi

Jalankan server aplikasi Laravel serta server kompilasi frontend (Vite) secara bersamaan:

1. **Jalankan Server Laravel:**
   ```bash
   php artisan serve
   ```
   *Aplikasi akan berjalan di alamat: `http://127.0.0.1:8000`*

2. **Jalankan Server Aset Frontend (Vite):**
   Buka terminal/tab baru di folder proyek yang sama, lalu jalankan:
   ```bash
   npm run dev
   ```

Sekarang, buka browser Anda dan akses alamat `http://127.0.0.1:8000`.

---

## 🔑 Informasi Akun Login

### A. Akun Administrator (Admin)
Digunakan untuk mengelola konten destinasi wisata.
* **Email:** `admin@wisatalombok.com`
* **Password:** `password123`

### B. Akun Pengguna Biasa (User)
Digunakan oleh pengunjung yang ingin masuk ke portal.
* Pengunjung dapat **mendaftar secara mandiri** dengan mengeklik tombol **Register / Daftar Akun Baru** pada halaman login.
* Isi formulir pendaftaran, dan Anda akan otomatis login serta diarahkan ke halaman utama portal wisata.
