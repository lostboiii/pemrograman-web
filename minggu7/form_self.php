<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form input PHP</title>
</head>
<body>
    <h2>Form input PHP</h2>
    <?php
    $namaErr = "";
    $nama = "";

    if($_SERVER['REQUEST_METHOD'] == 'POST'){
        if(empty($_POST['nama'])){
            $namaErr = "Nama perlu diisi";
        } else {
            $nama = $_POST['nama'];
            echo "Data berhasil disimpan";
        }
    }
    ?>
    <form action="<?php echo htmlspecialchars($_SERVER['PHP_SELF']);?>" method="post">
        <label for="nama">Nama:</label>
        <input type="text" id="nama" name="nama" value="<?php echo $nama;?>"><br><br>
        <span class="error"><?php echo $namaErr;?></span><br><br>
        <input type="submit" value="Submit">
    </form>
</body>
</html>