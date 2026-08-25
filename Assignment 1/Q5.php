<!-- 5.	Write a PHP script to get the current file name. -->
<?php
echo "Current file name is: " . basename($_SERVER['PHP_SELF']);
?>