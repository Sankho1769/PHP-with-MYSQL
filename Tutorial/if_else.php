<?php

// 1. IF STATEMENT

echo "<h2>1. IF Statement</h2>";

$age = 20;

if ($age >= 18) {
    echo "You are an adult.";
}


// 2. IF...ELSE
echo "<h2>2. IF...ELSE</h2>";

$age = 16;

if ($age >= 18) {
    echo "You can vote.";
} else {
    echo "You cannot vote yet.";
}


// 3. IF...ELSEIF...ELSE

echo "<h2>3. IF...ELSEIF...ELSE</h2>";

$marks = 75;

if ($marks >= 90) {
    echo "Grade: A+";
} elseif ($marks >= 80) {
    echo "Grade: A";
} elseif ($marks >= 70) {
    echo "Grade: B";
} elseif ($marks >= 60) {
    echo "Grade: C";
} else {
    echo "Grade: F";
}


// 4. MULTIPLE CONDITIONS

echo "<h2>4. Multiple Conditions</h2>";

$age = 20;
$hasID = true;

if ($age >= 18 && $hasID) {
    echo "You are eligible.";
} else {
    echo "You are not eligible.";
}


// 5. NESTED IF

echo "<h2>5. Nested IF</h2>";

$age = 20;
$hasVoterID = true;

if ($age >= 18) {

    if ($hasVoterID) {
        echo "You can vote.";
    } else {
        echo "You need a voter ID.";
    }

} else {
    echo "You are under 18.";
}


// 6. SHORTHAND IF

echo "<h2>6. Shorthand IF</h2>";

$loggedIn = true;

if ($loggedIn)
    echo "Welcome back!";


// 7. TERNARY OPERATOR

echo "<h2>7. Ternary Operator</h2>";

$age = 20;

$message = ($age >= 18) ? "Adult" : "Minor";

echo $message;


// 8. NULL COALESCING

echo "<h2>8. Null Coalescing</h2>";

$username = null;

$name = $username ?? "Guest";

echo "Welcome, $name";


// 9. SWITCH STATEMENT

echo "<h2>9. SWITCH Statement</h2>";

$day = 3;

switch ($day) {

    case 1:
        echo "Monday";
        break;

    case 2:
        echo "Tuesday";
        break;

    case 3:
        echo "Wednesday";
        break;

    case 4:
        echo "Thursday";
        break;

    case 5:
        echo "Friday";
        break;

    default:
        echo "Weekend";
}


// 10. MATCH EXPRESSION

echo "<h2>10. MATCH Expression</h2>";

$day = 3;

$result = match ($day) {

    1 => "Monday",
    2 => "Tuesday",
    3 => "Wednesday",
    4 => "Thursday",
    5 => "Friday",

    default => "Weekend"
};

echo $result;


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

$marks = 85;
$attendance = 90;

if ($marks >= 40 && $attendance >= 75) {

    if ($marks >= 90) {
        $grade = "A+";
    } elseif ($marks >= 80) {
        $grade = "A";
    } elseif ($marks >= 70) {
        $grade = "B";
    } else {
        $grade = "C";
    }

    echo "Student Passed<br>";
    echo "Grade: $grade";

} else {

    echo "Student Failed or attendance is insufficient.";

}

?>