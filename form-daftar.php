<!DOCTYPE html>
<html>

<head>
    <title>Formulir Pendaftaran | SMKN 3 Medan</title>
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
            <li><a href="form-daftar.php" class="active">Daftar Baru</a></li>
            <li><a href="list-siswa.php">Data Pendaftar</a></li>
        </ul>
    </div>

    <div class="main-content">
        <h2 class="header-title">Formulir Pendaftaran Siswa Baru</h2>

        <div class="card">
            <form action="proses-pendaftaran.php" method="POST">
                <label for="nama">Nama Lengkap</label>
                <input type="text" name="nama" placeholder="Masukkan nama lengkap sesuai ijazah" required />

                <label for="alamat">Alamat Domisili</label>
                <textarea name="alamat" rows="3" placeholder="Jalan, RT/RW, Kelurahan, Kecamatan" required></textarea>

                <label>Jenis Kelamin</label>
                <div class="radio-group">
                    <label><input type="radio" name="jenis_kelamin" value="Laki-Laki" required> Laki-laki</label>
                    <label><input type="radio" name="jenis_kelamin" value="Perempuan"> Perempuan</label>
                </div>

                <label for="agama">Agama</label>
                <select name="agama" required>
                    <option value="" disabled selected>-- Pilih Agama --</option>
                    <option>Islam</option>
                    <option>Protestan</option>
                    <option>Katolik</option>
                    <option>Hindu</option>
                    <option>Buddha</option>
                    <option>Konghucu</option>
                </select>

                <label for="sekolah_asal">Sekolah Asal</label>
                <input type="text" name="sekolah_asal" placeholder="Nama SMP/MTs asal" required />

                <input type="submit" value="Daftar Sekarang" name="daftar" />
            </form>
        </div>
    </div>
</body>

</html>