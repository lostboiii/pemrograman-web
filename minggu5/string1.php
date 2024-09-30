<?php
$lorem = "lorem ipsum dolor sit amet non proident et just sed diam non pro eu fugiat null et ullamcorper suscipit et urna pariatur et ullamcorper suscipit et urna pariatur et urna pariatur et urna pariatur et urna pariatur";

echo "<p>{$lorem}</p>";
echo "Panjang karakter".strlen($lorem)."<br/>";
echo "Panjang kata".str_word_count($lorem)."<br/>";
echo "<p>". strtoupper($lorem)."</p>";
echo "<p>". strtolower($lorem)."</p>";
?>