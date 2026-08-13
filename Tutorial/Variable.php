<?php

// 1. STRING
$name = "Shankho";

echo "String: ";
echo $name;
echo "<br>";


// 2. INTEGER
$age = 20;

echo "Integer: ";
echo $age;
echo "<br>";


// 3. FLOAT / DOUBLE
$height = 5.8;

echo "Float: ";
echo $height;
echo "<br>";


// 4. BOOLEAN
$isStudent = true;

echo "Boolean: ";

if ($isStudent) {
    echo "true";
} else {
    echo "false";
}

echo "<br>";


// 5. ARRAY
$subjects = ["Java", "PHP", "MySQL", "DSA"];

echo "Array: ";
echo $subjects[0]; // Java
echo "<br>";


// 6. ASSOCIATIVE ARRAY
$student = [
    "name" => "Shankho",
    "age" => 20,
    "course" => "BCA"
];

echo "Associative Array: ";
echo $student["course"];
echo "<br>";


// 7. NULL
$address = null;

echo "Null: ";
var_dump($address);
echo "<br>";


// 8. OBJECT
class Student
{
    public $name;

    public function sayHello()
    {
        echo "Hello, my name is " . $this->name;
    }
}

$studentObject = new Student();
$studentObject->name = "Shankho";

echo "Object: ";
$studentObject->sayHello();
echo "<br>";


// 9. RESOURCE
$file = fopen("test.txt", "w");

echo "Resource: ";
var_dump($file);

fclose($file);


// 10. CHECK VARIABLE TYPE
$marks = 85;

echo "<br>";
echo "Variable type of marks: ";
var_dump($marks);


// 11. CHANGE VARIABLE VALUE
$number = 10;

echo "<br>";
echo "Before: ";
echo $number;

$number = "Ten";

echo "<br>";
echo "After: ";
echo $number;

?>