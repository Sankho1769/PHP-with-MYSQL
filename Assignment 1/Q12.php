<!-- 12.	Write a PHP script to get the last occurred error. -->

<?php

echo $abc;

$error = error_get_last();

echo "<pre>";
print_r($error);
echo "</pre>";

?>