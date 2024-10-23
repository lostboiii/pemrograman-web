<html>
    <head>
        <title>Login</title>
        <link rel="stylesheet" href="bootstrap-5.3.3-dist/css/bootstrap.min.css">
        <script src="bootstrap-5.3.3-dist/js/bootstrap.bundle.min.js"></script>
        <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
        <style>
            body{
                background-color: lightblue;
            }
              .form-group span {
        display: block;
        margin-top: 5px;
        margin-bottom: 10px;
            }
        </style>
    </head>
    <body>
        <nav class="navbar navbar-expand-lg navbar-light bg-primary">
            <div class="container">
                <a class="navbar-brand ms-5" href="#">Laundry XYZ</a>
            </div>
        </nav>
        <div class="container" style="width: 500px; border: 1px solid black; padding: 20px; margin: 20 auto; border-radius: 10px; background-color: #f8f9fa;">
            <div class="row">
                <div class="col-md-12">
                    <img src="img/aku bang kryu.jpg" alt="Login Image" class="img-fluid" style="max-height: 400px; display: flex; margin: 0 auto;">
                    <h5 style="text-align: center;" class="mt-3">Silahkan Login</h5>
                    <form id="myForm"method="post">
                        <div class="form-group">    
                            <label for="username">Username</label>
                            <input type="text" name="username" id="username" class="form-control" placeholder="Username" >
                            <span id="username-error" style="color: red;"></span>
                    
              
                            <label for="password">Password</label>
                            <input type="password" name="password" id="password" class="form-control" placeholder="Password" >
                            <span id="password-error" style="color: red;"></span>
                        </div>
                        <div id="hasil" class="mt-3 alert" style="display: none;"></div>
                        <input type="submit" value="Login" class="btn btn-primary" style="width: 100%; margin-top:30px; ">
                    </form>
                </div>
            </div>
        </div>

    </body>
    <script>
        $(function(){
            $("#myForm").submit(function(event){
                event.preventDefault();
                var username = $("#username").val();    
                var password = $("#password").val();
                var valid = true;

          
                $("#username-error").text("");
                $("#password-error").text("");

               
                if(username === ""){
                    $("#username-error").text("Username tidak boleh kosong");
                    valid = false;
                }

                
                if(password === ""){
                    $("#password-error").text("Password tidak boleh kosong");
                    valid = false;
                } else if(password.length >= 6){
                    $("#password-error").text("Password maksimal 6 karakter");
                    valid = false;
                } else if(!/[a-z]/.test(password) || !/[A-Z]/.test(password)){
                    $("#password-error").text("Password harus mengandung huruf besar dan kecil");
                    valid = false;
                }

                
                if(valid){
                    var formData = $(this).serialize();
                    $.ajax({
                        url: "proses_login.php",
                        type: "POST",
                        data: formData,
                        success: function(response){
                         
                            window.location.href = "home.php";
                        },
                        error: function(){
                            $("#hasil").html("Error occurred while logging in.").show();
                        }
                    });
                }
            });
        });
    </script>
</html>
