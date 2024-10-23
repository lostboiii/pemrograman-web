<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $berat = $_POST["berat"];
    $jenis = $_POST["jenis"];
    $kecepatan = $_POST["kecepatan"];
    $diskon = $_POST["diskon"];

    if($jenis == "kering"){
        $hargaCuci = 5000*$berat;
    }
    else if($jenis == "setrika"){
        $hargaCuci = 6000*$berat;
    }
    else if($jenis == "kering+setrika"){
        $hargaCuci = 8000*$berat;
    }

    if($kecepatan == "ekspress"){
        $hargaKec = 2000*$berat;
    }
    $totalHarga = $hargaCuci + $hargaKec;
    if($diskon == "member"){
        $hargaDiskon = $totalHarga * 0.9;
    }
    else{
        $hargaDiskon = $totalHarga;
    }
    echo "Total transaksi: Rp. " . $totalHarga . "<br>";
    echo "Diskon: Rp. " . ($totalHarga - $hargaDiskon) . "<br>";
    echo "Harga yang harus dibayar: Rp. " . $hargaDiskon;
}
?>