<?php

class Student
{
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function displayName()
    {
        echo "Student Name: " . $this->name . "\n";
    }
}

class CollegeStudent extends Student
{
    public $course;

    public function displayCourse()
    {
        echo "Course: " . $this->course . "\n";
    }
}

$name = readline("Enter student name: ");
$course = readline("Enter course: ");

$student = new CollegeStudent($name);
$student->course = $course;

echo "\nStudent Details:\n";
$student->displayName();
$student->displayCourse();

?>