<!-- 9. Write a PHP program to create a new string from two given string one is shorter and another is longer. The format of the new string will be long string + short string + long string. -->

<?php
$long = "Hello";
$short = "Hi";

$result = $long . $short . $long;

echo $result;
?>
