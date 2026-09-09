<?php

$host = readline("Enter MySQL host: ");
$username = readline("Enter MySQL username: ");
$password = readline("Enter MySQL password: ");
$dbName = readline("Enter database name: ");
$tableName = readline("Enter table name: ");

$id = (int)readline("Enter student ID to update: ");
$name = readline("Enter new student name: ");
$age = (int)readline("Enter new student age: ");

$conn = new mysqli($host, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "UPDATE `$tableName`
        SET name = '$name', age = $age
        WHERE id = $id";

if ($conn->query($sql) === TRUE) {
    echo "Data updated successfully!\n";
} else {
    echo "Error: " . $conn->error . "\n";
}

$conn->close();

?>