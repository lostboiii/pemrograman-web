<?php
if($_SERVER["REQUEST_METHOD"] == "POST"){
    $nama = $_POST["nama"];
    $email = $_POST["email"];
    $password = $_POST["password"];
    $error = array();

    if(empty($nama)){
        $error[] = "Nama tidak boleh kosong";
    }
    if(empty($email)){
        $error[] = "Email tidak boleh kosong";
    }elseif(!filter_var($email,FILTER_VALIDATE_EMAIL)){
        $error[] = "Format email tidak valid";
    }
    if(empty($password)){
        $error[] = "Password tidak boleh kosong";
    }elseif(strlen($password) < 8){
        $error[] = "Password minimal 8 karakter";
    }
    if(!empty($error)){
        foreach ($error as $err) {
            echo $err . "<br>";
        }
    }else{
        echo "Data berhasil dikirim : Nama : " . $nama . "<br> Email : " . $email;
    }
}
?>