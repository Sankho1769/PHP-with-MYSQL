<!-- 4. Write a PHP program to convert the last 3 characters of a given string in upper case. If the length of the string has less than 3 then uppercase all the characters. -->

<?php
$str = "hello";

if (strlen($str) < 3) {
    echo strtoupper($str);
} else {
    echo substr($str, 0, -3) . strtoupper(substr($str, -3));
}
?>
