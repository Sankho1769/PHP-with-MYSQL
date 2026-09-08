<?php

$name = readline("Enter student name: ");
$age = readline("Enter student age: ");

$xmlData = "
<student>
    <name>" . htmlspecialchars($name) . "</name>
    <age>" . (int)$age . "</age>
</student>
";

$xml = simplexml_load_string($xmlData);

echo "\nStudent Details:\n";
echo "Name: " . $xml->name . "\n";
echo "Age: " . $xml->age . "\n";

?>