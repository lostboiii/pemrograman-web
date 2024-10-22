<?php
if(isset($_FILES['file'])){
    $errors = array();
    $file_name = $_FILES['file']['name'];
    $file_size = $_FILES['file']['size'];
    $file_tmp = $_FILES['file']['tmp_name'];
    $file_type = $_FILES['file']['type'];
    @$file_ext = strtolower("".end(explode('.', $_FILES['file']['name']))."");
    $extensions = array("png", "jpg", "jpeg");

    if(in_array($file_ext, $extensions) === false){
        $errors[] = "Ekstensi file tidak diizinkan, silahkan pilih file lain";  
    }

    if($file_size > 2097152){
        $errors[] = 'Ukuran file tidak boleh lebih dari 2 MB';
    }

    if(empty($errors)){
        move_uploaded_file($file_tmp, "uploads/" . $file_name);
        echo "Berhasil upload file";
    }
    else{
        echo implode("<br>", $errors);
    }
}
?>