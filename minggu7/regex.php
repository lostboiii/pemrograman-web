<?php
//no 9
// $pattern = '/[a-z]/';
// $text = 'This is a sample text';

// if (preg_match($pattern, $text)) {
//     echo 'huruf kecil ditemukan';
// } else {
//     echo 'huruf kecil tidak ditemukan';
// }
// no 10
// $pattern = '/^[0-9]+/';
// $text = 'there are 123 apples';
// if (preg_match($pattern, $text, $matches)) {
//     echo "Cocokkan : ". $matches[0];
// } else {
//     echo 'Tidak cocok';
// }
// //no 11
// $pattern = '/apple/';
// $replacement = 'banana';
// $text = 'i like apple pie';
// $newtext = preg_replace($pattern, $replacement, $text);
// echo $newtext;
//no 12
$pattern = '/[o]{1,3}/';
$text = 'god is good';
if (preg_match($pattern, $text, $matches)) {
  echo "Cocokkan : ". $matches[0];
} else {
    echo 'Tidak cocok';
}
?>