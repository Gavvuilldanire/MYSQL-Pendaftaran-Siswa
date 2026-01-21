<?php include("config.php"); ?>
<!DOCTYPE html>
<html>

<head>
    <title>Data Pendaftar | SMKN 3 Medan</title>
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
        <h2 class="header-title">Data Calon Siswa</h2>

        <div style="margin-bottom: 20px;">
            <a href="form-daftar.php" class="btn" style="text-decoration: none;">+ Tambah Siswa Baru</a>
        </div>

        <?php if(isset($_GET['status_hapus'])): ?>
        <div class="status-msg success">Data berhasil dihapus.</div>
        <?php elseif(isset($_GET['status_edit'])): ?>
        <div class="status-msg success">Data berhasil diperbarui.</div>
        <?php endif; ?>

        <div class="table-container">
            <table>
                <thead>
                    <tr>
                        <th>NIS / ID</th>
                        <th>Nama</th>
                        <th>Alamat</th>
                        <th>J.K</th>
                        <th>Agama</th>
                        <th>Sekolah Asal</th>
                        <th>Tindakan</th>
                    </tr>
                </thead>
                <tbody>
                    <?php
                    $sql = "SELECT * FROM calon_siswa ORDER BY id DESC"; // Urutkan dari yang terbaru
                    $query = mysqli_query($db, $sql); 
                    
                    while($siswa = mysqli_fetch_array($query)){
                        echo "<tr>";
                        echo "<td><span style='background:#eee; padding:3px 8px; border-radius:4px; font-family:monospace;'>".$siswa['id']."</span></td>";
                        echo "<td><b>".$siswa['nama']."</b></td>";
                        echo "<td>".$siswa['alamat']."</td>";
                        echo "<td>".$siswa['jenis_kelamin']."</td>";
                        echo "<td>".$siswa['agama']."</td>";
                        echo "<td>".$siswa['sekolah_asal']."</td>";
                        echo "<td>";
                        echo "<a href='form-edit.php?id=".$siswa['id']."' class='btn-edit'>Edit</a>";
                        echo "<a href='hapus.php?id=".$siswa['id']."' class='btn-delete' onclick=\"return confirm('Yakin menghapus data ".$siswa['nama']."?');\">Hapus</a>";
                        echo "</td>";
                        echo "</tr>";
                    }
                    ?>
                </tbody>
            </table>
        </div>
        <p style="margin-top: 15px; color: #666;">Total Pendaftar: <b><?php echo mysqli_num_rows($query) ?></b> Siswa
        </p>
    </div>
</body>

</html>