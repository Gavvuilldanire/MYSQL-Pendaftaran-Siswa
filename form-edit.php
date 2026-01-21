<?php
include("config.php");

if( !isset($_GET['id']) ){ header('Location: list-siswa.php'); }

$id = $_GET['id'];
$sql = "SELECT * FROM calon_siswa WHERE id='$id'";
$query = mysqli_query($db, $sql);
$siswa = mysqli_fetch_assoc($query);

if( mysqli_num_rows($query) < 1 ){ die("Data tidak ditemukan..."); }
?>

<!DOCTYPE html>
<html>

<head>
    <title>Edit Siswa | SMKN 3 Medan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>
    <div class="sidebar">
        <div class="sidebar-header">
            <h3>SMKN 3 Medan</h3>
            <p>Sistem PPDB</p>
        </div>
        <ul class="nav-links">
            <li><a href="index.php">Dashboard</a></li>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php" class="active">Data Pendaftar</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2 class="header-title">Edit Data Siswa</h2>

        <div class="card">
            <form action="proses-edit.php" method="POST">

                <input type="hidden" name="id" value="<?php echo $siswa['id'] ?>" />

                <label>No. Identitas (Tidak dapat diubah)</label>
                <input type="text" value="<?php echo $siswa['id'] ?>" disabled />

                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" value="<?php echo $siswa['nama'] ?>" required />

                <label for="alamat">Alamat Domisili</label>
                <textarea name="alamat" rows="3" required><?php echo $siswa['alamat'] ?></textarea>

                <label>Jenis Kelamin</label>
                <div class="radio-group">
                    <?php $jk = $siswa['jenis_kelamin']; ?>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="Laki-Laki"
                            <?php echo ($jk == 'Laki-Laki') ? "checked": "" ?>> Laki-laki
                    </label>
                    <label>
                        <input type="radio" name="jenis_kelamin" value="Perempuan"
                            <?php echo ($jk == 'Perempuan') ? "checked": "" ?>> Perempuan
                    </label>
                </div>

                <label for="agama">Agama</label>
                <select name="agama" required>
                    <?php $agama = $siswa['agama']; ?>
                    <option <?php echo ($agama == 'Islam') ? "selected": "" ?>>Islam</option>
                    <option <?php echo ($agama == 'Protestan') ? "selected": "" ?>>Protestan</option>
                    <option <?php echo ($agama == 'Katolik') ? "selected": "" ?>>Katolik</option>
                    <option <?php echo ($agama == 'Hindu') ? "selected": "" ?>>Hindu</option>
                    <option <?php echo ($agama == 'Buddha') ? "selected": "" ?>>Buddha</option>
                    <option <?php echo ($agama == 'Konghucu') ? "selected": "" ?>>Konghucu</option>
                </select>

                <label for="sekolah_asal">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" value="<?php echo $siswa['sekolah_asal'] ?>" required />

                <input type="submit" value="Simpan Perubahan" name="simpan" class="btn" />
            </form>
        </div>
    </div>
</body>

</html>