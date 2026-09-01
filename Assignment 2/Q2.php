<!-- 2. Write a PHP program to check which number nearest to the value 100 among two given integers. Return 0 if the two numbers are equal. -->
 
<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $a = (int)$_POST['a'];
    $b = (int)$_POST['b'];

    if ($a == $b) {
        $result = 0;
    } elseif (abs(100 - $a) < abs(100 - $b)) {
        $result = $a;
    } else {
        $result = $b;
    }
}
?>

<h2>Nearest to 100</h2>
<form method="post">
First: <input type="number" name="a" value="90" required><br><br>
Second: <input type="number" name="b" value="80" required><br><br>
<button>Check</button>
</form>
<?php if ($result !== null) echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
