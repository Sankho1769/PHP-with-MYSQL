<?php
// 1. preg_match()
// Checks whether a pattern exists

echo "<h2>1. preg_match()</h2>";

$text = "I am learning PHP";

if (preg_match("/PHP/", $text)) {
    echo "PHP found in the text.";
} else {
    echo "PHP not found.";
}

echo "<br>";


// 2. preg_match() WITH CASE INSENSITIVE

echo "<h2>2. Case Insensitive</h2>";

$text = "I am learning php";

if (preg_match("/PHP/i", $text)) {
    echo "PHP found.";
} else {
    echo "PHP not found.";
}

echo "<br>";


// 3. preg_match_all()
// Finds ALL matches

echo "<h2>3. preg_match_all()</h2>";

$text = "Java PHP Java MySQL PHP";

preg_match_all("/PHP/", $text, $matches);

echo "PHP found: " . count($matches[0]) . " times<br>";


// 4. BASIC CHARACTER PATTERN

echo "<h2>4. Character Pattern</h2>";

$text = "cat";

if (preg_match("/cat/", $text)) {
    echo "Pattern matched.";
}

echo "<br>";


// 5. ^ START OF STRING

echo "<h2>5. Start of String (^)</h2>";

$text = "Hello World";

if (preg_match("/^Hello/", $text)) {
    echo "String starts with Hello.";
}

echo "<br>";


// 6. $ END OF STRING

echo "<h2>6. End of String ($)</h2>";

$text = "Hello World";

if (preg_match("/World$/", $text)) {
    echo "String ends with World.";
}

echo "<br>";


// 7. . ANY CHARACTER

echo "<h2>7. Dot (.)</h2>";

$text = "cat";

if (preg_match("/c.t/", $text)) {
    echo "Pattern matched.";
}

echo "<br>";


// 8. [] CHARACTER SET

echo "<h2>8. Character Set []</h2>";

$text = "cat";

if (preg_match("/[abc]/", $text)) {
    echo "Contains a, b, or c.";
}

echo "<br>";


// 9. [^] NOT THESE CHARACTERS

echo "<h2>9. Negated Character Set [^]</h2>";

$text = "hello";

if (preg_match("/[^0-9]/", $text)) {
    echo "Contains a non-number character.";
}

echo "<br>";


// 10. \d DIGIT

echo "<h2>10. \\d Digit</h2>";

$text = "My age is 20";

if (preg_match("/\d+/", $text)) {
    echo "Number found.";
}

echo "<br>";


// 11. \D NOT A DIGIT

echo "<h2>11. \\D Not Digit</h2>";

$text = "Hello";

if (preg_match("/\D+/", $text)) {
    echo "Non-digit characters found.";
}

echo "<br>";


// 12. \w WORD CHARACTER

echo "<h2>12. \\w Word Character</h2>";

$text = "Hello123";

if (preg_match("/\w+/", $text)) {
    echo "Word characters found.";
}

echo "<br>";


// 13. \s WHITESPACE

echo "<h2>13. \\s Whitespace</h2>";

$text = "Hello World";

if (preg_match("/\s/", $text)) {
    echo "Whitespace found.";
}

echo "<br>";


// 14. + ONE OR MORE

echo "<h2>14. + One or More</h2>";

$text = "12345";

if (preg_match("/\d+/", $text)) {
    echo "One or more digits found.";
}

echo "<br>";


// 15. * ZERO OR MORE

echo "<h2>15. * Zero or More</h2>";

$text = "Helloooo";

if (preg_match("/o*/", $text)) {
    echo "Pattern matched.";
}

echo "<br>";


// 16. ? ZERO OR ONE

echo "<h2>16. ? Zero or One</h2>";

$text = "color";

if (preg_match("/colou?r/", $text)) {
    echo "Pattern matched.";
}

echo "<br>";


// 17. {n} EXACT NUMBER

echo "<h2>17. Exact Number {n}</h2>";

$text = "12345";

if (preg_match("/\d{5}/", $text)) {
    echo "Exactly 5 digits found.";
}

echo "<br>";


// 18. {n,m} RANGE

echo "<h2>18. Range {n,m}</h2>";

$text = "123456";

if (preg_match("/\d{3,6}/", $text)) {
    echo "Between 3 and 6 digits found.";
}

echo "<br>";


// 19. OR OPERATOR |

echo "<h2>19. OR Operator</h2>";

$text = "I use PHP";

if (preg_match("/PHP|Java/", $text)) {
    echo "PHP or Java found.";
}

echo "<br>";


// 20. EMAIL VALIDATION

echo "<h2>20. Email Validation</h2>";

$email = "student@gmail.com";

if (preg_match(
    "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",
    $email
)) {
    echo "Valid email.";
} else {
    echo "Invalid email.";
}

echo "<br>";


// 21. PHONE NUMBER VALIDATION

echo "<h2>21. Phone Validation</h2>";

$phone = "9876543210";

if (preg_match("/^[0-9]{10}$/", $phone)) {
    echo "Valid 10-digit phone number.";
} else {
    echo "Invalid phone number.";
}

echo "<br>";


// 22. ONLY LETTERS

echo "<h2>22. Only Letters</h2>";

$name = "Shankho";

if (preg_match("/^[a-zA-Z]+$/", $name)) {
    echo "Name contains only letters.";
} else {
    echo "Name contains invalid characters.";
}

echo "<br>";


// 23. ONLY NUMBERS

echo "<h2>23. Only Numbers</h2>";

$number = "12345";

if (preg_match("/^[0-9]+$/", $number)) {
    echo "Only numbers.";
} else {
    echo "Contains non-number characters.";
}

echo "<br>";


// 24. preg_replace()
// Replace using Regex

echo "<h2>24. preg_replace()</h2>";

$text = "PHP is easy. PHP is powerful.";

$result = preg_replace("/PHP/", "Java", $text);

echo $result;

echo "<br>";


// 25. EXTRACT NUMBERS

echo "<h2>25. Extract Numbers</h2>";

$text = "I have 20 apples and 15 oranges.";

preg_match_all("/\d+/", $text, $numbers);

print_r($numbers[0]);

echo "<br>";


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

$username = "Shankho123";

if (preg_match("/^[a-zA-Z0-9]{5,15}$/", $username)) {

    echo "Valid username.";

} else {

    echo "Invalid username.";

}

?>