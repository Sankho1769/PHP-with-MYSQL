<?php

// 1. ARITHMETIC OPERATORS

echo "<h2>1. Arithmetic Operators</h2>";

$a = 20;
$b = 6;

echo "Addition: " . ($a + $b) . "<br>";
echo "Subtraction: " . ($a - $b) . "<br>";
echo "Multiplication: " . ($a * $b) . "<br>";
echo "Division: " . ($a / $b) . "<br>";
echo "Modulus: " . ($a % $b) . "<br>";
echo "Power: " . ($a ** $b) . "<br>";


// 2. ASSIGNMENT OPERATORS

echo "<h2>2. Assignment Operators</h2>";

$x = 10;

echo "Initial value: $x<br>";

$x += 5;
echo "After += 5: $x<br>";

$x -= 3;
echo "After -= 3: $x<br>";

$x *= 2;
echo "After *= 2: $x<br>";

$x /= 4;
echo "After /= 4: $x<br>";

$x %= 3;
echo "After %= 3: $x<br>";


// 3. COMPARISON OPERATORS

echo "<h2>3. Comparison Operators</h2>";

$a = 10;
$b = 20;

echo "a == b: ";
var_dump($a == $b);
echo "<br>";

echo "a != b: ";
var_dump($a != $b);
echo "<br>";

echo "a > b: ";
var_dump($a > $b);
echo "<br>";

echo "a < b: ";
var_dump($a < $b);
echo "<br>";

echo "a >= b: ";
var_dump($a >= $b);
echo "<br>";

echo "a <= b: ";
var_dump($a <= $b);
echo "<br>";


// 4. STRICT COMPARISON

echo "<h2>4. Strict Comparison</h2>";

$a = 10;
$b = "10";

echo "10 == \"10\": ";
var_dump($a == $b);
echo "<br>";

echo "10 === \"10\": ";
var_dump($a === $b);
echo "<br>";

echo "10 != \"10\": ";
var_dump($a != $b);
echo "<br>";

echo "10 !== \"10\": ";
var_dump($a !== $b);
echo "<br>";


// 5. INCREMENT AND DECREMENT

echo "<h2>5. Increment and Decrement</h2>";

$count = 5;

echo "Original: $count<br>";

$count++;
echo "After ++: $count<br>";

$count--;
echo "After --: $count<br>";


// 6. LOGICAL OPERATORS

echo "<h2>6. Logical Operators</h2>";

$age = 20;
$hasID = true;

echo "AND (&&): ";
var_dump($age >= 18 && $hasID);
echo "<br>";

echo "OR (||): ";
var_dump($age >= 18 || $hasID);
echo "<br>";

echo "NOT (!): ";
var_dump(!$hasID);
echo "<br>";


// 7. STRING OPERATORS

echo "<h2>7. String Operators</h2>";

$firstName = "Shankho";
$lastName = "Das";

$fullName = $firstName . " " . $lastName;

echo "Full Name: $fullName<br>";

$message = "Hello";

$message .= " Shankho";

echo "Message: $message<br>";


// 8. TERNARY OPERATOR

echo "<h2>8. Ternary Operator</h2>";

$age = 20;

$result = ($age >= 18) ? "Adult" : "Minor";

echo "Result: $result<br>";


// 9. NULL COALESCING OPERATOR

echo "<h2>9. Null Coalescing Operator</h2>";

$username = null;

$name = $username ?? "Guest";

echo "Name: $name<br>";


// 10. NULL COALESCING ASSIGNMENT

echo "<h2>10. Null Coalescing Assignment</h2>";

$name = null;

$name ??= "Shankho";

echo "Name: $name<br>";


// 11. OPERATOR PRECEDENCE

echo "<h2>11. Operator Precedence</h2>";

$result = 10 + 5 * 2;

echo "10 + 5 * 2 = $result<br>";

$result = (10 + 5) * 2;

echo "(10 + 5) * 2 = $result<br>";


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

$marks = 75;

if ($marks >= 40 && $marks <= 100) {
    echo "Valid marks and student passed.";
} else {
    echo "Invalid marks or student failed.";
}

?>