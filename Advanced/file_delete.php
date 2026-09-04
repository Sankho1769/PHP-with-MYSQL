<?php

$file = "uploads/photo.jpg";

if (file_exists($file)) {

    unlink($file);

    echo "File deleted successfully.";

} else {
    echo "File does not exist.";
}

?>