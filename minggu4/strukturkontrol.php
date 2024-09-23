<?php
$num = 92;

if ($num >=90 && $num <=100) {
    echo"Nilai huruf A";
}
else if ($num >= 80&& $num < 90) {
    echo "Nilai huruf B";
}
else if ($num >= 70&& $num < 80) {
    echo "Nilai huruf C";
}
else{
    echo "Nilai huruf D"; 
}

$jarakskrg = 0;
$jrktgt = 500;
$stepharian = 30;
$hari =0;

while ($jarakskrg < $jrktgt) {
    $jarakskrg += $stepharian;
    $hari++;
}
echo"<br>Atlet tersebut memerlukan $hari hari untuk mencapai 500 kilometer.<br>";

$jumlahlahan = 10;
$tanamper = 5;
$buahpert = 10;
$buah = 0;

for ($i=1; $i <= $jumlahlahan; $i++) { 
    $buah += ($tanamper*$buahpert);
}
echo "Jumlah buah yang akan dipanen adalah : $buah <br>";
$skorU = [85,92,78,96,88];
$tot = 0;

foreach ($skorU as $skor) {
    $tot += $skor;
}
echo "Total skor ujian adalah: $tot <br>";

$nilaiSis = [85,92,58,64,90,55,88,79,70,96];
foreach ($nilaiSis as $n) {
    if ($n < 60) {
        echo "Nilai : $n (Tidak lulus) <br>";
        continue;
    }
    echo "Nilai : $n (Lulus) <br>";
}
?>