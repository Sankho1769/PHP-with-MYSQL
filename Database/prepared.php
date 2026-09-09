<?php

$host = readline("Enter MySQL host: ");
$username = readline("Enter MySQL username: ");
$password = readline("Enter MySQL password: ");
$dbName = readline("Enter database name: ");
$tableName = readline("Enter table name: ");

$name = readline("Enter student name: ");
$age = (int)readline("Enter student age: ");

$conn = new mysqli($host, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "INSERT INTO `$tableName` (name, age) VALUES (?, ?)";

$stmt = $conn->prepare($sql);

$stmt->bind_param("si", $name, $age);

if ($stmt->execute()) {
    echo "Data inserted successfully!\n";
} else {
    echo "Error: " . $stmt->error . "\n";
}

$stmt->close();
$conn->close();

?>