<?php

namespace College;

class Student
{
    public $name;
    public $course;

    public function __construct($name, $course)
    {
        $this->name = $name;
        $this->course = $course;
    }

    public function display()
    {
        echo "\nStudent Details:\n";
        echo "Name: " . $this->name . "\n";
        echo "Course: " . $this->course . "\n";
    }
}

$name = readline("Enter student name: ");
$course = readline("Enter course: ");

$student = new Student($name, $course);

$student->display();

?>