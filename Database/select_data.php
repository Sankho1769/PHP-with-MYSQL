<?php

$host = readline("Enter MySQL host: ");
$username = readline("Enter MySQL username: ");
$password = readline("Enter MySQL password: ");
$dbName = readline("Enter database name: ");
$tableName = readline("Enter table name: ");

$conn = new mysqli($host, $username, $password, $dbName);

if ($conn->connect_error) {
    die("Connection failed: " . $conn->connect_error);
}

$sql = "SELECT * FROM `$tableName`";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "\nStudent Details:\n";

    while ($row = $result->fetch_assoc()) {
        echo "ID: " . $row["id"] . "\n";
        echo "Name: " . $row["name"] . "\n";
        echo "Age: " . $row["age"] . "\n";
        echo "-----------------\n";
    }
} else {
    echo "No records found.\n";
}

$conn->close();

?>