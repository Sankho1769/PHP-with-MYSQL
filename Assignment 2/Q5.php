<!-- 5. Write a PHP program to count the string "aa" in a given string and assume "aaa" contains two "aa". -->

<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $s = $_POST['s'];
    $result = 0;

    for ($i = 0; $i < strlen($s) - 1; $i++) {
        if (substr($s, $i, 2) === "aa") {
            $result++;
        }
    }
}
?>

<h2>Count "aa" in String</h2>
<form method="post">
String: <input type="text" name="s" value="aaa" required>
<button>Count</button>
</form>
<?php if ($result !== null) echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
