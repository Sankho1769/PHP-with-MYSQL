<?php

$file = "notes.txt";

// Open the file for writing
$handle = fopen($file, "w");

// Write data
fwrite($handle, "Hello! I am learning PHP File Handling.");

// Close the file
fclose($handle);

echo "Data written successfully.";

?>