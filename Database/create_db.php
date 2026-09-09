<?php

$host = readline("Enter MySQL host: ");
$username = readline("Enter MySQL username: ");
$password = readline("Enter MySQL password: ");
$dbName = readline("Enter database name: ");

$conn = new mysqli($host, $username, $password);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "CREATE DATABASE `$dbName`";

if ($conn->query($sql) === TRUE) {
    echo "Database created successfully!\n";
} else {
    echo "Error: " . $conn->error . "\n";
}

$conn->close();

?>