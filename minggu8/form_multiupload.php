<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Multiupload</title>
</head>
<body>
    <h2>Form Multiupload</h2>
    <form action="proses_upload.php" method="post" enctype="multipart/form-data">
            <input type="file" name="files[]" id="file" multiple="multiple" accept=".jpg, .jpeg, .png, .gif">
            <input type="submit" value="Unggah">
    </form>
</body>
</html>