    <html>
        <head>
        <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css" integrity="sha384-B0R+wY81Q29xVfL89J6cB0xIM+BSUhw6d6iXa" crossorigin="anonymous">
    <!-- Font Awesome -->
     
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css" integrity="sha384-DyZv1g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g5g" crossorigin="anonymous">
        </head>
        <body>
        <table id="example" class="table table-striped table-bordered" style="width:100%">
            <thead>
                <tr>
                    <th>No</th>
                    <th>Nama</th>
                    <th>Jenis Kelamin</th>
                    <th>Alamat</th>
                    <th>No. Telp</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                <?php
                include 'koneksi.php';
                $no = 1;
                $query = "SELECT * FROM anggota order by id desc";
                $sql = $dbl->prepare($query);
                $sql->execute();
                $result = $sql->get_result();

                if($result->num_rows > 0){
                    while($row = $result->fetch_assoc()){
                        $id = $row['id'];
                        $nama = $row['nama'];
                        $jenis_kelamin = ($row['jenis_kelamin']== 'L')? 'laki-laki': 'Perempuan';
                        $alamat = $row['alamat'];
                        $no_telp = $row['no_telp'];
                        ?>
                        <tr>
                            <td><?=$no++?></td>
                            <td><?=$nama?></td>
                            <td><?=$jenis_kelamin?></td>
                            <td><?=$alamat?></td>
                            <td><?=$no_telp?></td>
                            <td>
                            <button class="btn btn-success btn-sm edit_data" id="<?=$id?>"><i class="fa fa-edit"></i>Edit</button>
                            <button class="btn btn-danger btn-sm hapus_data" id="<?=$id?>"><i class="fa fa-trash"></i>Hapus</button>
                            </td>
                        </tr>
                        <?php
                    }
                } else{
                    ?>
                    <tr>
                        <td colspan="6" align="center">Data Kosong</td>
                    </tr>
                    <?php
                }
                ?>
            </tbody>
        </table>
        <script type="text/javascript">
            $(function() {
                $('#example').DataTable();
            
            function reset(){
                $('#err_nama').html('');
                $('#err_jenis_kelamin').html('');
                $('#err_alamat').html('');
                $('#err_no_telp').html('');
            }
        $(document).on('click', '.edit_data', function(){
        var id = $(this).attr('id');
        $.ajax({
        type: "POST",
        url: "get_data.php",
        data: {id: id},
        dataType: "json",
        success: function(response){
            reset();
            $('#id').val(response.id);
            $('#nama').val(response.nama);
            $('#alamat').val(response.alamat);
            $('#no_telp').val(response.no_telp);
            if (response.jenis_kelamin == "L") {
                $('#jenkel1').prop('checked', true);
            } else {
                $('#jenkel2').prop('checked', true);
            }
        },
        error: function(response){
            console.log(response.responseText);
        }
    });
});
$(document).on('click', '.hapus_data',function(){
var id = $(this).attr('id');
        $.ajax({
            url: "hapus_data.php",
            type: "POST",
            data: {id: id},
            success: function(response){
                $('.data').load('data.php');
            },
            error: function(response){
                console.log(response.responseText);
            }
        });
})
});
        </script>
        </body>
    </html>
