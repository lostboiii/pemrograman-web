<?php
$connect = mysqli_connect("localhost","root","","prakwebdb");

if (mysqli_connect_errno()) {
    die("Error connecting to".mysqli_connect_error());
}
?>