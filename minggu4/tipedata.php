<?php
$a = 10;
$b = 5;
$c = $a +5;
$d = $b +(10*5);
$e =  $d-$c;

echo "Variabel a :$a <br>";
echo "Variabel b :$b <br>";
echo "Variabel c :$c <br>";
echo "Variabel d :$d <br>";
echo "Variabel e :$e <br>";

$niaiMtk = 5.1;
$nilaiIpa = 6.7;
$nilaiBind = 9.3;

$rata2 = ($nilaiIpa + $nilaiBind + $niaiMtk) /3;
echo "Nilai Matematika : $niaiMtk <br>";  
echo "Nilai IPA : $nilaiIpa <br>";
echo "Nilai Bahasa Indonesia : $nilaiBind <br>";
echo "Rata-rata nilai : $rata2 <br>";
var_dump($rata2);
echo "<br>";
$isLulus = true;
$isUjian = false;
var_dump($isLulus);
echo "<br>";
var_dump($isUjian);
echo "<br>";
$namaDepan = "Asep";
$namaBelakang = "Towewew";
$namaLengkap = "$namaDepan $namaBelakang";
$namaLengkap2 = $namaDepan . ''. $namaBelakang;
echo "Nama Depan : $namaDepan <br>";
echo 'Nama Belakang : '.$namaBelakang. '<br>';
echo $namaLengkap;
echo "<br>";
$listMhs = ["Wahid Abdullah","Elmo Bachtiar","Lendis Fabri"];
echo $listMhs[0];
?>
