<?php
$pesan = "Saya arek malang";
$perkata = explode(" ", $pesan);
$perkata = array_map(fn($pesan)=> strrev($pesan),$perkata);
$pesan = implode(" ", $perkata);
echo  $pesan."<br/>";
?>