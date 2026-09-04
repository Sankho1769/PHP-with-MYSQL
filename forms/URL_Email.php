<?php

$email = "";
$url = "";

$emailError = "";
$urlError = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $email = trim($_POST["email"]);
    $url = trim($_POST["url"]);

    if (!filter_var($email, FILTER_VALIDATE_EMAIL)) {
        $emailError = "Enter a valid email address.";
    }

    if (!filter_var($url, FILTER_VALIDATE_URL)) {
        $urlError = "Enter a valid URL.";
    }

    if (empty($emailError) && empty($urlError)) {
        echo "<h3>Valid Information</h3>";
        echo "Email: " . htmlspecialchars($email) . "<br>";
        echo "Website: " . htmlspecialchars($url);
    }
}

?>

<!DOCTYPE html>
<html>
<head>
    <title>PHP Form URL and Email</title>
</head>
<body>

<h2>Email and Website Form</h2>

<form method="POST">

    <label>Email:</label>
    <input type="text" name="email">
    <span><?php echo $emailError; ?></span>
    <br><br>

    <label>Website:</label>
    <input type="text" name="url">
    <span><?php echo $urlError; ?></span>
    <br><br>

    <input type="submit" value="Submit">

</form>

</body>
</html>