<?php

$name = "<h1>Shankho</h1>";

$cleanName = filter_var($name, FILTER_SANITIZE_STRING);

echo "Original: " . $name;
echo "<br>";
echo "After filtering: " . $cleanName;

?>