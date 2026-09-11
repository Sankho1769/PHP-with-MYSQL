<?php

class Student
{
    public $name;
    public $age;

    public function display()
    {
        echo "\nStudent Details:\n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
    }
}

$name = readline("Enter student name: ");
$age = readline("Enter student age: ");

$student = new Student();

$student->name = $name;
$student->age = $age;

$student->display();

?>