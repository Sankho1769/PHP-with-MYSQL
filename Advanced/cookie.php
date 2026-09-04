<?php

setcookie("username", "Shankho", time() + 3600);

if (isset($_COOKIE["username"])) {

    echo "Welcome " . $_COOKIE["username"];

} else {

    echo "Cookie created. Refresh the page.";

}

?>