<!-- Calculate a number even or odd by user input page -->

<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter a number:
    <input type="number" name="number">
    <input type="submit" value="Check">
</form>

<?php

if (isset($_POST["number"])) {

    $number = $_POST["number"];

    if ($number % 2 == 0) {
        echo "Even number";
    } else {
        echo "Odd number";
    }

}

?>

</body>
</html>