<?php
include 'auth.php';
?>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf_token" content="<?=$_SESSION['csrf_token']?>">
    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script src="jquery-3.7.1.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    <!-- DataTables CSS -->
    <link rel="stylesheet" href="//cdn.datatables.net/2.1.8/css/dataTables.dataTables.min.css">
    <!-- DataTables Bootstrap CSS -->
    <link rel="stylesheet" href="https://cdn.datatables.net/1.10.21/css/dataTables.bootstrap4.min.css">
    
    <title>Data Anggota</title>
</head>
<body>
<nav class="navbar navbar-dark bg-primary">
    <a href="index.php" class="navbar-brand" style="color:#fff">
        CRUD Dengan AJAX
    </a>
</nav>
<div class="container">
    <h2 align="center" style="margin:30px">Data Anggota</h2>

    <form method="post" class="form-data" id="form-data">
        <div class="row">
            <div class="col-sm-9">
                <div class="form-group">
                    <label for="nama">Nama</label>
                    <input type="hidden" name="id" id="id">
                    <input type="text" class="form-control" id="nama" name="nama" required>
                    <p class="text-danger" id="err_nama"></p>
                </div>
            </div>
            <div class="col-sm-3">
                <div class="form-group">
                    <label for="jenis_kelamin"></label><br>
                    <input type="radio" class="form-check-input" id="jenkel1" name="jenis_kelamin" value="L" required> Laki-laki
                    <input type="radio" class="form-check-input" id="jenkel2" name="jenis_kelamin" value="P"> Perempuan
                </div>
                <p class="text-danger" id="err_jenis_kelamin"></p>
            </div>
        </div>
        <div class="form-group">
            <label for="alamat">Alamat</label>
            <textarea name="alamat" id="alamat" class="form-control" required="true"></textarea>
            <p class="text-danger" id="err_alamat"></p>
        </div>
        <div class="form-group">
            <label for="no_telp">No. Telp</label>
            <input type="number" class="form-control" id="no_telp" name="no_telp" required>
            <p class="text-danger" id="err_no_telp"></p>
        </div>
        <div class="form-group">
            <button type="submit" class="btn btn-primary" name="simpan" id="simpan"><i class="fa fa-save"></i>Simpan Data</button>
        </div>
    </form>
</div>
<div class="data">

</div>
<div class="text-center">@<?php echo date('Y');?>Copyright:
<a href="https://google.com/">Desain Dan Pemrograman Web</a></div>

    
    <!-- DataTables JS CDN -->
    <script src="//cdn.datatables.net/2.1.8/js/dataTables.min.js"></script>
    <!-- DataTables JS Bootstrap Integration -->
    <script src="https://cdn.datatables.net/1.10.21/js/dataTables.bootstrap4.min.js"></script>
    <!-- Custom JS -->
     <script type="text/javascript">
        $(function(){
        $("#simpan").click(function(){
            var data = $('.form-data').serialize();
            var jenkel1 = $("#jenkel1").val();
            var jenkel2 = $("#jenkel2").val();
            var nama = $("#nama").val();
            var alamat = $("#alamat").val();
            var no_telp = $("#no_telp").val();
            var valid = true;
            if(nama == ''){
                $("#err_nama").html("Nama harus diisi!");
                valid = false;
            }
            else{
                $("#err_nama").html("");
            }
            if(jenkel1 == '' && jenkel2 == ''){
                $("#err_jenis_kelamin").html("Jenis kelamin harus dipilih!");
                valid = false;
            }
            else{
                $("#err_jenis_kelamin").html("");
            }
            if(alamat == ''){
                $("#err_alamat").html("Alamat harus diisi!");
                valid = false;
            }
            else{
                $("#err_alamat").html("");
            }
            if(no_telp == ''){
                $("#err_no_telp").html("No. Telp harus diisi!");
                valid = false;
            }
            else{
                $("#err_no_telp").html("");
            }
            if(valid){
                $.ajax({
                    url: "form_action.php",
                    type: "POST",
                    data: data,
                    success: function(response){
                        $('.data').load('data.php');
                        $('#id').val();
                        $('.form-data').reset();

                    }, error: function(response){
                        console.log(response,responseText);
                    } 
                });
            }
        });
            $.ajaxSetup({
                headers: {
                    'X-CSRF-Token': $('meta[name="csrf_token"]').attr('content')
                }
            })
            $('.data').load('data.php');
        })
     </script>
</body>
</html>