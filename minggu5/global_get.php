<!-- <?php
$nama = @$_GET['nama'];
$usia = @$_GET['usia'];

echo "Halo $nama!,apakah benar anda berusia $usia tahun";
?> -->
<!-- <html>
    <body>
        <form method="post" action="<?php echo $_SERVER['PHP_SELF'];?>">
            Nama: <input type="text" name="fnama"><br>
            <input type="submit" value="Submit">
        </form>
        <?php
        if ($_SERVER['REQUEST_METHOD'] == 'POST') {
            $name = $_REQUEST['fnama'];
        if (empty($name)) {
            echo 'Name is required';
        }
        else{
            echo $name;
        }
        }
        ?>
    </body>
</html> -->
<?php
$x = 75;
$y = 25;
function add(){
    $GLOBALS['z'] = $GLOBALS['x'] + $GLOBALS['y'];
}
add();

echo "Nilai z = $z";
?>