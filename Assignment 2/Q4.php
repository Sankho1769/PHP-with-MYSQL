<!-- 4. Write a PHP program to convert the last 3 characters of a given string in upper case. If the length of the string has less than 3 then uppercase all the characters. -->

<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $s = $_POST['s'];
    $length = strlen($s);

    if ($length < 3) {
        $result = strtoupper($s);
    } else {
        $result = substr($s, 0, $length - 3) . strtoupper(substr($s, -3));
    }
}
?>

<h2>Uppercase Last 3 Characters</h2>
<form method="post">
String: <input type="text" name="s" value="hello" required>
<button>Convert</button>
</form>
<?php if ($result !== null) echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
