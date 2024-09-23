<?php
$angka1 = 10;
$angka2 = 5;
$hasil =  $angka1 + $angka2;
$benar = true;
$salah = false;
echo "hasil penjumlahan $angka1 dan $angka2 adalah $hasil. <br>";
echo "Variabel benar: $benar, Variabel salah: $salah <br>";

define("NAMA_SITUS","Websiteku.com");
define('TAHUN_PENDIDIKAN', 2023);
echo "Selamat datang di ". NAMA_SITUS . ", situs yang didirikan pda tahun " . TAHUN_PENDIDIKAN . ".";

?>