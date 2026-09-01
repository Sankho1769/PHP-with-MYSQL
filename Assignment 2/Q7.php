<!-- 7. Write a PHP program to check whether a given string starts with "F" or ends with "B". If the string starts with "F" return "Fizz" and return "Buzz" if it ends with "B" If the string starts with "F" and ends with "B" return "FizzBuzz". In other cases return the original string. -->

<!DOCTYPE html>
<html>
<body>
<?php
$result = null;
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    $s = $_POST['s'];
    $startsF = strtoupper(substr($s, 0, 1)) === "F";
    $endsB = strtoupper(substr($s, -1)) === "B";

    if ($startsF && $endsB) {
        $result = "FizzBuzz";
    } elseif ($startsF) {
        $result = "Fizz";
    } elseif ($endsB) {
        $result = "Buzz";
    } else {
        $result = $s;
    }
}
?>

<h2>Fizz / Buzz</h2>
<form method="post">
String: <input type="text" name="s" value="FAB" required>
<button>Check</button>
</form>
<?php if ($result !== null) echo "<h3>Result: $result</h3>"; ?>
</body>
</html>
