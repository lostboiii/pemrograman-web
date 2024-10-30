<?php 
session_start();
if(!isset($_SESSION["username"])){
    session_destroy();  
    header("Location: login.php");
}

if (!isset($_SESSION["count"])) {
    $_SESSION["count"] = 0;
}

$_SESSION["count"]++;


$kupon = ($_SESSION["count"] % 6 == 0);
?>
<html>

    <head>
        <title>Home</title>
        <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary py-3">
            <div class="container-fluid">
                <a class="navbar-brand" href="home.php">Laundry Niggies</a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="home.php">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link active" href="cekHarga.php">Cek harga</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link active" href="logout.php" style="font-weight: bold;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container mt-4 border rounded-3 p-3" style="background-color: #f8f9fa;">
    <h1 class="text-center">Cek harga</h1>
    <form id="formHarga">
        <div class="mb-3">
            <label for="berat" class="form-label">Berat pakaian</label>
            <input type="number" name="berat" id="berat" class="form-control" min="0">
            <label for="jenis" class="form-label">Jenis pakaian</label>
            <select name="jenis" id="jenis" class="form-select">
                <option value="kering">Cuci Kering</option>
                <option value="setrika">Setrika</option>
                <option value="kering+setrika">Cuci Setrika</option>
            </select>
            <label for="kecepatan" class="form-label">Kecepatan</label>
            <select name="kecepatan" id="kecepatan" class="form-select">
                <option value="biasa">Biasa</option>
                <option value="ekspress">Ekspress</option>
            </select>
            <label for="diskon" class="form-label">Diskon</label>
            <select name="diskon" id="diskon" class="form-select">
                <option value="nonMember">Non Member</option>
                <option value="member">Member</option>
                <?php
                if ($kupon) {
                    echo '<option value="kupon">Kupon</option>';
                }
                ?>
            </select>
            <div id="hasil"></div>
            <button type="submit" class="btn btn-primary mt-4 w-100">Cek harga</button>

        </div>
    </form>
    
</div>

<footer class="bg-dark text-light py-4 mt-5 fixed-bottom">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Laundry Niggies</h5>
                <p>I wish you wash here.</p>
            </div>
        <hr>
        <div class="text-center">
            <p>&copy; 2024 Laundry Niggies. All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
<script>
    $(function(){
        $("#formHarga").submit(function(event){
            event.preventDefault();
            var berat = $("#berat").val();
            var jenis = $("#jenis").val();
            var kecepatan = $("#kecepatan").val();
            var diskon = $("#diskon").val();
            var formData = $("#formHarga").serialize();
            $.ajax({
                url: "prosesHarga.php",
                type: "POST",
                data: formData,
                success: function(response){
                    $("#hasil").html(response);
                }
            })
        })
    })
</script>
<style>
            body{
                background-color: lightblue;
            }
</style>
