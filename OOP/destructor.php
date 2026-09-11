<?php

class Student
{
    public $name;
    public $age;

    public function __construct($name, $age)
    {
        $this->name = $name;
        $this->age = $age;

        echo "Student object created.\n";
    }

    public function display()
    {
        echo "\nStudent Details:\n";
        echo "Name: " . $this->name . "\n";
        echo "Age: " . $this->age . "\n";
    }

    public function __destruct()
    {
        echo "\nStudent object destroyed.\n";
    }
}

$name = readline("Enter student name: ");
$age = readline("Enter student age: ");

$student = new Student($name, $age);

$student->display();

?>