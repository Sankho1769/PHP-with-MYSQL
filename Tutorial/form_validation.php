<?php

$name = "";
$email = "";
$age = "";
$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];

    if (!is_string($name) || strlen($name) < 3) {
        $errors[] = "Name must contain at least 3 characters.";
    }

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Enter a valid email address.";
    }

    if (!is_numeric($age) || $age < 18) {
        $errors[] = "Age must be 18 or above.";
    }

    if (empty($errors)) {
        echo "<h3>Registration Successful</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Age: " . htmlspecialchars($age);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Validation</title>
</head>
<body>

<h2>Registration Form</h2>

<?php

if (!empty($errors)) {
    foreach ($errors as $error) {
        echo "<p>" . htmlspecialchars($error) . "</p>";
    }
}

?>

<form method="POST">

    <label>Name:</label>
    <input type="text" name="name">
    <br><br>

    <label>Email:</label>
    <input type="text" name="email">
    <br><br>

    <label>Age:</label>
    <input type="number" name="age">
    <br><br>

    <input type="submit" value="Register">

</form>

</body>
</html>