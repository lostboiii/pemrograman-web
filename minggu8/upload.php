<?php  
if(isset($_POST['submit'])){
    $target_dir = "uploads/";
    $target_file = $target_dir . basename($_FILES['file']['name']);
    $filetype = strtolower(pathinfo($target_file, PATHINFO_EXTENSION));
    $allowedExtensions = array("txt", "pdf", "docx", "doc");
    $maxsize = 3 * 1024 * 1024;
    if(in_array($filetype, $allowedExtensions) && $_FILES['file']['size'] <= $maxsize){
        if(move_uploaded_file($_FILES['file']['tmp_name'], $target_file)){
            // $image_info = getimagesize($target_file);   
            // if($image_info !== false) {
                echo "Berhasil upload file";
                // echo "<h3>Uploaded Image Thumbnail:</h3>";
                // echo "<img src='" . $target_file . "' width='200' height='auto' alt='Uploaded Image'>";
            } else {
                echo "Gagal upload file";
            }
        } else {
            echo "Gagal upload file";
        }
    }

?>
