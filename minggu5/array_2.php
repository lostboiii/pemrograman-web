<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title></title>
</head>
<body>
   
   <?php
   $dosen = [
    'nama' => 'Elok Nur Hamdana',
    'domisili'=> 'malang',
    'jenis_kelamin' => 'Perempuan '
   ];
  ?>
  <table border="1" cellpadding = "20">
    <tr>
      <th bgcolor="grey">Nama</th>
      <td><?php echo $dosen['nama']?></td>
    </tr>
    <tr>
      <th bgcolor="grey">Domisili</th>
      <td><?php echo $dosen['domisili']?></td>
    </tr>
    <tr>
      <th bgcolor="grey">Jenis Kelamin</th>
      <td><?php echo $dosen['jenis_kelamin']?></td>
    </tr>
</table>
</body>
</html>