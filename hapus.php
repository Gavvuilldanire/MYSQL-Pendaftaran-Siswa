<?php

include("config.php");

if( isset($_GET['id']) ){
    
    // Ambil ID dari URL dan amankan (meskipun hanya digunakan untuk DELETE)
    $id = mysqli_real_escape_string($db, $_GET['id']);
    
    // Buat query DELETE. Pastikan nilai $id DIAPIT OLEH TANDA KUTIP TUNGGAL (')
    $sql = "DELETE FROM calon_siswa WHERE id='$id'"; // PERBAIKAN SINTAKS
    
    $query = mysqli_query($db, $sql);
    
    if( $query ){
        header('Location: list-siswa.php?status_hapus=sukses');
    } else {
        // Tambahkan pesan error untuk debugging jika masih gagal
        die("Gagal menghapus: " . mysqli_error($db)); 
    }
    
} else {
    die("Akses dilarang.");
}

?>