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

$sql = "SELECT COUNT(*) AS total FROM `$tableName`";
$result = $conn->query($sql);

if ($result) {
    $row = $result->fetch_assoc();

    echo "\nTotal number of records: " . $row["total"] . "\n";
} else {
    echo "Error: " . $conn->error . "\n";
}

$conn->close();

?>