<?php

// ============================================
// 1. PHP STRINGS
// ============================================

$name = "Shankho";
$course = 'BCA';

echo "<h2>1. PHP Strings</h2>";

echo $name;
echo "<br>";
echo $course;


// ============================================
// 2. STRING FUNCTIONS
// ============================================

echo "<h2>2. String Functions</h2>";

$text = "Hello PHP";

echo "Original: " . $text . "<br>";

echo "Length: " . strlen($text) . "<br>";

echo "Word Count: " . str_word_count($text) . "<br>";

echo "Position of PHP: " . strpos($text, "PHP") . "<br>";

echo "Uppercase: " . strtoupper($text) . "<br>";

echo "Lowercase: " . strtolower($text) . "<br>";


// ============================================
// 3. MODIFY STRINGS
// ============================================

echo "<h2>3. Modify Strings</h2>";

$text = "Hello World";

echo "Original: " . $text . "<br>";

echo "Uppercase: " . strtoupper($text) . "<br>";

echo "Lowercase: " . strtolower($text) . "<br>";

echo "Replace World: " . str_replace("World", "PHP", $text) . "<br>";


// ============================================
// 4. CONCATENATE STRINGS
// ============================================

echo "<h2>4. Concatenate Strings</h2>";

$firstName = "Shankho";
$lastName = "Das";

$fullName = $firstName . " " . $lastName;

echo "Full Name: " . $fullName . "<br>";


// Using .=

$message = "Hello";
$message .= " Shankho";
$message .= ", welcome to PHP!";

echo $message . "<br>";


// ============================================
// 5. SLICING STRINGS
// ============================================

echo "<h2>5. Slicing Strings</h2>";

$text = "Hello World";

echo "Original: " . $text . "<br>";

echo "First 5 characters: " . substr($text, 0, 5) . "<br>";

echo "From position 6: " . substr($text, 6) . "<br>";

echo "Characters 0 to 4: " . substr($text, 0, 5) . "<br>";


// ============================================
// 6. ESCAPE CHARACTERS
// ============================================

echo "<h2>6. Escape Characters</h2>";

echo "He said, \"Hello PHP!\"";
echo "<br>";

echo 'It\'s a beautiful day.';
echo "<br>";

echo "Line 1<br>Line 2";
echo "<br>";

echo "This is a backslash: \\";
echo "<br>";


// ============================================
// 7. DOUBLE VS SINGLE QUOTES
// ============================================

echo "<h2>7. Double vs Single Quotes</h2>";

$name = "Shankho";

echo "Double quotes: My name is $name";
echo "<br>";

echo 'Single quotes: My name is $name';
echo "<br>";


// ============================================
// FINAL EXAMPLE
// ============================================

echo "<h2>Final Example</h2>";

$name = "Shankho";
$course = "BCA";

$sentence = "My name is " . $name . " and I am studying " . $course . ".";

echo $sentence;

?>