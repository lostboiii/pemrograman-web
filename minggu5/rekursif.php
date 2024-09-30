<?php
// function helowod(){
//     echo "Hello World";
//     helowod();
// }

// helowod(); 

function tampilAngka(int $jumlah, int $i = 1){
    echo "perulangan ke-$i <br>";
    if($i < $jumlah){
        tampilAngka($jumlah, $i+1);
    }
   
}
tampilAngka(20);
?>