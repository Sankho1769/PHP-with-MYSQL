<!-- 9. Write a PHP program to create a new string from two given string one is shorter and another is longer. The format of the new string will be long string + short string + long string. -->

<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = $_POST['a'];
    $b = $_POST['b'];

    if (strlen($a) >= strlen($b)) {
        $long = $a;
        $short = $b;
    } else {
        $long = $b;
        $short = $a;
    }

    $result = $long . $short . $long;
}
?>

<h2>Long + Short + Long</h2>
<form method="post">
First string: <input type="text" name="a" value="Hi" required><br><br>
Second string: <input type="text" name="b" value="Welcome" required><br><br>
<button>Create</button>
</form>
<?php if ($result !== null) echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
