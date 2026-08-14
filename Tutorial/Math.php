<?php

echo "<h2>PHP Math</h2>";

// 1. BASIC ARITHMETIC

$a = 20;
$b = 6;

echo "<h3>1. Basic Arithmetic</h3>";

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Power: " . ($a ** 2) . "<br>";


// 2. ABSOLUTE VALUE

echo "<h3>2. Absolute Value</h3>";

$number = -25;

echo "Original: $number<br>";
echo "Absolute: " . abs($number) . "<br>";


// 3. ROUND

echo "<h3>3. Round</h3>";

$number = 5.7;

echo "Original: $number<br>";
echo "Rounded: " . round($number) . "<br>";


// 4. CEILING

echo "<h3>4. Ceiling</h3>";

$number = 5.2;

echo "Original: $number<br>";
echo "Ceiling: " . ceil($number) . "<br>";


// 5. FLOOR

echo "<h3>5. Floor</h3>";

$number = 5.8;

echo "Original: $number<br>";
echo "Floor: " . floor($number) . "<br>";


// 6. SQUARE ROOT

echo "<h3>6. Square Root</h3>";

$number = 25;

echo "Square root of $number: " . sqrt($number) . "<br>";


// 7. MINIMUM

echo "<h3>7. Minimum</h3>";

echo "Minimum: " . min(10, 25, 5, 40, 15) . "<br>";


// 8. MAXIMUM

echo "<h3>8. Maximum</h3>";

echo "Maximum: " . max(10, 25, 5, 40, 15) . "<br>";


// 9. RANDOM NUMBER

echo "<h3>9. Random Number</h3>";

echo "Random number: " . rand() . "<br>";

echo "Random number from 1 to 100: " . rand(1, 100) . "<br>";


// 10. POWER USING POW()

echo "<h3>10. Power</h3>";

echo "2 raised to 3: " . pow(2, 3) . "<br>";


// 11. CHECK IF NUMBER IS FINITE

echo "<h3>11. Finite Number</h3>";

$number = 100;

var_dump(is_finite($number));

echo "<br>";


// 12. CHECK IF NUMBER IS INFINITE

echo "<h3>12. Infinite Number</h3>";

$number = INF;

var_dump(is_infinite($number));

echo "<br>";

// 13. NAN

echo "<h3>13. NAN</h3>";

$number = NAN;

var_dump(is_nan($number));

echo "<br>";


// 14. PI

echo "<h3>14. PI</h3>";

echo "PI: " . pi() . "<br>";


// 15. DEGREE AND RADIAN

echo "<h3>15. Degree and Radian</h3>";

$degree = 180;

$radian = deg2rad($degree);

echo "180 degrees in radians: $radian<br>";

echo "PI radians in degrees: " . rad2deg(pi()) . "<br>";


// 16. TRIGONOMETRIC FUNCTIONS

echo "<h3>16. Trigonometry</h3>";

echo "sin(0): " . sin(0) . "<br>";

echo "cos(0): " . cos(0) . "<br>";

echo "tan(0): " . tan(0) . "<br>";


// 17. LOGARITHM

echo "<h3>17. Logarithm</h3>";

echo "Natural log of 10: " . log(10) . "<br>";

echo "Log base 10 of 100: " . log10(100) . "<br>";


// 18. EXPONENTIAL

echo "<h3>18. Exponential</h3>";

echo "e raised to 2: " . exp(2) . "<br>";


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

$marks1 = 85;
$marks2 = 90;
$marks3 = 78;

$total = $marks1 + $marks2 + $marks3;

$average = $total / 3;

echo "Total Marks: $total<br>";
echo "Average: " . round($average, 2) . "<br>";

?>