<!-- 2. Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal. -->
 
<?php
$a = 90;
$b = 110;

if ($a == $b) {
    echo 0;
} elseif (abs(100 - $a) < abs(100 - $b)) {
    echo $a;
} else {
    echo $b;
}
?>
