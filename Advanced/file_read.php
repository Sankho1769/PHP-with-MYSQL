<?php

$file = "notes.txt";

$handle = fopen($file, "r");

$content = fread($handle, filesize($file));

fclose($handle);

echo $content;

// // $content = file_get_contents("notes.txt");

// echo $content;

?>