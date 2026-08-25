<!-- 9.	Write a simple PHP program to check that emails are valid. -->

<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter email:
    <input type="text" name="email">
    <input type="submit" value="Check">
</form>

<?php

if (isset($_POST["email"])) {

    $email = $_POST["email"];

    if (filter_var($email, FILTER_VALIDATE_EMAIL)) {
        echo "Valid email";
    } else {
        echo "Invalid email";
    }

}

?>

</body>
</html>