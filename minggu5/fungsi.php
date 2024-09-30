<?php
function perkenalan($nama,$salam = "Assalamualaikum"){
    echo $salam,", ";
    echo "Perkenalkan, Nama saya ".$nama."<br />";
    echo "Senang berkenalan dengan kalian<br />";
    echo "Umur saya adalah ".hitungUmur(2005, 2024). " tahun<br />";
}
function hitungUmur($thn_lhr, $thn_skrg) {
    $umur = $thn_skrg - $thn_lhr;
    return $umur;
}
// perkenalan("Asep","hai");
// echo "<br />";
//     $saya = "Elok";
//     $Usalam = "Selamat pagi";
    perkenalan("Asep");

   
?>