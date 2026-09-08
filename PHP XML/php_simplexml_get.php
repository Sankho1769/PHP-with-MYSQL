<?php

$name = readline("Enter student name: ");
$age = readline("Enter student age: ");

$xml = new SimpleXMLElement("<student></student>");

$xml->addChild("name", htmlspecialchars($name));
$xml->addChild("age", (int)$age);

echo "\nStudent Details:\n";
echo "Name: " . $xml->name . "\n";
echo "Age: " . $xml->age . "\n";

?>