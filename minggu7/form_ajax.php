<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <script src="jquery-3.7.1.js"></script>
    <title>From dengan PHP</title>
</head>
<body>
    <h2>Form contoh</h2>
    <form id="myForm">
        <label for="buah" id="buah">Pilih Buah:</label>
        <select name="buah" id="buah">
            <option value="apel">Apel</option>
            <option value="pisang">Pisang</option>
            <option value="mangga">Mangga</option>
            <option value="jeruk">Jeruk</option>
        </select>
        <br>
        <label for="">Pilih warna favorit</label><br>
        <input type="checkbox" name="warna[]" value="merah">Merah <br>
        <input type="checkbox" name="warna[]" value="biru">Biru <br>
        <input type="checkbox" name="warna[]" value="hijau">Hijau <br>

        <br>

        <label for="">Pilih Jenis Kelamin:</label><br>
        <input type="radio" name="jenis_kelamin" value="Laki-laki">Laki-laki <br>
        <input type="radio" name="jenis_kelamin" value="Perempuan">Perempuan <br>
        <br>

        <input type="submit" value="Submit">
    </form>
    <div id="hasil">

    </div>
    <script>
        $(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();

                var formData = $("#myForm").serialize();

                $.ajax({
                    url: "proses_lanjut.php",
                    type: "POST",
                    data: formData,
                    success: function(response){
                        $("#hasil").html(response);
                    }
                });
            });
        });
    </script>
</body>
</html>