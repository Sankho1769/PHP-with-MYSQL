<?php

$name = readline("Enter your name: ");
$age = readline("Enter your age: ");

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

$student = new Student();

$student->name = $name;
$student->age = $age;

$student->display();

?>