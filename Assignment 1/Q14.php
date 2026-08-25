<!-- Calculate a number even or odd by user input page -->

<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter radius:
    <input type="number" name="radius" step="any">
    <input type="submit" value="Calculate">
</form>

<?php

if (isset($_POST["radius"])) {

    $radius = $_POST["radius"];

    $area = 3.14 * $radius * $radius;
    $circumference = 2 * 3.14 * $radius;

    echo "Area = " . $area . "<br>";
    echo "Circumference = " . $circumference;

}

?>

</body>
</html>