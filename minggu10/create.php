<html lang="en">
<head>
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <div class="container">
        <h2>Tambah Data Anggota</h2>
        <form action="proses.php?aksi=tambah" method="POST">
           <label for="nama">Nama:</label>
           <input type="text" name="nama" id="nama" required>
           <label for="jenis_kelamin">Jenis Kelamin</label>
           <div class="radio-group">
            <input type="radio" id="laki" name="jenis_kelamin" value="L" required><label for="laki">Laki-laki</label>
            <input type="radio" id="perempuan" name="jenis_kelamin" value="P" required><label for="perempuan">Perempuan</label>
           </div>
           <label for="alamat">Alamat:</label>
           <input type="text" name="alamat" id="alamat" required>
           <label for="no_telp">No. Telp</label>
           <input type="text" name="no_telp" id="no_telp" required>
           <button type="submit">Simpan Data</button>
           <a href="index.php" class="btn-kembali">Kembali</a>
           </form>
    </div>
</body>
</html>