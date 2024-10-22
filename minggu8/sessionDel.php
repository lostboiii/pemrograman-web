<?php
session_start();
?>
<html>
    <body>
        <?php
        session_unset();
        session_destroy();
        echo "Session telah dihapus";
        ?>
    </body>
</html>