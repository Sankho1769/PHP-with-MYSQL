<!-- 10. Write a PHP program to rotate the elements of a given array of integers (length 4) in left direction and return the new array. -->

<?php
$arr = array(1, 2, 3, 4);

$first = array_shift($arr);
$arr[] = $first;

echo "[" . implode(", ", $arr) . "]";
?>
