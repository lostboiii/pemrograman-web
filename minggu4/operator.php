<?php
$a = 10;
$b = 5;

$tambah = $a+$b;
$kurang = $a-$b;
$kali = $a*$b;
$bagi = $a/$b;
$sisaBagi = $a%$b;
$pangkat = $a**$b;

echo "Hasil Tambah : " . $tambah ."<br> Hasil Kurang :". $kurang ."<br> hasil Kali :". $kali ."<br> Hasil Bagi :" . $bagi ."<br> Hasil Sisa bagi :". $sisaBagi ."<br> Hasil Pangkat :". $pangkat;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;
echo "<br>";
echo "Hasil Sama : " . $hasilSama. "<br> Hasil Tidak Sama : ". $hasilTidakSama ."<br> Hasil Lebih Kecil :". $hasilLebihKecil ."<br> Hasil Lebih Besar :".$hasilLebihBesar."<br> Hasil Lebih Kecil Sama :".$hasilLebihKecilSama."<br> Hasil Lebih Besar Sama :".$hasilLebihBesarSama;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotA = !$a;
$hasilNotB = !$b;
echo "<br> Hasil AND :". $hasilAnd . "<br> Hasil OR". $hasilOr ."<br> Hasil NOT A :". $hasilNotA ."<br> Hasil NOT B :". $hasilNotB;

$hasila = $a += $b;
$hasilb = $a -= $b;
$hasilc =  $a *= $b;
$hasild = $a /= $b;
$hasile = $a %= $b;
echo "<br> Hasil += :". $hasila . "<br> Hasil -=". $hasilb ."<br> Hasil *=". $hasilc ."<br> Hasil /=". $hasild ."<br> Hasil %=". $hasile;

$hasilIdentik = $a === $b;
$hasilTIdentik = $a !== $b;

echo "<br> Hasil Identik :". $hasilIdentik . "<br> Hasil Tidak Identik :". $hasilTIdentik;