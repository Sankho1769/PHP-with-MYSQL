<?php

trait StudentDetails
{
    public function displayDetails()
    {
        echo "\nStudent Details:\n";
        echo "Name: " . $this->name . "\n";
        echo "Course: " . $this->course . "\n";
    }
}

class Student
{
    use StudentDetails;

    public $name;
    public $course;

    public function __construct($name, $course)
    {
        $this->name = $name;
        $this->course = $course;
    }
}

$name = readline("Enter student name: ");
$course = readline("Enter course: ");

$student = new Student($name, $course);

$student->displayDetails();

?>