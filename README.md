# Sistem Informasi PPDB - SMKN 3 Medan

Sistem informasi berbasis web sederhana yang dirancang untuk mengelola pendaftaran siswa baru (PPDB). Proyek ini mencakup fungsionalitas CRUD (Create, Read, Update, Delete) lengkap dengan desain antarmuka modern menggunakan CSS Sidebar.

## ✨ Fitur Utama
* **Dashboard Statistik:** Menampilkan total jumlah pendaftar secara real-time.
* **Manajemen Data:** Input, edit, dan hapus data calon siswa.
* **Custom NIS Generator:** Sistem otomatis menghasilkan 10 digit ID unik (Non-Auto Increment) sebagai identitas siswa.
* **Responsive Sidebar:** Navigasi yang bersih dan mudah digunakan.
* **Security:** Menggunakan `mysqli_real_escape_string` untuk mencegah SQL Injection dasar.

## 🛠️ Teknologi yang Digunakan
* **Bahasa Pemrograman:** PHP 7/8
* **Database:** MySQL
* **Desain:** HTML5 & CSS3 (Native)

## 📂 Struktur Folder
* `config.php` - Konfigurasi koneksi database.
* `index.php` - Halaman utama & statistik.
* `form-daftar.php` - Form registrasi siswa baru.
* `list-siswa.php` - Tabel data seluruh pendaftar.
* `form-edit.php` - Form untuk memperbarui data siswa.
* `proses-*.php` - Logika pemrosesan data ke database.
* `hapus.php` - Logika penghapusan data.
* `style.css` - Framework styling UI.

## 🚀 Cara Instalasi

1.  **Clone Repositori**
    ```bash
    git clone [https://github.com/username-anda/nama-repo.git](https://github.com/username-anda/nama-repo.git)
    ```

2.  **Persiapkan Database**
    * Buka phpMyAdmin.
    * Buat database baru dengan nama `pendaftaran_siswa`.
    * Eksekusi query SQL berikut:
    ```sql
    CREATE TABLE `calon_siswa` (
      `id` VARCHAR(10) NOT NULL,
      `nama` VARCHAR(64) NOT NULL,
      `alamat` VARCHAR(255) NOT NULL,
      `jenis_kelamin` VARCHAR(16) NOT NULL,
      `agama` VARCHAR(16) NOT NULL,
      `sekolah_asal` VARCHAR(64) NOT NULL,
      PRIMARY KEY (`id`)
    ) ENGINE = InnoDB;
    ```

3.  **Konfigurasi Koneksi**
    * Buka `config.php`.
    * Sesuaikan `$user` dan `$password` dengan konfigurasi server lokal Anda (XAMPP/Laragon).

4.  **Jalankan Project**
    * Pindahkan folder ke `htdocs` atau `www`.
    * Akses melalui browser: `localhost/nama-folder-anda`

## 📝 Lisensi
Proyek ini dibuat untuk tujuan pendidikan. Silakan digunakan dan dikembangkan lebih lanjut.
