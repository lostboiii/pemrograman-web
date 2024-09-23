<?php
$beli = 120000;
$diskon = (20/100);
if ($beli > 100000) {
    $total = $beli -($beli * $diskon);
    echo "Total yang harus dibayar: Rp. ". number_format($total, 2);
}
else{
    $total = $beli;
    echo "Tidak ada diskon. Total yang harus dibayar: Rp. ". number_format($total, 2);
}
echo "<br>Program selesai";
?>