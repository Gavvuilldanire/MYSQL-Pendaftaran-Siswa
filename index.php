<?php include("config.php"); 
// Menghitung total siswa untuk ditampilkan di dashboard
$sql = "SELECT count(*) as total FROM calon_siswa";
$query = mysqli_query($db, $sql);
$data = mysqli_fetch_assoc($query);
?>
<!DOCTYPE html>
<html>

<head>
    <title>Dashboard | SMKN 3 Medan</title>
    <link rel="stylesheet" href="style.css">
</head>

<body>

    <div class="sidebar">
        <div class="sidebar-header">
            <h3>SMKN 3 Medan</h3>
            <p>Sistem PPDB</p>
        </div>
        <ul class="nav-links">
            <li><a href="index.php" class="active">Dashboard</a></li>
            <li><a href="form-daftar.php">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Data Pendaftar</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2 class="header-title">Selamat Datang, Administrator</h2>

        <?php if(isset($_GET['status'])): ?>
        <div class="status-msg success">
            <?php echo ($_GET['status'] == 'sukses') ? "Pendaftaran siswa baru berhasil!" : "Pendaftaran gagal!"; ?>
        </div>
        <?php endif; ?>

        <div class="card">
            <h3>Statistik Pendaftaran</h3>
            <p>Jumlah Calon Siswa Terdaftar:</p>
            <h1 style="font-size: 4rem; color: var(--accent-color); margin: 20px 0;">
                <?php echo $data['total']; ?>
            </h1>
            <a href="list-siswa.php" class="btn" style="text-decoration: none;">Lihat Detail Data</a>
        </div>
    </div>
</body>

</html>