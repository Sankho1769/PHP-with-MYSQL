<!-- 1. Write a PHP program to check whether three given integer values are in the range 20..50 inclusive. Return true if 1 or more of them are in the said range otherwise false. -->

<?php
$a = 10;
$b = 25;
$c = 60;

$result = (($a >= 20 && $a <= 50) ||
           ($b >= 20 && $b <= 50) ||
           ($c >= 20 && $c <= 50));

echo $result ? "true" : "false";
?>
