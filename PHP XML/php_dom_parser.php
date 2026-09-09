<?php

$name = readline("Enter student name: ");
$age = readline("Enter student age: ");

$xmlData = "<?xml version=\"1.0\"?>
<student>
    <name>" . htmlspecialchars($name) . "</name>
    <age>" . (int)$age . "</age>
</student>";

$dom = new DOMDocument();
$dom->loadXML($xmlData);

$student = $dom->getElementsByTagName("student")->item(0);

$nameNode = $student->getElementsByTagName("name")->item(0);
$ageNode = $student->getElementsByTagName("age")->item(0);

echo "\nStudent Details:\n";
echo "Name: " . $nameNode->nodeValue . "\n";
echo "Age: " . $ageNode->nodeValue . "\n";

?>