<?php

// ============================================
// 1. PHP NUMBERS
// ============================================

echo "<h2>1. PHP Numbers</h2>";

$age = 20;          // Integer
$price = 99.99;     // Float

echo "Age: $age<br>";
echo "Price: $price<br>";


// ============================================
// 2. INTEGER
// ============================================

echo "<h2>2. Integer</h2>";

$number = 100;

echo "Number: $number<br>";

var_dump($number);


// ============================================
// 3. FLOAT
// ============================================

echo "<h2>3. Float</h2>";

$decimal = 10.50;

echo "Decimal: $decimal<br>";

var_dump($decimal);


// ============================================
// 4. CHECK IF NUMBER IS INTEGER
// ============================================

echo "<h2>4. Check Integer</h2>";

$number = 50;

if (is_int($number)) {
    echo "$number is an Integer";
} else {
    echo "$number is not an Integer";
}

echo "<br>";


// ============================================
// 5. CHECK IF NUMBER IS FLOAT
// ============================================

echo "<h2>5. Check Float</h2>";

$number = 25.5;

if (is_float($number)) {
    echo "$number is a Float";
} else {
    echo "$number is not a Float";
}

echo "<br>";


// ============================================
// 6. CHECK IF VALUE IS NUMERIC
// ============================================

echo "<h2>6. Numeric Check</h2>";

$value = "500";

if (is_numeric($value)) {
    echo "$value is numeric";
} else {
    echo "$value is not numeric";
}

echo "<br>";


// ============================================
// 7. ARITHMETIC OPERATIONS
// ============================================

echo "<h2>7. Arithmetic Operations</h2>";

$a = 20;
$b = 10;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Power: " . ($a ** $b) . "<br>";


// ============================================
// 8. MATH FUNCTIONS
// ============================================

echo "<h2>8. Math Functions</h2>";

$number = -25.7;

echo "Absolute value: " . abs($number) . "<br>";

echo "Round: " . round($number) . "<br>";

echo "Ceiling: " . ceil($number) . "<br>";

echo "Floor: " . floor($number) . "<br>";

echo "Square root: " . sqrt(25) . "<br>";


// ============================================
// 9. MINIMUM AND MAXIMUM
// ============================================

echo "<h2>9. Min and Max</h2>";

echo "Minimum: " . min(10, 20, 5, 30) . "<br>";

echo "Maximum: " . max(10, 20, 5, 30) . "<br>";


// ============================================
// 10. RANDOM NUMBERS
// ============================================

echo "<h2>10. Random Numbers</h2>";

$randomNumber = rand(1, 100);

echo "Random number between 1 and 100: $randomNumber<br>";


// ============================================
// 11. NUMBER CONVERSION
// ============================================

echo "<h2>11. Number Conversion</h2>";

$number = 10.75;

echo "Original: $number<br>";

echo "Integer conversion: " . (int)$number . "<br>";


// ============================================
// 12. CONSTANT NUMBER
// ============================================

echo "<h2>12. Constant</h2>";

define("PI_VALUE", 3.14159);

echo "PI value: " . PI_VALUE . "<br>";


// ============================================
// 13. INFINITY
// ============================================

echo "<h2>13. Infinity</h2>";

$number = 1e1000;

var_dump($number);

echo "<br>";


// ============================================
// 14. NAN (Not a Number)
// ============================================

echo "<h2>14. NAN</h2>";

$result = acos(2);

var_dump($result);

echo "<br>";


// ============================================
// 15. NUMBER COMPARISON
// ============================================

echo "<h2>15. Number Comparison</h2>";

$a = 20;
$b = 10;

echo "Is a greater than b? ";

var_dump($a > $b);

echo "<br>";

echo "Is a equal to b? ";

var_dump($a == $b);

echo "<br>";


// ============================================
// FINAL EXAMPLE
// ============================================

echo "<h2>Final Example</h2>";

$marks1 = 85;
$marks2 = 90;
$marks3 = 78;

$total = $marks1 + $marks2 + $marks3;
$average = $total / 3;

echo "Total Marks: $total<br>";
echo "Average Marks: $average<br>";

?>