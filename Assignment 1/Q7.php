<!-- 7.	Write a PHP script, to check whether the page is called from 'https' or 'http' -->

<?php

if (isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on') {
    echo "The page is called using HTTPS";
} else {
    echo "The page is called using HTTP";
}

?>