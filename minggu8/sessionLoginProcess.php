<?php
$username = $_POST['username'];
$password = $_POST['password'];

if ($username == 'admin' && $password == '1234') {
    session_start();
    $_SESSION['username'] = $username;
    $_SESSION['status'] = "login";
    echo "Anda berhasil login, Silahka menuju <a href='homeSession.php'>halaman Home</a>";
} else {
    echo "Gagal login, silahkan <a href='sessionLoginForm.html'>login kembali</a>";
}
?>