<?php

$host = readline("Enter MySQL host: ");
$username = readline("Enter MySQL username: ");
$password = readline("Enter MySQL password: ");
$dbName = readline("Enter database name: ");
$tableName = readline("Enter table name: ");

$id = (int)readline("Enter student ID to delete: ");

$conn = new mysqli($host, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "DELETE FROM `$tableName` WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data deleted successfully!\n";
} else {
    echo "Error: " . $conn->error . "\n";
}

$conn->close();

?>