<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
</head>
<body>
    <form action="upload.php" method="post" enctype="multipart/form-data">
        Select image to upload:
        <input name="myfile" type="file">
        <input type="submit" value="Upload Image" name="submit">
    </form>
</body>
</html>


<?php
// name -> Original name of uploaded file.
// tmp_name -> Path to temporary server copy.
// type -> Mime type of the file.
// size -> File size in bytes.
// error -> Error code
?>