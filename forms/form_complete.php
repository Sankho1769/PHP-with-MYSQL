<?php

$name = "";
$email = "";
$age = "";
$website = "";

$errors = [];

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"] ?? "");
    $email = trim($_POST["email"] ?? "");
    $age = trim($_POST["age"] ?? "");
    $website = trim($_POST["website"] ?? "");

    if (empty($name)) {
        $errors[] = "Name is required.";
    } elseif (strlen($name) < 3) {
        $errors[] = "Name must contain at least 3 characters.";
    }

    if (empty($email)) {
        $errors[] = "Email is required.";
    } elseif (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $errors[] = "Enter a valid email address.";
    }

    if (empty($age)) {
        $errors[] = "Age is required.";
    } elseif (!is_numeric($age) || $age < 18) {
        $errors[] = "Age must be 18 or above.";
    }

    if (empty($website)) {
        $errors[] = "Website URL is required.";
    } elseif (!filter_var($website, FILTER_VALIDATE_URL)) {
        $errors[] = "Enter a valid URL.";
    }

    if (empty($errors)) {
        echo "<h3>Form Submitted Successfully</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Age: " . htmlspecialchars($age) . "<br>";
        echo "Website: " . htmlspecialchars($website);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Complete Form</title>
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

    <label>Website:</label>
    <input type="text" name="website">
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>