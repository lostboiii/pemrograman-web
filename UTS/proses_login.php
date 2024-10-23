<?php
session_start();
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $username = $_POST["username"];
    $password = $_POST["password"];

    if($username == "admin" && $password == "Admin"){
        $_SESSION["username"] = $username;
        echo "Login berhasil";
    }else{
        echo "Login gagal";
    }
}
?>