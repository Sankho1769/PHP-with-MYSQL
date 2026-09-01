<!-- 8. Write a PHP program to insert a given string into middle of the another given string of length 4. -->

<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $s = $_POST['s'];
    $insert = $_POST['insert'];

    $result = substr($s, 0, 2) . $insert . substr($s, 2);
}
?>

<h2>Insert String in Middle</h2>
<form method="post">
4-character string: <input type="text" name="s" value="abcd" maxlength="4" required><br><br>
String to insert: <input type="text" name="insert" value="XY" required><br><br>
<button>Insert</button>
</form>
<?php if ($result !== null) echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
