<?php

$student = [
    "name" => "Shankho",
    "course" => "BCA",
    "year" => 3
];

$jsonData = json_encode($student);

echo "JSON Data:<br>";
echo $jsonData;

// We can also do the reverse

// $jsonData = '{"name":"Shankho","course":"BCA","year":3}';

// $student = json_decode($jsonData, true);

// echo "Name: " . $student["name"];
// echo "<br>";
// echo "Course: " . $student["course"];
// echo "<br>";
// echo "Year: " . $student["year"];

?>