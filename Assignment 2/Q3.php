<!-- 3. Write a PHP program to check whether two given integers are in the range 40..50 inclusive, or they are both in the range 50..60 inclusive. -->

<?php
$a = 45;
$b = 48;

if (($a >= 40 && $a <= 50 && $b >= 40 && $b <= 50) ||
    ($a >= 50 && $a <= 60 && $b >= 50 && $b <= 60)) {
    echo "true";
} else {
    echo "false";
}
?>
