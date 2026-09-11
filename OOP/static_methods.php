<?php

class Student
{
    public static function displayDetails($name, $course)
    {
        echo "\nStudent Details:\n";
        echo "Name: " . $name . "\n";
        echo "Course: " . $course . "\n";
    }
}

$name = readline("Enter student name: ");
$course = readline("Enter course: ");

Student::displayDetails($name, $course);

?>