<?php
header('Content-Type: application/json');

if(empty($_SESSION['csrf_token'])){
    $_SESSION['csrf_token'] = bin2hex(random_bytes(32));
}

$headers = apache_request_headers();
if(isset($headers['Csrf_token'])){
    if($headers['Csrf_token']!== $_SESSION['csrf_token']){
        die(json_encode(['message' => 'Invalid CSRF token']));
    }
    else{
        exit(json_encode(['error'=>'Invalid CSRF token']));
    }
}
?>