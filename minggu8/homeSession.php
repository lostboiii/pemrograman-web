<html>
    <head>
        <title>Halaman Home</title>
    </head>
    <body>
        <?php
        session_start();
        if($_SESSION['status'] == "login") {
            echo "Selamat Datang ".$_SESSION['username'];
            ?>
            <a href="sessionLogout.php">Logout</a>
            <?php
        } else {
            echo "Anda belum login";
            ?>
            <a href="sessionLoginForm.html">Login</a>
        <?php
        
        }
        ?>
    </body>
</html>