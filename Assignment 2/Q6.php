<!-- 6. Write a PHP program to check a specified number is present in a given array of integers. -->

<?php
$arr = array(10, 20, 30, 40, 50);
$num = 30;

if (in_array($num, $arr)) {
    echo "Present";
} else {
    echo "Not Present";
}
?>
