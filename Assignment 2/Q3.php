<!-- 3. Write a PHP program to check whether two given integers are in the range 40..50 inclusive, or they are both in the range 50..60 inclusive. -->

<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];

    $range1 = ($a >= 40 && $a <= 50 && $b >= 40 && $b <= 50);
    $range2 = ($a >= 50 && $a <= 60 && $b >= 50 && $b <= 60);

    $result = ($range1 || $range2) ? "true" : "false";
}
?>

<h2>Check Two Numbers in Range</h2>
<form method="post">
First: <input type="number" name="a" value="45" required><br><br>
Second: <input type="number" name="b" value="48" required><br><br>
<button>Check</button>
</form>
<?php if ($result !== null) echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
