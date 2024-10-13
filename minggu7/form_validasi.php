<html lang="en">
<head>
    <title>Form Validasi</title>
    <script src="jquery-3.7.1.js"></script>
</head>
<body>
    <h1>Form Validasi</h1>
    <form id="myForm">
        <label for="nama">Nama:</label>
        <input type="text" name="nama" id="nama">
        <span id="nama-error" style="color: red;"></span><br>
        <br>
        <label for="email">Email:</label>
        <input type="text" name="email" id="email">
        <span id="email-error" style="color: red;"></span><br>
        <br>
        <label for="password">Password:</label>
        <input type="password" name="password" id="password">
        <span id="password-error" style="color: red;"></span><br>
        <br>
        <input type="submit" value="Submit">
    </form>
    <div id="hasil">
        
    </div>
    <script>
        $(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();
                var nama = $("#nama").val();
                var email = $("#email").val();
                var password = $("#password").val();
                var valid = true;
                if(nama === ""){
                    $("#nama-error").text("Nama tidak boleh kosong");
                    valid = false;
                }else{
                    $("#nama-error").text("");
                }
                if(email === ""){
                    $("#email-error").text("Email tidak boleh kosong");
                    valid = false;
                }else{
                    $("#email-error").text("");
                }
                if(password === ""){
                    $("#password-error").text("Password tidak boleh kosong");
                    valid = false;
                }else{
                    $("#password-error").text("");
                }
                if(!valid){
                    event.preventDefault();
                }
                var formData = $("#myForm").serialize();
                $.ajax({
                    url: "proses_validasi.php",
                    type: "POST",
                    data: formData,
                    success: function(response){
                        $("#hasil").html(response);
                    }
                });
            });
        })
    </script>
</body>
</html>