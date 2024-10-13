<?php
$input = $_POST["input"];
echo $input;
$email = $_POST["email"];
if(filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "<br>Email is valid.";
}else{
    echo "<br>Email is invalid.";
}

?>