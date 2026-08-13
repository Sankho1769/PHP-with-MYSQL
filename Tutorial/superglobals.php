<?php

// ============================================
// PHP SUPERGLOBALS
// ============================================


// ============================================
// 1. $_SERVER
// ============================================

echo "<h2>1. \$_SERVER</h2>";

echo "PHP file: " . $_SERVER["PHP_SELF"] . "<br>";

echo "Server name: " . $_SERVER["SERVER_NAME"] . "<br>";

echo "Request method: " . $_SERVER["REQUEST_METHOD"] . "<br>";

echo "Server software: " . $_SERVER["SERVER_SOFTWARE"] . "<br>";


// ============================================
// 2. $_GET
// ============================================

echo "<h2>2. \$_GET</h2>";

/*
Try this in the browser:

http://localhost/test.php?name=Shankho&age=20
*/

if (isset($_GET["name"])) {

    echo "Name: " . $_GET["name"] . "<br>";

}

if (isset($_GET["age"])) {

    echo "Age: " . $_GET["age"] . "<br>";

}


// ============================================
// 3. $_POST
// ============================================

echo "<h2>3. \$_POST</h2>";

/*
POST normally comes from an HTML form.

Example:

<form method="POST">
    <input type="text" name="username">
    <button type="submit">Submit</button>
</form>
*/

if ($_SERVER["REQUEST_METHOD"] === "POST") {

    if (isset($_POST["username"])) {

        echo "Username: " . $_POST["username"] . "<br>";

    }

}


// ============================================
// 4. $_REQUEST
// ============================================

echo "<h2>4. \$_REQUEST</h2>";

/*
$_REQUEST can contain data from
GET, POST and COOKIE.
*/

if (isset($_REQUEST["name"])) {

    echo "Name: " . $_REQUEST["name"] . "<br>";

}


// ============================================
// 5. $_SESSION
// ============================================

echo "<h2>5. \$_SESSION</h2>";

session_start();

$_SESSION["username"] = "Shankho";
$_SESSION["course"] = "BCA";

echo "Username: " . $_SESSION["username"] . "<br>";
echo "Course: " . $_SESSION["course"] . "<br>";


// ============================================
// 6. $_COOKIE
// ============================================

echo "<h2>6. \$_COOKIE</h2>";

// Create a cookie
setcookie("user", "Shankho", time() + 3600);

if (isset($_COOKIE["user"])) {

    echo "Cookie value: " . $_COOKIE["user"];

} else {

    echo "Cookie was just created. Refresh the page to see it.";

}

echo "<br>";


// ============================================
// 7. $_FILES
// ============================================

echo "<h2>7. \$_FILES</h2>";

/*
Used for uploading files.

HTML example:

<form method="POST" enctype="multipart/form-data">

    <input type="file" name="myFile">

    <button type="submit">
        Upload
    </button>

</form>
*/

if (isset($_FILES["myFile"])) {

    echo "File name: " . $_FILES["myFile"]["name"] . "<br>";

    echo "File type: " . $_FILES["myFile"]["type"] . "<br>";

    echo "File size: " . $_FILES["myFile"]["size"] . "<br>";

    echo "Temporary location: "
        . $_FILES["myFile"]["tmp_name"] . "<br>";

}


// ============================================
// 8. $_ENV
// ============================================

echo "<h2>8. \$_ENV</h2>";

if (isset($_ENV["PATH"])) {

    echo "PATH environment variable exists.";

} else {

    echo "PATH environment variable not available.";

}

echo "<br>";


// ============================================
// 9. $GLOBALS
// ============================================

echo "<h2>9. \$GLOBALS</h2>";

$x = 10;
$y = 20;

function calculate()
{
    echo "X + Y = " . ($GLOBALS["x"] + $GLOBALS["y"]);
}

calculate();

echo "<br>";


// ============================================
// FINAL EXAMPLE
// ============================================

echo "<h2>Final Example</h2>";

$name = "Shankho";

function showUser()
{
    echo "User: " . $GLOBALS["name"];
}

showUser();

?>