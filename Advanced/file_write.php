<?php

$file = "students.txt";

$handle = fopen($file, "w");

fwrite($handle, "Name: Shankho\n");
fwrite($handle, "Course: BCA\n");
fwrite($handle, "Year: 3rd Year\n");

fclose($handle);

echo "Student information saved successfully.";

?>