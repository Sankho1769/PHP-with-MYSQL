<!-- 10. Write a PHP program to rotate the elements of a given array of integers (length 4) in left direction and return the new array. -->

<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $arr = array_map('trim', explode(',', $_POST['arr']));
    $first = array_shift($arr);
    $arr[] = $first;

    $result = implode(', ', $arr);
}
?>

<h2>Rotate Array Left</h2>
<form method="post">
4 integers (comma separated): <input type="text" name="arr" value="1,2,3,4" required><br><br>
<button>Rotate</button>
</form>
<?php if ($result !== null) echo "<h3>Result: [$result]</h3>"; ?>
</body>
</html>
