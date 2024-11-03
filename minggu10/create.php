<html lang="en">
<head>
    <title>Tambah Data Anggota</title>
    <link rel="stylesheet" href="style.css">
   <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
   <script src="https://code.jquery.com/jquery-3.6.0.min.js" integrity="sha384-KyZXEAg3QhqLMpG8r+Knujsl5/5hb7g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" integrity="sha384-1n1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1g1" crossorigin="anonymous"></script>
   <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <title>Data Anggota</title>
</head>
<body>
    <div class="container mt-4">
        <h2>Tambah Data Anggota</h2>
        <form action="proses.php?aksi=tambah" method="POST">
           <div class="form-group">
               <label for="nama">Nama:</label>
               <input type="text" name="nama" id="nama" required>
           </div>
           <div class="form-group">
               <label for="jenis_kelamin">Jenis Kelamin</label>
               <div class="form-check">
                   <input class="form-check-input" type="radio" id="laki" name="jenis_kelamin" value="L" required>
                   <label class="form-check-label" for="laki">Laki-laki</label>
               </div>
               <div class="form-check">
                   <input class="form-check-input" type="radio" id="perempuan" name="jenis_kelamin" value="P" required>
                   <label class="form-check-label" for="perempuan">Perempuan</label>
               </div>
           </div>
           <div class="form-group">
               <label for="alamat">Alamat:</label>
               <input type="text" name="alamat" id="alamat" required>
           </div>
           <div class="form-group">
               <label for="no_telp">No. Telp</label>
               <input type="text" name="no_telp" id="no_telp" required>
           </div>
           <button type="submit">Simpan Data</button>
           </form>
           <a href="index.php" class="btn-kembali">Kembali</a>
    </div>
</body>
</html>