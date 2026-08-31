<!-- 5. Write a PHP program to count the string "aa" in a given string and assume "aaa" contains two "aa". -->

<?php
$str = "aaabaa";
$count = 0;

for ($i = 0; $i < strlen($str) - 1; $i++) {
    if ($str[$i] == 'a' && $str[$i + 1] == 'a') {
        $count++;
    }
}

echo $count;
?>
