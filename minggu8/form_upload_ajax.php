<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Form Upload Ajax</title>
    <link rel="stylesheet" href="upload.css">
</head>
<body>
    <div class="upload-form-container">
        <h2>Upload File Dokumen</h2>
        <form id="uploadForm" action="upload_ajax.php" method="post" enctype="multipart/form-data">
            <div class="file-input-container">
                <input type="file" name="file" id="file" class="file-input">
                <label for="file" class="file-label">Pilih file</label>
            </div>
            <button type="submit" class="upload-button" name="submit" id="upload-button" disabled>Unggah</button>
        </form>
        <div id="status" class="upload-status">

        </div>
    </div>
    <script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
    <script src="upload.js"></script>