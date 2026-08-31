<!-- 7. Write a PHP program to check whether a given string starts with "F" or ends with "B". If the string starts with "F" return "Fizz" and return "Buzz" if it ends with "B" If the string starts with "F" and ends with "B" return "FizzBuzz". In other cases return the original string. -->

<?php
$str = "FAB";

$startsWithF = ($str[0] == 'F');
$endsWithB = ($str[strlen($str) - 1] == 'B');

if ($startsWithF && $endsWithB) {
    echo "FizzBuzz";
} elseif ($startsWithF) {
    echo "Fizz";
} elseif ($endsWithB) {
    echo "Buzz";
} else {
    echo $str;
}
?>