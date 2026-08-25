<!-- 10.	Write a PHP script to display string and values within a table. -->
<?php

$name = "Sankho";
$age = 20;
$city = "Kolkata";

echo "<table border='1'>";
echo "<tr><th>Name</th><th>Age</th><th>City</th></tr>";
echo "<tr>";
echo "<td>$name</td>";
echo "<td>$age</td>";
echo "<td>$city</td>";
echo "</tr>";
echo "</table>";

?>