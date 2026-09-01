<!-- 6. Write a PHP program to check a specified number is present in a given array of integers. -->

<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $arr = array_map('intval', explode(',', $_POST['arr']));
    $number = (int)$_POST['number'];

    $result = in_array($number, $arr) ? "true" : "false";
}
?>

<h2>Search Number in Array</h2>
<form method="post">
Array (comma separated): <input type="text" name="arr" value="10,20,30,40" required><br><br>
Number: <input type="number" name="number" value="30" required><br><br>
<button>Search</button>
</form>
<?php if ($result !== null) echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
