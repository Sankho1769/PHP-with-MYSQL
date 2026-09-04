<?php

if (isset($_POST["upload"])) {

    $fileName = $_FILES["myfile"]["name"];
    $tempName = $_FILES["myfile"]["tmp_name"];

    move_uploaded_file($tempName, "uploads/" . $fileName);

    echo "File uploaded successfully!";
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>File Upload</title>
</head>

<body>

<h2>Upload a File</h2>

<form method="POST" enctype="multipart/form-data">

    <input type="file" name="myfile">

    <br><br>

    <button type="submit" name="upload">
        Upload
    </button>

</form>

</body>
</html>