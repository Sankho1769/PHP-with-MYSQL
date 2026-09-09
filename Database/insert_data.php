<?php

$host = readline("Enter MySQL host: ");
$username = readline("Enter MySQL username: ");
$password = readline("Enter MySQL password: ");
$dbName = readline("Enter database name: ");
$tableName = readline("Enter table name: ");

$name = readline("Enter student name: ");
$age = readline("Enter student age: ");

$conn = new mysqli($host, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `$tableName` (name, age) VALUES ('$name', $age)";

if ($conn->query($sql) === TRUE) {
    echo "Data inserted successfully!\n";
} else {
    echo "Error: " . $conn->error . "\n";
}

$conn->close();

?>