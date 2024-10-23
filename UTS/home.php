<?php 
session_start();
if(!isset($_SESSION["username"])){
    session_destroy();  
    header("Location: login.php");
}
?>
<html>
    <head>
        <title>Home</title>
        <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
    </head>
    <body>
    <nav class="navbar navbar-expand-lg navbar-light bg-primary sticky-top">
            <div class="container-fluid">
                <a class="navbar-brand" href="#">Laundry Niggies
                    
                </a>
                <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <ul class="navbar-nav ms-auto mb-2 mb-lg-0 px-5">
        <li class="nav-item">
          <a class="nav-link active" aria-current="page" href="#">Home</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="cekHarga.php">Cek harga</a>
        </li>
        <li class="nav-item"> 
            <a class="nav-link" href="logout.php" style="font-weight: bold;">Logout</a>
        </li>
      </ul>
    </div>
  </div>
</nav>
<div class="container-fluid py-3" style="max-width: 1400px;">
    <div id="carouselExampleFade" class="carousel slide carousel-fade" data-bs-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active" style="height: 800px; object-fit: cover;" data-bs-interval="1000">
                <img src="img/image.png" class="d-block w-100" alt="..." style="height: 800px; object-fit: cover;">
            </div>
            <div class="carousel-item" style="height: 800px; object-fit: cover;" data-bs-interval="1000">
                <img src="img/image1.png" class="d-block w-100" alt="..." style="height: 800px; object-fit: cover;">
            </div>
            <div class="carousel-item" style="height: 800px; object-fit: cover;" data-bs-interval="1000">
                <img src="img/image2.png" class="d-block w-100" alt="..." style="height: 800px; object-fit: cover;">
            </div>
        </div>
        <button class="carousel-control-prev" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </button>
        <button class="carousel-control-next" type="button" data-bs-target="#carouselExampleFade" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </button>
    </div>
</div>
<div class="container mt-4">
    <h1>Selamat datang, <?php echo $_SESSION["username"]; ?></h1>
    <h2 class="text-center">Laundry Niggies
        
    </h2>
    <p>Laundry Niggies
         adalah perusahaan laundry dengan lebih dari 10 tahun pengalaman yang berkomitmen untuk memberikan pelayanan berkualitas tinggi kepada pelanggan. Kami menawarkan berbagai layanan, seperti cuci pakaian sehari-hari, dry cleaning, setrika, dan layanan antar jemput. Teknologi modern yang kami gunakan, termasuk mesin cuci dan pengering canggih, serta produk ramah lingkungan, memastikan setiap cucian ditangani dengan hati-hati dan bersih maksimal.

Selain itu, layanan dry cleaning kami sangat cocok untuk pakaian formal yang memerlukan perawatan khusus, seperti jas dan gaun. Kami juga menyediakan layanan setrika yang membuat pakaian bebas kerutan dan tampak seperti baru. Untuk kemudahan, kami menawarkan layanan antar jemput gratis, ideal bagi pelanggan dengan jadwal sibuk.

Pelanggan kami dapat menikmati layanan profesional yang didukung oleh tim ahli. Kami juga peduli terhadap lingkungan dengan menggunakan deterjen yang aman dan hemat energi. Laundry Niggies
 terus berinovasi dengan memperbarui teknologi dan meluncurkan aplikasi mobile yang memungkinkan pelanggan memesan layanan secara online, menjadikan kami pilihan terbaik untuk kebutuhan laundry mereka.</p>

<div class="container mt-4">
    <h2 class="text-center">Layanan kami</h2>
    <div class="row">
        <div class="col-md-4 mt-4">
            <div class="card">
                <img src="img/aku bang kryu.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                    <div class="card-body rounded-bottom" style="height: 200px; overflow: hidden; background-color: #f8f9fa;">
                    <h5 class="card-title">Cuci Kering</h5>
                    <p class="card-text">Layanan cuci kering yang kami tawarkan melibatkan penggunaan mesin cuci dan pengering yang modern, serta bahan kimia yang aman dan ramah lingkungan. Kami memastikan bahwa setiap cucian kering ditangani dengan hati-hati dan bersih maksimal.</p>
                </div>
                <div class="card-footer">
                    <a href="cekHarga.php" class="btn btn-primary w-100 ">Pesan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <img src="img/aku bang kryu.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                <div class="card-body rounded-bottom" style="height: 200px; overflow: hidden; background-color: #f8f9fa;">
                    <h5 class="card-title">Setrika</h5>
                    <p class="card-text">Layanan setrika yang kami tawarkan melibatkan penggunaan mesin setrika yang modern, serta bahan kimia yang aman dan ramah lingkungan. Kami memastikan bahwa setiap cucian setrika ditangani dengan hati-hati dan bersih maksimal.</p>
                </div>
                <div class="card-footer">
                    <a href="cekHarga.php" class="btn btn-primary w-100 ">Pesan</a>
                </div>
            </div>
        </div>
        <div class="col-md-4 mt-4">
            <div class="card">
                <img src="img/aku bang kryu.jpg" class="card-img-top" alt="..." style="height: 200px; object-fit: cover;">
                <div class="card-body rounded-bottom" style="height: 200px; overflow: hidden; background-color: #f8f9fa;">
                    <h5 class="card-title">Cuci Setrika</h5>
                    <p class="card-text">Layanan cuci setrika yang kami tawarkan melibatkan penggunaan mesin cuci dan pengering yang modern, serta bahan kimia yang aman dan ramah lingkungan. Kami memastikan bahwa setiap cucian setrika ditangani dengan hati-hati dan bersih maksimal.</p>
                </div>
                <div class="card-footer">
                    <a href="cekHarga.php" class="btn btn-primary w-100 ">Pesan</a>
                </div>
            </div>
        </div>
    </div>
</div>
</div>

<footer class="bg-dark text-light py-4 mt-5 ">
    <div class="container">
        <div class="row">
            <div class="col-md-6">
                <h5>Laundry Niggies
                    
                </h5>
                <p>I wish you wash here.</p>
            </div>
        <hr>
        <div class="text-center">
            <p>&copy; 2024 Laundry Niggies
                . All rights reserved.</p>
        </div>
    </div>
</footer>

</body>
</html>
<style>
            body{
                background-color: lightblue;
            }
</style>
