<?php
// Konfigurasi koneksi database
$server = "localhost";
$user = "root";
$password = ""; 
$nama_database = "pendaftaran_siswa"; 

// Lakukan koneksi
$db = mysqli_connect($server, $user, $password, $nama_database);

// Cek koneksi
if (!$db) {
    die("Gagal terhubung dengan database: " . mysqli_connect_error());
}
?>