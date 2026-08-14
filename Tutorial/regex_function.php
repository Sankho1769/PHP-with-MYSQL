<?php
// 1. preg_match()
// Check whether a pattern exists

echo "<h2>1. preg_match()</h2>";

$text = "I am learning PHP";

if (preg_match("/PHP/", $text)) {
    echo "PHP found";
} else {
    echo "PHP not found";
}

echo "<br><br>";


// 2. preg_match() WITH CASE INSENSITIVE

echo "<h2>2. preg_match() with i modifier</h2>";

$text = "I am learning php";

if (preg_match("/PHP/i", $text)) {
    echo "PHP found";
} else {
    echo "PHP not found";
}

echo "<br><br>";


// 3. preg_match() WITH CAPTURE GROUP

echo "<h2>3. Capture Group</h2>";

$text = "My age is 20";

if (preg_match("/(\d+)/", $text, $matches)) {

    echo "Number found: " . $matches[1];

}

echo "<br><br>";


// 4. preg_match_all()
// Find ALL matches

echo "<h2>4. preg_match_all()</h2>";

$text = "PHP Java PHP MySQL PHP";

preg_match_all("/PHP/", $text, $matches);

echo "PHP found: " . count($matches[0]) . " times<br>";

echo "Matches: ";

print_r($matches[0]);

echo "<br><br>";


// 5. preg_replace()
// Replace matching text

echo "<h2>5. preg_replace()</h2>";

$text = "I like PHP. PHP is easy.";

$result = preg_replace("/PHP/", "Java", $text);

echo $result;

echo "<br><br>";


// 6. preg_replace() WITH CASE INSENSITIVE

echo "<h2>6. Case Insensitive Replace</h2>";

$text = "PHP php Php";

$result = preg_replace("/php/i", "Java", $text);

echo $result;

echo "<br><br>";


// 7. preg_split()
// Split string using Regex

echo "<h2>7. preg_split()</h2>";

$text = "Java,PHP MySQL;DSA";

$subjects = preg_split("/[,; ]+/", $text);

print_r($subjects);

echo "<br><br>";


// 8. preg_quote()
// Escape Regex Characters

echo "<h2>8. preg_quote()</h2>";

$text = "PHP $100.00";

$escapedText = preg_quote($text, "/");

echo $escapedText;

echo "<br><br>";


// 9. VALIDATE EMAIL

echo "<h2>9. Email Validation</h2>";

$email = "student@gmail.com";

if (preg_match(
    "/^[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}$/",
    $email
)) {

    echo "Valid email";

} else {

    echo "Invalid email";

}

echo "<br><br>";


// 10. VALIDATE PHONE NUMBER

echo "<h2>10. Phone Validation</h2>";

$phone = "9876543210";

if (preg_match("/^[0-9]{10}$/", $phone)) {

    echo "Valid phone number";

} else {

    echo "Invalid phone number";

}

echo "<br><br>";


// 11. VALIDATE USERNAME

echo "<h2>11. Username Validation</h2>";

$username = "Shankho123";

if (preg_match("/^[a-zA-Z0-9_]{5,15}$/", $username)) {

    echo "Valid username";

} else {

    echo "Invalid username";

}

echo "<br><br>";


// 12. EXTRACT NUMBERS

echo "<h2>12. Extract Numbers</h2>";

$text = "I have 20 apples, 15 oranges and 10 bananas.";

preg_match_all("/\d+/", $text, $numbers);

echo "Numbers found: ";

print_r($numbers[0]);

echo "<br><br>";


// 13. EXTRACT EMAILS

echo "<h2>13. Extract Emails</h2>";

$text = "Contact us at admin@gmail.com or support@yahoo.com";

preg_match_all(
    "/[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}/",
    $text,
    $emails
);

echo "Emails found:<br>";

foreach ($emails[0] as $email) {
    echo $email . "<br>";
}


// FINAL EXAMPLE

echo "<h2>Final Example</h2>";

$password = "Password123";

if (preg_match("/^(?=.*[A-Za-z])(?=.*\d)[A-Za-z\d]{8,}$/", $password)) {

    echo "Password is valid";

} else {

    echo "Password must contain at least 8 characters, including letters and numbers.";

}

?>