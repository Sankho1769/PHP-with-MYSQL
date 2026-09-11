<?php

class Student
{
    public $name;
    private $age;
    protected $course;

    public function setDetails($name, $age, $course)
    {
        $this->name = $name;
        $this->age = $age;
        $this->course = $course;
    }

    public function display()
    {
        echo "\nStudent Details:\n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
        echo "Course: " . $this->course . "\n";
    }
}

$name = readline("Enter student name: ");
$age = readline("Enter student age: ");
$course = readline("Enter student course: ");

$student = new Student();

$student->setDetails($name, $age, $course);
$student->display();

?>