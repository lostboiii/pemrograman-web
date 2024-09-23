<?php
$nilaiSis = [85,92,78,64,90,55,88,79,70,96];
$nilaiLulus =[];
foreach ($nilaiSis as $n) {
   if ($n >= 70) {
    $nilaiLulus[] = $n;
   }
  
}
echo "Daftar nilai siswa yang lulus : ". implode(", ", $nilaiLulus)."\n";

$daftarKar = [
    ['Alice',7],
    ['Bob',3],
    ['Charlie',9],
    ['David',5],
    ['Eva',6]
];
$karLimaTH = [];
foreach ($daftarKar as $k) {
    if ($k[1] > 5) {
        $karLimaTH[] = $k[0];
    }
}
echo  '<br>Daftar karyawan dengan pengalaman kerja lebih dari 5 tahun:'. implode(', ', $karLimaTH)."\n";

$daftarNil = [
    "Matematika" => [
        ["Alice",85],
        ["Bob",92],
        ["Charlie",78],
    ],
    "Fisika" => [
        ["Alice",90],
        ["Bob",88],
        ["Charlie",75],
    ],
    "Kimia" => [
        ["Alice",92],
        ["Bob",80],
        ["Charlie",85],
    ],
    ];
    $matKul = "Fisika";
    echo "<br>Daftar nilai mahasiswa dalam matakuliah $matKul: <br>";
    foreach ($daftarNil[$matKul] as $m) {
        echo "Nama  :".$m[0].": "."Nilai  :".$m[1]."<br>";
    }


$nilaiMat = [
    ["Alice",85],
    ["Bob",92],
    ["Charlie",78],
    ["David",64],
    ["Eva",90],
];
$total = 0;
$count = 0;
foreach ($nilaiMat as $nil) {
     $total += $nil[1];
     $count++; 
}
$rata = $total/$count;
echo "Daftar nilai matematika diatas rata-rata :<br>";  
foreach ($nilaiMat as $n) {
    if ($n[1]>$rata) {
        echo "Nama  :".$n[0].": "."Nilai  :".$n[1]."<br>";
    }
}
var_dump($rata)
?>