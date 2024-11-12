<?php
function antiinjection($koneksi,$data){
    $filtersql  = mysqli_real_escape_string($koneksi,stripcslashes(strip_tags(htmlspecialchars($data, ENT_QUOTES))));
    return $filtersql;
}
?>