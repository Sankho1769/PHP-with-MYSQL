<!-- 8. Write a PHP program to insert a given string into middle of the another given string of length 4. -->

<?php
$str = "ABCD";
$insert = "XY";

$middle = strlen($str) / 2;
$result = substr($str, 0, $middle) . $insert . substr($str, $middle);

echo $result;
?>
