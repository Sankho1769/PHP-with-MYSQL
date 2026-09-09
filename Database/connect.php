<?php

$host = readline("Enter MySQL host: ");
$username = readline("Enter MySQL username: ");
$password = readline("Enter MySQL password: ");

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

echo "MySQL connection successful!\n";

$conn->close();

?>