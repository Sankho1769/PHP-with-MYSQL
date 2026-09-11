<?php

interface Student
{
    public function displayDetails();
}

class CollegeStudent implements Student
{
    public $name;
    public $course;

    public function __construct($name, $course)
    {
        $this->name = $name;
        $this->course = $course;
    }

    public function displayDetails()
    {
        echo "\nStudent Details:\n";
        echo "Name: " . $this->name . "\n";
        echo "Course: " . $this->course . "\n";
    }
}

$name = readline("Enter student name: ");
$course = readline("Enter course: ");

$student = new CollegeStudent($name, $course);

$student->displayDetails();

?>