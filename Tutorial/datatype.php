<?php

// ==========================================
// 1. STRING
// ==========================================

$name = "Shankho";

echo "STRING:<br>";
var_dump($name);
echo "<br><br>";


// ==========================================
// 2. INTEGER
// ==========================================

$age = 20;

echo "INTEGER:<br>";
var_dump($age);
echo "<br><br>";


// ==========================================
// 3. FLOAT
// ==========================================

$price = 99.99;

echo "FLOAT:<br>";
var_dump($price);
echo "<br><br>";


// ==========================================
// 4. BOOLEAN
// ==========================================

$isStudent = true;

echo "BOOLEAN:<br>";
var_dump($isStudent);
echo "<br><br>";


// ==========================================
// 5. ARRAY
// ==========================================

$subjects = ["Java", "PHP", "MySQL", "DSA"];

echo "ARRAY:<br>";
var_dump($subjects);
echo "<br><br>";


// ==========================================
// 6. ASSOCIATIVE ARRAY
// ==========================================

$student = [
    "name" => "Shankho",
    "age" => 20,
    "course" => "BCA"
];

echo "ASSOCIATIVE ARRAY:<br>";
var_dump($student);
echo "<br><br>";


// ==========================================
// 7. NULL
// ==========================================

$address = null;

echo "NULL:<br>";
var_dump($address);
echo "<br><br>";


// ==========================================
// 8. OBJECT
// ==========================================

class Student
{
    public $name = "Shankho";
}

$studentObject = new Student();

echo "OBJECT:<br>";
var_dump($studentObject);
echo "<br><br>";


// ==========================================
// 9. RESOURCE
// ==========================================

$file = fopen("test.txt", "w");

echo "RESOURCE:<br>";
var_dump($file);

fclose($file);

?>