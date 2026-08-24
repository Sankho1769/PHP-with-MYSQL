<?php

$name = "";
$email = "";
$phone = "";

$nameError = "";
$emailError = "";
$phoneError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $name = trim($_POST["name"]);
    $email = trim($_POST["email"]);
    $phone = trim($_POST["phone"]);

    if (empty($name)) {
        $nameError = "Name is required.";
    }

    if (empty($email)) {
        $emailError = "Email is required.";
    }

    if (empty($phone)) {
        $phoneError = "Phone number is required.";
    }

    if (empty($nameError) && empty($emailError) && empty($phoneError)) {
        echo "<h3>Form Submitted Successfully</h3>";
        echo "Name: " . htmlspecialchars($name) . "<br>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Phone: " . htmlspecialchars($phone);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Required</title>
</head>
<body>

<h2>Registration Form</h2>

<form method="POST">

    <label>Name:</label>
    <input type="text" name="name">
    <span><?php echo $nameError; ?></span>
    <br><br>

    <label>Email:</label>
    <input type="text" name="email">
    <span><?php echo $emailError; ?></span>
    <br><br>

    <label>Phone:</label>
    <input type="text" name="phone">
    <span><?php echo $phoneError; ?></span>
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>