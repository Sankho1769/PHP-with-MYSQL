<!-- 1. Write a PHP program to check whether three given integer values are in the range 20..50 inclusive. Return true if 1 or more of them are in the said range otherwise false. -->

<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];
    $c = (int)$_POST['c'];

    if (($a >= 20 && $a <= 50) || ($b >= 20 && $b <= 50) || ($c >= 20 && $c <= 50)) {
        $result = "true";
    } else {
        $result = "false";
    }
}
?>

<h2>Check Range 20..50</h2>
<form method="post">
A: <input type="number" name="a" value="25" required><br>
B: <input type="number" name="b" value="10" required><br>
C: <input type="number" name="c" value="70" required><br>
<button>Check</button>
</form>
<?php if ($result !== null) echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
