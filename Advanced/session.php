<?php

// Start the session
session_start();

// Store data in the session
$_SESSION["username"] = "Shankho";
$_SESSION["course"] = "BCA";

// Display session data
echo "Username: " . $_SESSION["username"];
echo "<br>";
echo "Course: " . $_SESSION["course"];

//Destroy
// session_start();

// $_SESSION["username"] = "Shankho";

// echo "Before logout: " . $_SESSION["username"];

// session_destroy();

// echo "<br>Session destroyed.";

?>