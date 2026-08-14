<?php

// 1. BASIC FUNCTION

echo "<h2>1. Basic Function</h2>";

function sayHello()
{
    echo "Hello, welcome to PHP!<br>";
}

sayHello();


// 2. FUNCTION WITH PARAMETER

echo "<h2>2. Function with Parameter</h2>";

function greet($name)
{
    echo "Hello, $name!<br>";
}

greet("Shankho");
greet("Rahul");


// 3. FUNCTION WITH MULTIPLE PARAMETERS

echo "<h2>3. Multiple Parameters</h2>";

function introduce($name, $age, $course)
{
    echo "Name: $name<br>";
    echo "Age: $age<br>";
    echo "Course: $course<br>";
}

introduce("Shankho", 20, "BCA");


// 4. FUNCTION WITH RETURN VALUE

echo "<h2>4. Return Value</h2>";

function add($a, $b)
{
    return $a + $b;
}

$result = add(10, 20);

echo "Result: $result<br>";


// 5. FUNCTION WITH DEFAULT PARAMETER

echo "<h2>5. Default Parameter</h2>";

function welcome($name = "Guest")
{
    echo "Welcome, $name!<br>";
}

welcome("Shankho");
welcome();


// 6. TYPE DECLARATION

echo "<h2>6. Type Declaration</h2>";

function multiply(int $a, int $b): int
{
    return $a * $b;
}

echo "Result: " . multiply(5, 4) . "<br>";


// 7. STRING RETURN TYPE

function getName(): string
{
    return "Shankho";
}

echo "Name: " . getName() . "<br>";


// 8. PASSING ARRAY TO FUNCTION

echo "<h2>8. Array as Parameter</h2>";

function showSubjects(array $subjects)
{
    foreach ($subjects as $subject) {
        echo $subject . "<br>";
    }
}

$subjects = ["Java", "PHP", "MySQL", "DSA"];

showSubjects($subjects);


// 9. PASS BY VALUE

echo "<h2>9. Pass by Value</h2>";

function changeValue($number)
{
    $number = 100;
}

$x = 10;

changeValue($x);

echo "Value of x: $x<br>";


// 10. PASS BY REFERENCE

echo "<h2>10. Pass by Reference</h2>";

function changeValueByReference(&$number)
{
    $number = 100;
}

$x = 10;

changeValueByReference($x);

echo "Value of x: $x<br>";


// 11. VARIABLE NUMBER OF ARGUMENTS

echo "<h2>11. Multiple Arguments</h2>";

function sum(...$numbers)
{
    $total = 0;

    foreach ($numbers as $number) {
        $total += $number;
    }

    return $total;
}

echo "Total: " . sum(10, 20, 30, 40) . "<br>";


// 12. ANONYMOUS FUNCTION

echo "<h2>12. Anonymous Function</h2>";

$greet = function ($name)
{
    return "Hello, $name!";
};

echo $greet("Shankho") . "<br>";


// 13. ARROW FUNCTION
// PHP 7.4+

echo "<h2>13. Arrow Function</h2>";

$double = fn($number) => $number * 2;

echo "Double: " . $double(10) . "<br>";


// 14. RECURSIVE FUNCTION

echo "<h2>14. Recursive Function</h2>";

function countdown($number)
{
    if ($number <= 0) {
        return;
    }

    echo "$number<br>";

    countdown($number - 1);
}

countdown(5);


// 15. FUNCTION USING LOGIC

echo "<h2>15. Function with Logic</h2>";

function checkResult($marks)
{
    if ($marks >= 40) {
        return "Passed";
    } else {
        return "Failed";
    }
}

echo "Result: " . checkResult(75) . "<br>";


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

function calculateAverage(array $marks): float
{
    $total = 0;

    foreach ($marks as $mark) {
        $total += $mark;
    }

    return $total / count($marks);
}

$marks = [85, 90, 78, 92, 88];

$average = calculateAverage($marks);

echo "Average Marks: " . round($average, 2);

?>