<!-- 15.	Calculate the grade of a student marks by user input page.
 above 800 but less than or equal 1000 => Print 
 above 600 but less than or equal 800 => Print Class II
 above 400 but less than or equal 600 => Print Class III
 below 400, Print Fail
 -->

<!DOCTYPE html>
<html>
<body>

<form method="post">
    Enter marks:
    <input type="number" name="marks">
    <input type="submit" value="Check Grade">
</form>

<?php

if (isset($_POST["marks"])) {

    $marks = $_POST["marks"];

    if ($marks > 800 && $marks <= 1000) {
        echo "Class I";
    } elseif ($marks > 600 && $marks <= 800) {
        echo "Class II";
    } elseif ($marks > 400 && $marks <= 600) {
        echo "Class III";
    } else {
        echo "Fail";
    }

}

?>

</body>
</html>