<?php

// ============================================
// PHP SWITCH STATEMENT
// ============================================


// ============================================
// 1. BASIC SWITCH
// ============================================

echo "<h2>1. Basic Switch</h2>";

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

echo "<br>";


// ============================================
// 2. SWITCH WITH STRING
// ============================================

echo "<h2>2. Switch with String</h2>";

$color = "red";

switch ($color) {

    case "red":
        echo "Stop";
        break;

    case "yellow":
        echo "Get Ready";
        break;

    case "green":
        echo "Go";
        break;

    default:
        echo "Invalid Color";
}

echo "<br>";


// ============================================
// 3. MULTIPLE CASES WITH SAME RESULT
// ============================================

echo "<h2>3. Multiple Cases</h2>";

$day = "Saturday";

switch ($day) {

    case "Saturday":
    case "Sunday":
        echo "Weekend";
        break;

    case "Monday":
    case "Tuesday":
    case "Wednesday":
    case "Thursday":
    case "Friday":
        echo "Weekday";
        break;

    default:
        echo "Invalid Day";
}

echo "<br>";


// ============================================
// 4. DEFAULT CASE
// ============================================

echo "<h2>4. Default Case</h2>";

$number = 10;

switch ($number) {

    case 1:
        echo "Number is 1";
        break;

    case 2:
        echo "Number is 2";
        break;

    default:
        echo "Number is neither 1 nor 2";
}

echo "<br>";


// ============================================
// 5. SWITCH WITH CALCULATOR
// ============================================

echo "<h2>5. Calculator Using Switch</h2>";

$a = 20;
$b = 10;
$operator = "+";

switch ($operator) {

    case "+":
        echo "Result: " . ($a + $b);
        break;

    case "-":
        echo "Result: " . ($a - $b);
        break;

    case "*":
        echo "Result: " . ($a * $b);
        break;

    case "/":

        if ($b != 0) {
            echo "Result: " . ($a / $b);
        } else {
            echo "Cannot divide by zero";
        }

        break;

    default:
        echo "Invalid operator";
}

echo "<br>";


// ============================================
// 6. SWITCH WITH USER ROLE
// ============================================

echo "<h2>6. User Role</h2>";

$role = "admin";

switch ($role) {

    case "admin":
        echo "You have full access.";
        break;

    case "doctor":
        echo "You have doctor access.";
        break;

    case "patient":
        echo "You have patient access.";
        break;

    default:
        echo "Unknown role.";
}

echo "<br>";


// ============================================
// 7. SWITCH WITH RANGE
// ============================================

echo "<h2>7. Grade Using Switch</h2>";

$grade = "A";

switch ($grade) {

    case "A":
        echo "Excellent";
        break;

    case "B":
        echo "Very Good";
        break;

    case "C":
        echo "Good";
        break;

    case "D":
        echo "Pass";
        break;

    case "F":
        echo "Fail";
        break;

    default:
        echo "Invalid Grade";
}

echo "<br>";


// ============================================
// 8. MATCH EXPRESSION
// PHP 8+
// ============================================

echo "<h2>8. Match Expression</h2>";

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

?>