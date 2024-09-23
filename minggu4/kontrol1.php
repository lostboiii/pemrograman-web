<?php
$nilai = [85, 92, 78, 64, 90, 75, 88, 79, 70, 96];
sort($nilai);
$nilai_terpilih = array_slice($nilai, 2, 6); 
$total_nilai = array_sum($nilai_terpilih);
$rata_rata = $total_nilai / count($nilai_terpilih);
echo "rata-rata kelas :$rata_rata";
?>