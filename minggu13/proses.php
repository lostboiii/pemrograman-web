<?php
include('koneksi.php');

$connect = sqlsrv_connect($serverName, $connectionOptions);

$aksi = $_GET["aksi"];
$nama = $_POST["nama"];
$jenis_kelamin = $_POST["jenis_kelamin"];
$alamat = $_POST["alamat"];
$no_telp = $_POST["no_telp"];

if ($aksi == "tambah") {
    $query = "INSERT INTO anggota (nama, jenis_kelamin, alamat, no_telp) VALUES (?, ?, ?, ?)";
    $params = array($nama, $jenis_kelamin, $alamat, $no_telp);
    if(sqlsrv_query($connect, $query, $params)){
        header("Location: index.php");
        exit();
    }else{
        echo "Gagal menambahkan data: " . print_r(sqlsrv_errors(), true);
    }
    
}
else if($aksi == 'ubah'){
    if(isset($_POST['id'])){
        $id = $_POST['id'];
        $query = "UPDATE anggota SET nama=?, jenis_kelamin=?, alamat=?, no_telp=? WHERE id=?";
        $params = array($nama, $jenis_kelamin, $alamat, $no_telp, $id);
        if(sqlsrv_query($connect, $query, $params)){
            header("Location: index.php");
            exit();
        }else{
            echo "Gagal mengubah data: " . print_r(sqlsrv_errors(), true);
        }
    }
}
else if($aksi == 'hapus'){
    if(isset($_GET['id'])){
        $id = $_GET['id'];
        $query = "DELETE FROM anggota WHERE id=?";
        $params = array($id);
        if(sqlsrv_query($connect, $query, $params)){
            header("Location: index.php");
            exit();
        }else{
            echo "Gagal menghapus data: " . print_r(sqlsrv_errors(), true);
        }
    }
}
sqlsrv_close($connect);
?>