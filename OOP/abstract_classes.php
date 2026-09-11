<?php

abstract class Student
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    abstract public function displayCourse();
}

class CollegeStudent extends Student
{
    public $course;

    public function displayCourse()
    {
        echo "Student Name: " . $this->name . "\n";
        echo "Course: " . $this->course . "\n";
    }
}

$name = readline("Enter student name: ");
$course = readline("Enter course: ");

$student = new CollegeStudent($name);
$student->course = $course;

echo "\nStudent Details:\n";
$student->displayCourse();

?>