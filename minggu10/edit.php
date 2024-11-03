<html lang="en">
<head>
    <title>Edit Data Anggota</title>
    <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
    <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
    <?php
    include ('koneksi.php');
    $id = $_GET['id'];
    $query = "SELECT * FROM anggota WHERE id=$id";
    $result = mysqli_query($connect, $query);
    $row = mysqli_fetch_assoc($result);
    mysqli_close($connect);
    ?>
    <div class="container mt-4">
        <h2>Edit Data Anggota</h2>
        <form action="proses.php?aksi=ubah" method="POST">
            <input type="hidden" name="id" value="<?php echo $row['id']?>">
            <div class="form-group">
                <label for="nama" class="form-label">Nama:</label>
                <input type="text" name="nama" id="nama" class="form-control" value="<?php echo $row['nama']?>" required>
            </div>
            <div class="form-group">
                <label for="jenis_kelamin" class="form-label">Jenis Kelamin</label>
                <div class="form-check">
                    <input type="radio" id="laki" name="jenis_kelamin" value="L" class="form-check-input" <?php if($row['jenis_kelamin']==='L') echo 'checked';?> required>
                    <label for="laki" class="form-check-label">Laki-laki</label>
                </div>
                <div class="form-check">
                    <input type="radio" id="perempuan" name="jenis_kelamin" value="P" class="form-check-input" <?php if($row['jenis_kelamin']==='P') echo 'checked';?> required>
                    <label for="perempuan" class="form-check-label">Perempuan</label>
                </div>
            </div>
            <div class="form-group">
                <label for="alamat" class="form-label">Alamat:</label>
                <input type="text" name="alamat" id="alamat" class="form-control" value="<?php echo $row['alamat']?>" required>
            </div>
            <div class="form-group">
                <label for="no_telp" class="form-label">No. Telp</label>
                <input type="text" name="no_telp" id="no_telp" class="form-control" value="<?php echo $row['no_telp']?>" required>
            </div>
            <button type="submit" class="btn btn-primary">Simpan Data</button>
            </form>
            <a href="index.php" class="btn btn-secondary">Kembali</a>
        
    </div>
    <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
</body>
</html>