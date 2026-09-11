<?php

class Student
{
    public static $college;

    public static function displayCollege()
    {
        echo "College: " . self::$college . "\n";
    }
}

$college = readline("Enter college name: ");

Student::$college = $college;

echo "\nStudent Details:\n";
Student::displayCollege();

?>