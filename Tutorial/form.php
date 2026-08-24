<!DOCTYPE html>
<html>
<head>
    <title>PHP Form Handling</title>
</head>
<body>

<h2>Student Registration</h2>

<form method="POST" action="">

    <label>Name:</label>
    <input type="text" name="name">
    <br><br>

    <label>Email:</label>
    <input type="email" name="email">
    <br><br>

    <label>Age:</label>
    <input type="number" name="age">
    <br><br>

    <label>Course:</label>
    <select name="course">
        <option value="BCA">BCA</option>
        <option value="BBA">BBA</option>
        <option value="MCA">MCA</option>
    </select>
    <br><br>

    <label>Gender:</label>
    <input type="radio" name="gender" value="Male"> Male
    <input type="radio" name="gender" value="Female"> Female
    <br><br>

    <input type="submit" name="submit" value="Register">

</form>

<?php

if (isset($_POST["submit"])) {

    $name = $_POST["name"];
    $email = $_POST["email"];
    $age = $_POST["age"];
    $course = $_POST["course"];
    $gender = $_POST["gender"];

    echo "<h3>Registration Details</h3>";

    echo "Name: " . $name . "<br>";
    echo "Email: " . $email . "<br>";
    echo "Age: " . $age . "<br>";
    echo "Course: " . $course . "<br>";
    echo "Gender: " . $gender . "<br>";
}

?>

</body>
</html>