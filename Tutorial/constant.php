<?php


// 1. Creating a constant using define()

define("COLLEGE", "Bhawanipur Global Campus");
define("AGE", 20);
define("PI", 3.14159);


// 2. Using constants

echo "<h2>PHP Constants</h2>";

echo "College: " . COLLEGE . "<br>";
echo "Age: " . AGE . "<br>";
echo "PI: " . PI . "<br>";


// 3. CONSTANT WITH ARRAY

define("SUBJECTS", ["Java", "PHP", "MySQL", "DSA"]);

echo "<h3>Constant Array</h3>";

echo SUBJECTS[0] . "<br>";
echo SUBJECTS[1] . "<br>";
echo SUBJECTS[2] . "<br>";
echo SUBJECTS[3] . "<br>";


// 4. CHECK IF CONSTANT EXISTS

echo "<h3>Check Constant</h3>";

if (defined("COLLEGE")) {
    echo "COLLEGE constant exists";
} else {
    echo "COLLEGE constant does not exist";
}

echo "<br>";


// 5. CONSTANT VS VARIABLE

echo "<h3>Constant vs Variable</h3>";

$name = "Shankho";

define("COURSE", "BCA");

echo "Variable: " . $name . "<br>";
echo "Constant: " . COURSE . "<br>";


// 6. CONSTANT CANNOT BE CHANGED

define("COUNTRY", "India");

echo "Country: " . COUNTRY . "<br>";

// You should NOT do this:
// define("COUNTRY", "USA");


// 7. CASE-SENSITIVE CONSTANT

define("COLLEGE_NAME", "BGC");

echo "College Name: " . COLLEGE_NAME . "<br>";


// 8. BUILT-IN CONSTANT

echo "<h3>Built-in Constant</h3>";

echo "PHP Version: " . PHP_VERSION . "<br>";


// FINAL EXAMPLE

echo "<h3>Final Example</h3>";

define("PASS_MARKS", 40);

$marks = 75;

if ($marks >= PASS_MARKS) {
    echo "Student Passed";
} else {
    echo "Student Failed";
}

?>