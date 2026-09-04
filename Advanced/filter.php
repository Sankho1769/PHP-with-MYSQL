<?php

// $email = "student@example.com";

// if (filter_var($email, FILTER_VALIDATE_EMAIL)) {

//     echo "Valid email address.";

// } else {

//     echo "Invalid email address.";

// }

<?php

$email = "student@example.com";
$number = "12345";

if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
    echo "Email: Valid";
} else {
    echo "Email: Invalid";
}

echo "<br>";

if (filter_var($number, FILTER_VALIDATE_INT)) {
    echo "Number: Valid integer";
} else {
    echo "Number: Invalid integer";
}

?>

?>