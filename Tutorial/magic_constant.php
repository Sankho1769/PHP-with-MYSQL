<?php

echo "<h2>PHP Magic Constants</h2>";


// 1. __LINE__

echo "<h3>1. __LINE__</h3>";

echo "Current line number: " . __LINE__ . "<br>";


// 2. __FILE__

echo "<h3>2. __FILE__</h3>";

echo "Current file: " . __FILE__ . "<br>";


// 3. __DIR__

echo "<h3>3. __DIR__</h3>";

echo "Current directory: " . __DIR__ . "<br>";


// 4. __FUNCTION__

echo "<h3>4. __FUNCTION__</h3>";

function showFunctionName()
{
    echo "Function name: " . __FUNCTION__ . "<br>";
}

showFunctionName();


// 5. __CLASS__

echo "<h3>5. __CLASS__</h3>";

class Student
{
    public function showClassName()
    {
        echo "Class name: " . __CLASS__ . "<br>";
    }
}

$student = new Student();

$student->showClassName();


// 6. __METHOD__

echo "<h3>6. __METHOD__</h3>";

class Teacher
{
    public function display()
    {
        echo "Method name: " . __METHOD__ . "<br>";
    }
}

$teacher = new Teacher();

$teacher->display();


// 7. __NAMESPACE__

echo "<h3>7. __NAMESPACE__</h3>";

echo "Current namespace: ";

var_dump(__NAMESPACE__);

echo "<br>";


// 8. __TRAIT__

echo "<h3>8. __TRAIT__</h3>";

trait Logger
{
    public function showTrait()
    {
        echo "Trait name: " . __TRAIT__ . "<br>";
    }
}

class Application
{
    use Logger;
}

$app = new Application();

$app->showTrait();


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

echo "File: " . __FILE__ . "<br>";
echo "Directory: " . __DIR__ . "<br>";
echo "Line: " . __LINE__ . "<br>";
echo "PHP Version: " . PHP_VERSION . "<br>";

?>