<?php
include("config.php"); 

/**
 * Fungsi untuk menghasilkan ID siswa (NIS) 10 digit yang unik di database.
 * Ini penting karena kolom 'id' tidak lagi AUTO_INCREMENT.
 */
function generate_unique_nis($db) {
    do {
        // Hasilkan angka random 10 digit (0000000000 hingga 9999999999)
        $nis = str_pad(mt_rand(0, 9999999999), 10, '0', STR_PAD_LEFT);
        
        // Cek keunikan di database
        $sql = "SELECT id FROM calon_siswa WHERE id='$nis'";
        $query = mysqli_query($db, $sql);
    } while (mysqli_num_rows($query) > 0); // Ulangi jika NIS sudah ada
    
    return $nis;
}

if(isset($_POST['daftar'])){
    
    // 1. GENERATE ID SISWA BARU (Nomor Identitas Siswa)
    $id_siswa = generate_unique_nis($db);
    
    // 2. Amankan dan ambil data dari formulir
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $alamat = mysqli_real_escape_string($db, $_POST['alamat']);
    $jenis_kelamin = mysqli_real_escape_string($db, $_POST['jenis_kelamin']);
    $agama = mysqli_real_escape_string($db, $_POST['agama']);
    $sekolah_asal = mysqli_real_escape_string($db, $_POST['sekolah_asal']);

    // 3. Buat query INSERT (memasukkan ID random/NIS)
    $sql = "INSERT INTO calon_siswa (id, nama, alamat, jenis_kelamin, agama, sekolah_asal) 
            VALUE ('$id_siswa', '$nama', '$alamat', '$jenis_kelamin', '$agama', '$sekolah_asal')";
    
    $query = mysqli_query($db, $sql);

    // 4. Cek keberhasilan
    if($query){
        header('Location: index.php?status=sukses');
    } else {
        // Jika gagal, tampilkan error MySQL untuk debugging
        // header('Location: index.php?status=gagal'); // Gunakan ini di mode produksi
        die("Gagal memproses pendaftaran: " . mysqli_error($db)); // Gunakan ini saat debugging
    }
} else {
    die("Akses dilarang.");
}
?>