<?php

// 1. BASIC MATCH

echo "<h2>1. Basic Match</h2>";

$day = 3;

$result = match ($day) {

    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",

    default => "Weekend"
};

echo $result . "<br>";


// 2. MATCH WITH STRING

echo "<h2>2. Match with String</h2>";

$color = "red";

$result = match ($color) {

    "red" => "Stop",
    "yellow" => "Get Ready",
    "green" => "Go",

    default => "Invalid Color"
};

echo $result . "<br>";


// 3. MATCH WITH MULTIPLE VALUES

echo "<h2>3. Multiple Values</h2>";

$day = "Saturday";

$result = match ($day) {

    "Saturday", "Sunday" => "Weekend",

    "Monday",
    "Tuesday",
    "Wednesday",
    "Thursday",
    "Friday" => "Weekday",

    default => "Invalid Day"
};

echo $result . "<br>";


// 4. MATCH WITH CALCULATOR

echo "<h2>4. Calculator Using Match</h2>";

$a = 20;
$b = 10;
$operator = "+";

$result = match ($operator) {

    "+" => $a + $b,
    "-" => $a - $b,
    "*" => $a * $b,
    "/" => $b != 0 ? $a / $b : "Cannot divide by zero",

    default => "Invalid Operator"
};

echo "Result: " . $result . "<br>";


// 5. MATCH WITH USER ROLE

echo "<h2>5. User Role</h2>";

$role = "doctor";

$message = match ($role) {

    "admin" => "You have full access.",
    "doctor" => "You have doctor access.",
    "patient" => "You have patient access.",

    default => "Unknown role."
};

echo $message . "<br>";


// 6. MATCH WITH CONDITIONS

echo "<h2>6. Match with Conditions</h2>";

$marks = 85;

$result = match (true) {

    $marks >= 90 => "Grade A+",
    $marks >= 80 => "Grade A",
    $marks >= 70 => "Grade B",
    $marks >= 60 => "Grade C",
    $marks >= 40 => "Grade D",

    default => "Fail"
};

echo $result . "<br>";


// 7. MATCH IS STRICT

echo "<h2>7. Strict Comparison</h2>";

$value = 10;

$result = match ($value) {

    10 => "Integer 10",

    "10" => "String 10",

    default => "Something else"
};

echo $result . "<br>";


// 8. MATCH MUST RETURN A VALUE

echo "<h2>8. Match Returns a Value</h2>";

$number = 2;

$message = match ($number) {

    1 => "One",
    2 => "Two",
    3 => "Three",

    default => "Unknown"
};

echo "Message: " . $message . "<br>";


// 9. MATCH WITHOUT DEFAULT

echo "<h2>9. Match Without Default</h2>";

$number = 1;

$result = match ($number) {

    1 => "One",
    2 => "Two"
};

echo $result . "<br>";


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

$status = "approved";

$message = match ($status) {

    "pending" => "Your application is pending.",
    "approved" => "Your application is approved.",
    "rejected" => "Your application was rejected.",

    default => "Unknown status."
};

echo $message;

?>