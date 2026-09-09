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

$count = (int)readline("Enter number of students: ");

for ($i = 1; $i <= $count; $i++) {

    $name = readline("Enter name of student $i: ");
    $age = (int)readline("Enter age of student $i: ");

    $sql = "INSERT INTO `$tableName` (name, age)
            VALUES ('$name', $age)";

    if ($conn->query($sql) === TRUE) {
        echo "Student $i inserted successfully!\n";
    } else {
        echo "Error: " . $conn->error . "\n";
    }
}

$conn->close();

?>