<?php
include("config.php");

if(isset($_POST['simpan'])){
    
    // Amankan dan ambil data
    $id = $_POST['id'];
    $nama = mysqli_real_escape_string($db, $_POST['nama']);
    $alamat = mysqli_real_escape_string($db, $_POST['alamat']);
    $jenis_kelamin = mysqli_real_escape_string($db, $_POST['jenis_kelamin']);
    $agama = mysqli_real_escape_string($db, $_POST['agama']);
    $sekolah_asal = mysqli_real_escape_string($db, $_POST['sekolah_asal']);

    // Buat query UPDATE
    $sql = "UPDATE calon_siswa SET nama='$nama', alamat='$alamat', jenis_kelamin='$jenis_kelamin', agama='$agama', sekolah_asal='$sekolah_asal' WHERE id=$id";
    
    $query = mysqli_query($db, $sql);

    if($query){
        header('Location: list-siswa.php?status_edit=sukses');
    } else {
        die("Gagal menyimpan perubahan...");
    }
} else {
    die("Akses dilarang...");
}
?>
